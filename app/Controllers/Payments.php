<?php

namespace App\Controllers;

class Payments extends BaseController
{
  
    protected $db;
    protected $paymentsTable;
    protected $customersTable;
    protected $vehiclesTable;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->paymentsTable = $this->db->table('payments');
        $this->customersTable = $this->db->table('customers');
        $this->vehiclesTable = $this->db->table('vehicles');
    }
    public function index(){
        return view('payments');
    }
    public function add()
    {
        return view('template/payments/addpage');
    }

    public function addData()
    {
        try {
            $data = [
                'customer_id' => $this->request->getVar('customer_id'), // Replace 'column1' with your actual column names
                'vehicle_id' => $this->request->getVar('vehicle_id'),
                'amount' => $this->request->getVar('amount'),
                
                // Add more columns as needed
            ];

            $inserted = $this->paymentsTable->insert($data);

            if ($inserted) {
                $result = 1;
            } else {
                $result = 0;
            }

        } catch (\Exception $e) {
            $result = ['status' => 'error', 'message' => $e->getMessage()];
        }

        echo json_encode($result);
    }

    public function getData(){
        // $data=$this->datatable->get()->getResult();
           // Join the payments table with customers and vehicles tables
           $this->paymentsTable
           ->select('payments.*, customers.name as customer_name, vehicles.model as vehicle_model,vehicles.name as vehicle_name,vehicles.price as vehicle_price')
              ->join('customers', 'payments.customer_id = customers.id', 'left')
              ->join('vehicles', 'payments.vehicle_id = vehicles.id ', 'left');
       $data = $this->paymentsTable->get()->getResult();

       // Return the view and pass the data to it
    //    return view('payments_view', $data);

        $tr="";
        $i=1;
        foreach ($data as $row) {
            $tr .= '<tr>
            <td>'.$i.'</td>
            <td>'.$row->customer_name.'</td>
            <td>'.$row->vehicle_name.'</td>
            <td>'.$row->amount.'</td>
            <td>'.$row->vehicle_price-$row->amount.'</td>

            <td>
            <button class="editpenbtn" type="button" onclick="showModal(\''.base_url().'payments/edit/'.$row->id.'\', \'Edit Customers\')">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            </button>
            <button class="editpenbtn" type="button" onclick="deletedata('.$row->id.')"> 
                <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
            </td>
        </tr>';
   
            # code...
            $i++;
        }
        return json_encode($tr);
    }

    public function edit($id){
        $data['edit']=$this->paymentsTable->getwhere(['id'=>$id])->getRow();
        echo view("template/payments/editpage",$data);
    }

    public function update($id){
        $editinput=$this->request->getVar();
        $result=$this->paymentsTable->where('id',$id)->update($editinput);
        echo json_encode($result);
    }

    public function delete($id){
        $result=$this->paymentsTable->where('id',$id)->delete();
        echo json_encode($result);
    }



 
}




