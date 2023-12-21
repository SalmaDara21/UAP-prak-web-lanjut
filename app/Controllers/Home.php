<?php

namespace App\Controllers;
use App\Models\MenuModel;
use App\Models\InventarisModel;
use App\Models\PesananModel;

class Home extends BaseController
{
    public $menuModel;
    public $invetorisModel;
    public $pesananModel;


    public function __construct(){
        $this->menuModel = new MenuModel();
        $this->invetorisModel=new InventarisModel();
        $this->pesananModel=new PesananModel();
    }
    public function index(): string
    {
        return view('auth/login');
    }
    public function register(): string
    {
        return view('auth/register');
    }

    public function test(){

        $data = [
            'title' => 'Sanara'
        ];

        return view('test', $data);
    }


    public  function adminDashboard():string{
        $data = [
            'title'=> 'admin'
        ];
        return view('Dashboard_admin',$data);
    }

    public function menu(){
            $seat=$_POST['seat'];
            $decodedData = json_decode($seat, true);
            $selectedSeats = $decodedData['selectedSeats'];
        if(isset($selectedSeats[0])){
            $data = [
                'title' => 'Sanara Cafe',
                'menu' => $this->menuModel->getMenu(),
                'seat'=> $selectedSeats
            ];
    
            return view('menu', $data);
        }
        else{
            $data=[
                'title'=>'Booking',
                'inventaris' => $this->invetorisModel->getInventaris(),
                ];
            return view('booking', $data);
        }
    }

    public function pesan(){
        $allMenu =$this->menuModel->getMenu();
        $selectedMenu=[];
        $selectedMenuCount=[];
        $seat=$_POST['seat'];
        foreach($allMenu as $i){
           if( $this->request->getPost($i['id'])>0){
                $selectedMenu[$i['id']]=$i;
                $selectedMenuCount[$i['id']]=$this->request->getPost($i['id']);
           }
        }
        $data = [
            'title' => 'Sanara Cafe',
            'menu' => $selectedMenu,
            'count'=>$selectedMenuCount,
            'seat'=> $seat,
        ];
        return view('pemesanan_pelanggan',$data);
    }

    public function insertPesanan(){
        
        $this->pesananModel->savePesanan([
            'pesanan'=> $this->request->getPost('menu'),
            'meja'=> $this->request->getPost('seat'),
            'jumlah'=> $this->request->getPost('count'),
            'nama'=> $this->request->getPost('name'),
            'harga'=> $this->request->getPost('harga'),
            'status'=> $this->request->getPost('status')
        ]);

        return redirect()->to('/logout'); 
        // return view('menu');
    }
    

}
