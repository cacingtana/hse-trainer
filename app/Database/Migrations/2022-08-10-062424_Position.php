<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Position extends Migration
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
            'ref_user_id'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            'position_name'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 200,
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
        $this->forge->createTable('position');
    }

    public function down()
    {
        $this->forge->dropTable('position');
    }
}
