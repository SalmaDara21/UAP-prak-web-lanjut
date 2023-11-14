<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Controllers\BaseController;


class AdminController extends BaseController{
    public $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Menu',
            'menus' => $this->menuModel->getMenu(),
        ];
        return view('list_menu', $data);
    }

    public function menu_admin(){

        $data = [
            'title' => 'Sanara Cafe'
        ];

        return view('menu_admin', $data);
    }

    public function create() : string {
        $data = [
            'title' => 'Create Menu',
        ];

        return view('create_menu', $data);
    }

    public function store(){
        $path = 'assets/uploads/img/' ;

        $foto = $this->request->getFile('foto');
        
        $name = $foto->getRandomName();

        if($foto->move($path, $name)){
            $foto = base_url($path . $name);
        }

       $this->menuModel->saveMenu([
        'nama' => $this->request->getVar('nama'),
        'harga' => $this->request->getVar('harga'),
        'foto' => $foto
       ]);
    //    TAMBAHAN KEK NYAK SARA
    $data = [
        'nama' => $this->request->getVar('nama'),
        'harga' => $this->request->getVar('harga'),
        'foto' => $this->request->getVar('foto'),
    ];
        return redirect()->to('/menu');

    }

    public function show($id){
        $menu = $this->menuModel->getMenu($id);

        $data = [
            'title' => 'Menu',
            'menu' => $menu,
        ];
        return view('menu', $data);
    }

    public function edit ($id){
        $menu = $this->menuModel->getMenu($id);

        $data = [
            'title' => 'Menu',
            'menu' => $menu, 
        ];
        return view('edit_menu', $data);
    }

    public function update($id){
        $path = 'assets/uploads/img/';

        $foto = $this->request->getFile('foto');


        if($foto->isValid()){
            $name = $foto->getRandomName();

            if($foto->move($path, $name)){
                $foto_path = base_url($path . $name);
            }
        }
        $data = [
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'foto' => $foto_path
        ];

        $result = $this->menuModel->updateMenu($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
            ->with('error', 'Gagal Menyimpan Data');
        }
        return redirect()->to('/menu');
    }

    public function destroy($id){
        $result = $this->menuModel->deleteMenu($id);
        if (!$result) {
            return redirect()->back()->with('error', 'Gagal Menghapus Data');
        }
        return redirect()->to(base_url('/menu'))
        ->with('success', 'Berhasil Menghapus Data');
    }
}
