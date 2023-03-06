<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Vehicle extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'unit_name'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'note'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'DEFAULT'        => NULL,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'DEFAULT'        => NULL,
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('vehicle');
    }

    public function down()
    {
        //
        $this->forge->dropTable('vehicle');
    }
}
