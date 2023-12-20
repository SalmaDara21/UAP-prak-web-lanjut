<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\InventarisModel;
use App\Models\LaporanModel;
use App\Models\TestimoniModel;
use App\Controllers\BaseController;


class AdminController extends BaseController{
    public $menuModel;
    public $InventarisModel;

    public $testimoniModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
        $this->InventarisModel = new InventarisModel();
        $this->LaporanModel = new LaporanModel();
        $this->testimoniModel=new TestimoniModel();
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

######INVENTARIS######

    public function index_inventaris()
    {
        $data = [
            'title' => 'List Inventaris',
            'inventarist' => $this->InventarisModel->getInventaris(),
        ];
        return view('list_inventaris', $data);
    }

    // public function menu_admin(){

    //     $data = [
    //         'title' => 'Sanara Cafe'
    //     ];

    //     return view('menu_admin', $data);
    // }

    public function create_inventaris() : string {
        $data = [
            'title' => 'Create Inventaris',
        ];

        return view('create_inventaris', $data);
    }

    public function store_inventaris(){

       $this->InventarisModel->saveInventaris([
        'nama' => $this->request->getVar('nama'),
        'barang' => $this->request->getVar('barang'),
        'stok' => $this->request->getVar('stok'),
       ]);
    //    TAMBAHAN KEK NYAK SARA
    $data = [
        'nama' => $this->request->getVar('nama'),
        'barang' => $this->request->getVar('barang'),
        'stok' => $this->request->getVar('stok'),
    ];
        return redirect()->to('/inventaris');

    }

    public function show_inventaris($id){
        $inventaris = $this->InventarisModel->getInventaris($id);

        $data = [
            'title' => 'Inventaris',
            'inventarist' => $inventaris,
        ];
        return view('list_inventaris', $data);
    }

    public function edit_inventaris ($id){
        $inventaris = $this->InventarisModel->getInventaris($id);

        $data = [
            'title' => 'Inventaris',
            'inventaris' => $inventaris, 
        ];
        return view('edit_inventaris', $data);
    }

    public function update_inventaris($id){
        $data = [
            'nama' => $this->request->getVar('nama'),
            'barang' => $this->request->getVar('barang'),
            'stok' => $this->request->getVar('stok'),
        ];

        $result = $this->InventarisModel->updateInventaris($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
            ->with('error', 'Gagal Menyimpan Data');
        }
        return redirect()->to('/inventaris');
    }

    public function destroy_inventaris($id){
        $result = $this->InventarisModel->deleteInventaris($id);
        if (!$result) {
            return redirect()->back()->with('error', 'Gagal Menghapus Data');
        }
        return redirect()->to(base_url('/inventaris'))
        ->with('success', 'Berhasil Menghapus Data');
    }

####LAPORAN####

    public function index_laporan()
    {
        $data = [
            'title' => 'Laporan Penjualan',
            'info' => $this->LaporanModel->getLaporan(),
        ];
        return view('list_laporan', $data);
    }

    public function create_laporan() : string {
        $data = [
            'title' => 'Create Laporan',
        ];

        return view('create_laporan', $data);
    }

    public function store_laporan(){

       $this->LaporanModel->saveLaporan([
        'nama_menu' => $this->request->getVar('nama_menu'),
        'quantity' => $this->request->getVar('quantity'),
        'total' => $this->request->getVar('total'),
       ]);
    //    TAMBAHAN KEK NYAK SARA
    $data = [
        'nama_menu' => $this->request->getVar('nama_menu'),
        'quantity' => $this->request->getVar('quantity'),
        'total' => $this->request->getVar('total'),
    ];
        return redirect()->to('/laporan');

    }

    public function show_laporan($id){
        $laporan = $this->LaporanModel->getLaporan($id);

        $data = [
            'title' => 'Laporan',
            'laporan' => $laporan,
        ];
        return view('list_laporan', $data);
    }

    public function edit_laporan ($id){
        $laporan = $this->LaporanModel->getLaporan($id);

        $data = [
            'title' => 'Laporan',
            'laporan' => $laporan, 
        ];
        return view('edit_laporan', $data);
    }

    public function update_laporan($id){
        $data = [
            'nama_menu' => $this->request->getVar('nama_menu'),
            'quantity' => $this->request->getVar('quantity'),
            'total' => $this->request->getVar('total'),
        ];

        $result = $this->LaporanModel->updateLaporan($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
            ->with('error', 'Gagal Menyimpan Data');
        }
        return redirect()->to('/laporan');
    }

    public function destroy_laporan($id){
        $result = $this->LaporanModel->deleteLaporan($id);
        if (!$result) {
            return redirect()->back()->with('error', 'Gagal Menghapus Data');
        }
        return redirect()->to(base_url('/laporan'))
        ->with('success', 'Berhasil Menghapus Data');
    }
    
    public function admin_testimoni() {
        $testimoni = $this->testimoniModel->getTestimoni();
        
        $data = [
            'title' => 'Admin_Testimoni',
            'testimoni' => $testimoni
        ];

        return view ('admin_testimoni', $data);
    }
}
