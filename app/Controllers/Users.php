<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        static $users = [
            ['username' => 'asantos', 'full_name' => 'Ana Santos', 'role' => 'Cashier'],
            ['username' => 'bcruz', 'full_name' => 'Ben Cruz', 'role' => 'Inventory Clerk'],
            ['username' => 'creyes', 'full_name' => 'Carla Reyes', 'role' => 'Cashier'],
            ['username' => 'dlim', 'full_name' => 'Daniel Lim', 'role' => 'Manager'],
            ['username' => 'egarcia', 'full_name' => 'Elena Garcia', 'role' => 'Administrator'],
        ];

        return view('users/index', [
            'title' => 'POS Lab | User Accounts',
            'heading' => 'User Accounts',
            'users' => $users,
        ]);
    }
}
