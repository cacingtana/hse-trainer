<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Commisioning extends Migration
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
            'id_commisioning'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'vehicle_id'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'no_unit'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'no_mesin'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'type_unit'      => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'ref_coorporate_id'      => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'ref_department_id' => [
                'type' => 'INT',
                'constraint' => 11,
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
        $this->forge->createTable('commisioning');
    }

    public function down()
    {
        $this->forge->dropTable('commisioning');
    }
}
