<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInventarisTable extends Migration
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
            'nama_inventaris'            => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
            ],
            'jumlah_kursi'  => [
                'type'              => 'INT',
                'constraint'        => '11',
            ],
            'Booked'=> [
                'type'=> 'BOOLEAN',
                'default'=> false,
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
        $this->forge->createTable('inventaris');
    }

    public function down()
    {
        $this->forge->dropColumn('inventaris',true);
    }
}
