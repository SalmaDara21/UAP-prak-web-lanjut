<?php

namespace App\Database\Seeds;

use App\Models\TestimoniModel;
use CodeIgniter\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    public function run()
    {
        $TestimoniModel = new TestimoniModel();

        $TestimoniModel->save([
            'pesan' => 'oke',
            'id_users' => 8
        ]);

        $TestimoniModel->save([
            'pesan' => 'okek',
            'id_users' => 8
        ]);
    }
}
