<?php

namespace App\Controllers;
use App\Models\MenuModel;

class Home extends BaseController
{
    public $menuModel;

    public function __construct(){
        $this->menuModel = new MenuModel();
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

        $data = [
            'title' => 'Sanara Cafe',
            'menu' => $this->menuModel->getMenu(),
        ];

        return view('menu', $data);
    }

    public function pesan(){
        $allMenu =$this->menuModel->getMenu();
        $selectedMenu=[];
        $selectedMenuCount=[];
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
        ];
        return view('pemesanan_pelanggan',$data);
    }
    

}
