<?php

namespace App\Controllers;
use App\Models\InventarisModel;


class Admin extends BaseController
{
    public $invetorisModel;
    public function __construct(){
        $this->invetorisModel=new InventarisModel();
    }
    public function index(): string
    {

        $data = [
            'title' => 'Admin',
        ];

        return view('Dashboard_admin',$data);
    }

    public function user_list()
    {

        $data['title'] = 'User_List';

        // $users = new \myth\auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        $db = \config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();

        $data['users'] = $query->getResult();

        return view('user_list',$data);
    }

    public function detail($id = 0)
    {

        $data['title'] = 'detail';

        $db = \config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, fullname, user_image, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->where('users.id', $id);
        $query = $builder->get();

        $data['user'] = $query->getRow();

        if(empty($data['user'])) {
            return redirect()->to('/user_list');
        }

        return view('detail',$data);
    }

    public function stok_inventaris(){
        $data = [
            'title' => 'Stok Inventaris',
            'inventaris' => $this->invetorisModel->getInventaris(),
        ];
        return view('stok_inventaris',$data);
    }
    public function destroy_inventaris($id){
        $result= $this->invetorisModel->destroy($id);
        if(!$result) {
            return redirect()->back()->with('error','Gagal Menghapus Data');
        }
        return redirect()->to(base_url('/admin/stok_inventaris'));
    }
    public function update_inventaris($id){
        $data=[
            'jumlah_kursi'=>$this->request->getVar('jumlah_kursi'),
        ];
        $result=$this->invetorisModel->updateInventaris($data,$id);
        if(!$result){
            return redirect()->back()->withInput()->with('error','Gagal Menyimpan data');
        }

        return redirect()->to(base_url('/admin/stok_inventaris'));
    }
    public function store_inventaris(){
        if(!$this->validate($this->invetorisModel->getValidationRules())){
            session()->setFlashdata('errors',$this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $this->invetorisModel->saveInventaris([
            'nama_inventaris'=> $this->request->getVar('nama_inventaris'),
            'jumlah_kursi'=> $this->request->getVar('jumlah_kursi'),
        ]);
        session()->setFlashdata('success','data berhasil ditambahkan');

        return redirect()->to('/admin/stok_inventaris');
    }
}