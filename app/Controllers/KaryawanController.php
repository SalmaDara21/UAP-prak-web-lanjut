<?php

namespace App\Controllers;

class KaryawanController extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function pesanan(){

        $data = [
            'title' => 'Pesanan Karyawan',
        ];

        return view('karyawan_pesanan', $data);
    }

    public function menu(){

        $data = [
            'title' => 'Menu Karyawan',
        ];

        return view('karyawan_menu', $data);
    }

    public function riwayat(){

        $data = [
            'title' => 'Riwayat Karyawan',
        ];

        return view('karyawan_riwayat', $data);
    }
}
