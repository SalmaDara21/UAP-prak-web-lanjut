<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTestimoniTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'pesan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_users' => [
                'type' => 'INT',
                'constraint' => '5',
                'unsigned' => true,
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
        $this->forge->addForeignKey('id_users', 'users', 'id');
        $this->forge->createTable('testimoni');
    }

    public function down()
    {
        $this->forge->dropTable('testimoni', true);
    }
}
