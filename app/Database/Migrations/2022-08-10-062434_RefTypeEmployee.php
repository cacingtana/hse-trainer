<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RefTypeEmployee extends Migration
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
            'type_employee'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 10,
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
        $this->forge->createTable('ref_type_employee');
    }

    public function down()
    {
        //
        $this->forge->dropTable('ref_type_employee');
    }
}
