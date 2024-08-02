<?php

namespace App\Controllers;

class Customers extends BaseController
{
  
    protected $db;
    protected $datatable;

    public function __construct()
    {
        // parent::__construct();
        $this->db = \Config\Database::connect();
        $this->datatable = $this->db->table('customers');
    }

    public function index(){
        return view('customers');
    }
    public function add()
    {
        return view('template/customers/addpage');
    }

    public function addData()
    {
        try {
            $data = [
                'name' => $this->request->getVar('name'), // Replace 'column1' with your actual column names
                'email' => $this->request->getVar('email'),
                'mobile_number' => $this->request->getVar('mobile_number'),
                // Add more columns as needed
            ];

            $inserted = $this->datatable->insert($data);

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
        $data=$this->datatable->get()->getResult();
        $tr="";
        $i=1;
        foreach ($data as $row) {
            $tr .= '<tr>
            <td>'.$i.'</td>
            <td>'.$row->name.'</td>
            <td>'.$row->email.'</td>
            <td>'.$row->mobile_number.'</td>
            <td>
            <button class="editpenbtn" type="button" onclick="showModal(\''.base_url().'customers/edit/'.$row->id.'\', \'Edit Customers\')">
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
        $data['edit']=$this->datatable->getwhere(['id'=>$id])->getRow();
        echo view("template/customers/editpage",$data);
    }

    public function update($id){
        $editinput=$this->request->getVar();
        $result=$this->datatable->where('id',$id)->update($editinput);
        echo json_encode($result);
    }

    public function delete($id){
        $result=$this->datatable->where('id',$id)->delete();
        echo json_encode($result);
    }



 
}
