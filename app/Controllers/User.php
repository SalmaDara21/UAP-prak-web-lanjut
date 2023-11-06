<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'User'
        ];
        return view('Dashboard_admin',$data);
    }
}