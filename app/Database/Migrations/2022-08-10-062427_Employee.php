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
                'constraint'     => 50,
            ],
            'nip'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'name_emp'      => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'sex'      => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'ref_department_id'      => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'ref_position_id'      => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'date_request' => [
                'type'           => 'DATETIME',
                'DEFAULT'        => NULL,
            ],
            'date_eye_test' => [
                'type'           => 'DATETIME',
                'DEFAULT'        => NULL,
            ],
            'date_write_test' => [
                'type'           => 'DATETIME',
                'DEFAULT'        => NULL,
            ],
            'date_practice_test' => [
                'type'           => 'DATETIME',
                'DEFAULT'        => NULL,
            ],
            'sim_sio'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'license_number'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'date_expired_request' => [
                'type'           => 'DATETIME',
                'DEFAULT'        => NULL,
            ],
            'date_expired_sim_sio' => [
                'type'           => 'DATETIME',
                'DEFAULT'        => NULL,
            ],
            'status_emp'      => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'ref_coorporate_id'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
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
        $this->forge->createTable('employee');
    }

    public function down()
    {
        $this->forge->dropTable('employee');
    }
}
