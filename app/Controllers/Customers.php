<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Ana Santos', 'email' => 'ana.santos@example.com', 'phone' => '0917-555-0101'],
            ['full_name' => 'Ben Cruz', 'email' => 'ben.cruz@example.com', 'phone' => '0917-555-0102'],
            ['full_name' => 'Carla Reyes', 'email' => 'carla.reyes@example.com', 'phone' => '0917-555-0103'],
            ['full_name' => 'Daniel Lim', 'email' => 'daniel.lim@example.com', 'phone' => '0917-555-0104'],
            ['full_name' => 'Elena Garcia', 'email' => 'elena.garcia@example.com', 'phone' => '0917-555-0105'],
        ];

        return view('customers/index', [
            'title' => 'POS Lab | Customer Accounts',
            'heading' => 'Customer Accounts',
            'customers' => $customers,
        ]);
    }
}
