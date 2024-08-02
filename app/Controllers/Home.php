<?php

namespace App\Controllers;

class Home extends BaseController
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

    public function index(): string
    {
        // Get total records for each table
        $totalPayments = $this->paymentsTable->countAllResults();
        $totalCustomers = $this->customersTable->countAllResults();
        $totalVehicles = $this->vehiclesTable->countAllResults();
        
        // Get payment details (optional)
        $this->paymentsTable
            ->select('payments.*, customers.name as customer_name, vehicles.model as vehicle_model, vehicles.name as vehicle_name, vehicles.price as vehicle_price')
            ->join('customers', 'payments.customer_id = customers.id', 'left')
            ->join('vehicles', 'payments.vehicle_id = vehicles.id ', 'left');

        $data = $this->paymentsTable->get()->getResult();
        $totalPayment = 0;
        $pendingAmount = 0;
        foreach ($data as $row) {
            $totalPayment += $row->amount;
            $pendingAmount += abs($row->amount - $row->vehicle_price);
        }

        // Pass data to the view
        $data = [
            'totalPayments' => $totalPayments,
            'totalCustomers' => $totalCustomers,
            'totalVehicles' => $totalVehicles,
            'totalPayment' => $totalPayment,
            'pendingAmount' => $pendingAmount,
        ];

        return view('index', $data);
    }
}
