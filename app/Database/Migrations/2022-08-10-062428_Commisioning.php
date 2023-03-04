<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Employee extends Migration
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
            'id_emp'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            'nik'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            'ref_user_id'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            'ref_coorporate_id'      => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'ref_dept_id'      => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'ref_unit_id'      => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'ref_position_id'      => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'name_emp'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'address_emp'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 200,
            ],
            'phone_emp'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            'email_emp'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'status'      => [
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
        $this->forge->createTable('employee');
    }

    public function down()
    {
        //
        $this->forge->dropTable('employee');
    }
}
