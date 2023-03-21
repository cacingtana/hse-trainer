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
            'type_emp'      => [
                'type'           => 'INT',
                'constraint'     => 11,
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
                'type'           => 'VARCHAR',
                'constraint'     => 100,
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
            'sim_sio'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'license_number'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'date_expired_request' => [
                'type'           => 'DATE',
                'DEFAULT'        => NULL,
            ],
            'date_expired_sim_sio' => [
                'type'           => 'DATE',
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
                'type'           => 'DATE',
                'DEFAULT'        => NULL,
            ],
            'updated_at' => [
                'type'           => 'DATE',
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
