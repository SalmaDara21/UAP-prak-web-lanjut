<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Admin'
        ];
        return view('Dashboard_admin',$data);
    }
}