<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    public $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Menu Pelanggan',
            'menus' => $this->menuModel->getMenu(),
        ];
        return view('menu', $data);
    }

    



    // public function pesanan_pelanggan($id){
    //     $menu = $this->menuModel->find($id);

    //     $data = array(
    //         'id' => $menu,
    //         'name' => $menu->nama,
    //         'qty' => 1,
    //         'price' => $menu->harga,
    //     );
    //     $this->cart->insert($data);
    // redirect()->to('/menu-awal');
    // }
}
