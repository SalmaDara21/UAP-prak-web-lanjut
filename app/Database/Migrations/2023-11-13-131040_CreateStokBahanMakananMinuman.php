<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStokBahanMakananMinuman extends Migration
{
    public function up()
    {
        $this->forge->addField  ([
            'id' => [
                'type'              => 'INT',
                'constraint'        => '11',
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'nama_bahan'            => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
            ],
            'jumlah_stok'  => [
                'type'              => 'INT',
                'constraint'        => '11',
            ],
            'created_at'  => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'update_at'  => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'delete_at'  => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('stok_bahan_menu');
    }

    public function down()
    {
        $this->forge->dropTable('stok_bahan_menu', true);  
    }
}
