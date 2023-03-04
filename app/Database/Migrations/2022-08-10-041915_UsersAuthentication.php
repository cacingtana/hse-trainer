<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsersAuthentication extends Migration
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
            'username'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'password'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'activation_token'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'remember_token'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'ref_user_id'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            'expire_token' => [
                'type'           => 'DATETIME',
                'DEFAULT'        => NULL,
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
        $this->forge->createTable('users_authentication');
    }

    public function down()
    {
        //
        $this->forge->dropTable('users_authentication');
    }
}
