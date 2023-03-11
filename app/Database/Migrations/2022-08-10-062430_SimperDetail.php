<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SimperDetail extends Migration
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
                'constraint'     => 20,
            ],
            'vehicle_id'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            'issue_date'      => [
                'type'           => 'DATE',
                'constraint'     => null,
            ],
            'note'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'status_simper'      => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'status_test'      => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'status_violation'      => [
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
        $this->forge->createTable('simper_detail');
    }

    public function down()
    {
        $this->forge->dropTable('simper_detail');
    }
}
