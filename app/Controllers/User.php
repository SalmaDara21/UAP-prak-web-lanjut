<?php

namespace App\Controllers;

use Myth\Auth\Models\UserModel;

class User extends BaseController
{
    public $userModel;
    public function __construct(){
        $this->userModel = new UserModel();
    }
    public function index(): string
    {
        $data = [
            'title' => 'User'
        ];
        return view('Dashboard_admin',$data);
    }

    public function profile()
    {
        $data['title'] = 'My Profile';
        return view('profile', $data);
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

        if ($foto->isValid()) {
            $name = $foto->getRandomName();

            if ($foto->move($path, $name)) {
                $foto_path = base_url($path . $name);
                user()->user_image = $foto_path;
            }
        }


        $data = [
            'fullname' => $this->request->getPost('fullname'),
            'user_image' => $foto_path
        ];
        

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
}