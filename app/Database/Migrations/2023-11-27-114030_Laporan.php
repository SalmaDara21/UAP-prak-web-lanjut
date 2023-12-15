<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Laporan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => true,
                'auto_increment'=> true,
            ],
            'nama_menu' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'quantity' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'total' => [
                'type'          => 'INT',
                'constraint'    => 8,
                'unsigned'      => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true, true);
        $this->forge->createTable('laporan');
    }

    public function down()
    {
        $this->forge->dropTable('laporan', true);
    }
}
