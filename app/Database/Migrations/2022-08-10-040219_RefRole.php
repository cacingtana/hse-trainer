<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RefRole extends Migration
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
            'role_name'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'description'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
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
        $this->forge->createTable('ref_role');
    }

    public function down()
    {
        //
        $this->forge->dropTable('ref_role');
    }
}
