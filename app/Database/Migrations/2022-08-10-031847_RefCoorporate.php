<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RefCoorporate extends Migration
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
            'coorporate_name'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'abbreviation'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'coorporate_images'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
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
        $this->forge->createTable('ref_coorporate');
    }

    public function down()
    {
        //
        $this->forge->dropTable('ref_coorporate');
    }
}
