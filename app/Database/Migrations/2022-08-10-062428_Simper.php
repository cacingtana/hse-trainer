<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Simper extends Migration
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
            'id_simper'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'employee_id'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'note'      => [
                'type'           => 'INT',
                'constraint'     => 11,
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
        $this->forge->createTable('simper');
    }

    public function down()
    {
        //
        $this->forge->dropTable('simper');
    }
}
