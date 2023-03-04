<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
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
            'users_id'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            'first_name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'last_name'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'address'      => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'phone'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'email'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'user_status'      => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'ref_role_id'      => [
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
        $this->forge->createTable('users');
    }

    public function down()
    {
        //
        $this->forge->dropTable('users');
    }
}
