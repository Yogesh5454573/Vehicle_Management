<?php

namespace App\Controllers;

class Api extends BaseController
{
  
    protected $db;
    protected $datatable;

    public function __construct()
    {
        // parent::__construct();
        $this->db = \Config\Database::connect();
        $this->dataCustomers = $this->db->table('customers');
        $this->dataVehicles = $this->db->table('vehicles');

    }

    public function getCustomers(){
        $data=$this->dataCustomers->get()->getResult();
        $tr="";
        $i=1;
        foreach ($data as $row) {
            $tr .= ' <option value="'.$row->id.'">'.$row->name.'</option>';
   
            # code...
            $i++;
        }
        return json_encode($tr);
    }


    public function getVehicles(){
        $data=$this->dataVehicles->get()->getResult();
        $tr="";
        $i=1;
        foreach ($data as $row) {
            $tr .= ' <option value="'.$row->id.'">'.$row->name.'</option>';
   
            # code...
            $i++;
        }
        return json_encode($tr);
    }






 
}
