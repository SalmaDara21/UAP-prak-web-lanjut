<?php

namespace App\Controllers;

class KaryawanController extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function pesanan(){

        return view('karyawan_pesanan');
    }

    public function menu(){

        return view('karyawan_menu');
    }

    public function riwayat(){

        return view('karyawan_riwayat');
    }
}
