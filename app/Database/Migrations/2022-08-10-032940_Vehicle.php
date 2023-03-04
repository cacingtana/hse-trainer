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
            'vehicle_id'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            'employee_id'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            'vehicle_name'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'issue_date' => [
                'type' => 'DATETIME',
                'null' => NULL,
            ],
            'note'      => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'ref_user_id'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
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
