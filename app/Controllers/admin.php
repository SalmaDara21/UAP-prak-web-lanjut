<?php

namespace App\Controllers;




class Admin extends BaseController
{
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
}