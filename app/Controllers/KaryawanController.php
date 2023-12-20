<?php

namespace App\Controllers;

use Myth\Auth\Models\UserModel;
use App\Models\InventarisModel;
use App\Models\PesananModel;

class KaryawanController extends BaseController
{
    public $invetorisModel;
    public $userModel;
    public $pesananModel;
    public function __construct(){
        $this->userModel = new UserModel();
        $this->invetorisModel=new InventarisModel();
        $this->pesananModel=new PesananModel();
    }

    public function index(): string
    {
        return view('welcome_message');
    }

    public function pesanan(){
        $pesanan = $this->pesananModel->getPesanan();

        $data = [
            'title' => 'Pesanan Karyawan',
            'pesanan' => $pesanan
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

    public function profile_karyawan(){

        $data = [
            'title' => 'Profile Karyawan',
        ];

        return view('profile_karyawan', $data);
    }

    public function edit_profile_karyawan() {

        
        $data = [
            'title' => 'Edit Profile Karyawan',
        ];

        return view ('edit_profile_karyawan', $data);
    }

    public function update_profile_karyawan() {


        $path = 'assets/img/';

        $foto = $this->request->getFile('user_image');

        $data = [
            'fullname' => $this->request->getPost('fullname'),
            // 'user_image' => $foto_path
        ];

        if ($foto->isValid()) {
            $name = $foto->getRandomName();

            if ($foto->move($path, $name)) {
                $foto_path = base_url($path . $name);
                $data['user_image'] = $foto_path;
            }
        }
        
        if(!$this->userModel->update(user()->id,$data)){
            session()->setFlashdata("Error", "failed update");
            session()->setFlashdata("ErrorData", $this->userModel->errors());
            return redirect()->back()->withInput;
        }

        $find=$this->userModel->getWhere(['id'=>user()->id])->getRowArray();
        session()->remove('LoggedUserData');
        session()->set('LoggedUserData', $find);
        session()->setFlashdata("Success", "profile update success");
        return redirect()->to(base_url()."karyawan-profile");
    }


}
