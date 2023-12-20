<?php

namespace App\Controllers;

use Myth\Auth\Models\UserModel;
use App\Models\InventarisModel;
use App\Models\TestimoniModel;

class User extends BaseController
{
    public $invetorisModel;
    public $userModel;
    public $testimoniModel;
    public function __construct(){
        $this->userModel = new UserModel();
        $this->invetorisModel=new InventarisModel();
        $this->testimoniModel=new TestimoniModel();
    }
    public function index()
    {
        // $data = [
        //     'title' => 'User',
        //     'inventaris' => $this->invetorisModel->getInventaris(),
        // ];
        // return view('menu',$data);

        $data = [
                'inventaris' => $this->invetorisModel->getInventaris(),
            ];

        $path="menu";
        if (in_groups("admin")){
            $path= "admin";
        }else if(in_groups("pelayan")){
            $path= "karyawan-pesanan";
        }else if(in_groups("user")){
            $path= "booking";
        }
        return redirect()->route($path, $data);
    }

    public function profile()
    {
        $data['title'] = 'My Profile';
        return view('profile', $data);
    }
    public function booking()
    {
        $data=[
            'title'=>'Booking',
            'inventaris' => $this->invetorisModel->getInventaris(),
            ];
        return view('booking', $data);
    }

    public function updateBookingTable(){
        $postData = file_get_contents("php://input");
        // Jika datanya ada
        if (!empty($postData)) {
            // Mendekode data JSON yang diterima
            $decodedData = json_decode($postData, true);

            // Mengekstrak nilai selectedSeats dari data yang diterima
            $selectedSeats = $decodedData['selectedSeats'];
            
            // Lakukan operasi atau manipulasi data yang diterima sesuai kebutuhanmu
            // Misalnya, menambahkannya ke dalam database atau melakukan operasi lainnya
            // ...
            
            // Memberi respons atau pesan bahwa data berhasil diterima
            echo 'Data berhasil diterima di PHP';
        } else {
            // Jika data tidak ditemukan
            echo 'Data tidak ditemukan';
        }
        $data=[
            'Booked'=>1,
            'seat'=>$selectedSeats,
        ];
        foreach($selectedSeats as $seat){
            $result=$this->invetorisModel->updateInventaris($data,$seat);
            if(!$result){
                return redirect()->back()->withInput()->with('error','Gagal Menyimpan data');
            }
        }
        return view('menu',$data);
        
    }

    public function edit() {

        
        $data = [
            'title' => 'edit profile',
        ];

        return view ('edit_profile', $data);
    }

    public function update() {

        // print_r($this->request->getPost());
        

        // $img='';
        // $files=$this->request->getFile('user_image');
        // $data=[];
        // if(!$files->isValid()){
        //     $data=[
        //         'fullname'=>$this->request->getPost('fullname')
        //     ];
        // } else {
        //     if(!$this->userModel->isValidFileType($files->getMimeType())){
        //         session()->setFlashdata("Error", "please upload file");
        //         return redirect()->back()->withInput();
        //     }
        //     $file=$files->move('public/img/', $files->getClientName());
        //     if($files->hasMoved()){
        //         $img=$files->getName();
        //     }

        // }

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
        return redirect()->to(base_url()."profile");
    }

    public function testimoni() {
        $testimoni = $this->testimoniModel->getTestimoni();
        
        $data = [
            'title' => 'Testimoni',
            'testimoni' => $testimoni
        ];

        return view ('user_testimoni', $data);
    }

    public function store_testimoni()
    {
        // dd($this->request->getVar());

        // $user_id = user()->id;

        $this->testimoniModel->saveTestimoni([
            'pesan' => $this->request->getVar('pesan'),
        ]);


        $data = [
            'pesan' => $this->request->getVar('pesan'),
            'title' => 'store_testimoni'
        ];

        // return view ('profile', $data);
        return redirect()->to('/menu-awal');
    }
}