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
            'title' => 'Tesuto'
        ];

        return view('test', $data);
    }

    public function menu(){

        $data = [
            'title' => 'Tesuto'
        ];

        return view('menu', $data);
    }

}
