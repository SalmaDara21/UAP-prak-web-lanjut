<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function test(){

        $data = [
            'title' => 'Sanara'
        ];

        return view('test', $data);
    }


    public  function adminDashboard():string{
        $data = [
            'title'=> 'admin'
        ];
        return view('Dashboard_admin',$data);
    }

    public function menu(){

        $data = [
            'title' => 'Sanara Cafe'
        ];

        return view('menu', $data);
    }
    

}
