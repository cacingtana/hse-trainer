<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RefStatusEye extends Migration
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
            'eye_name'       => [
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
        $this->forge->createTable('ref_status_eye');
    }

    public function down()
    {
        //
        $this->forge->dropTable('ref_status_eye');
    }
}
