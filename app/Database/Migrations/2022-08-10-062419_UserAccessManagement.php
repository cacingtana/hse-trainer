<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserAccessManagement extends Migration
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
            'purchase' => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'receive' => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'stock_management' => [
                'type'           => 'INT',
                'constraint' => 11,
            ],
            'r_trans_in' => [
                'type'           => 'INT',
                'constraint' => 11,
            ],
            'r_trans_out' => [
                'type'           => 'INT',
                'constraint' => 11,
            ],
            'product' => [
                'type'           => 'INT',
                'constraint' => 11,
            ],
            'customer' => [
                'type'           => 'INT',
                'constraint' => 11,
            ],
            'supplier' => [
                'type'           => 'INT',
                'constraint' => 11,
            ],
            'category' => [
                'type'           => 'INT',
                'constraint' => 11,
            ],
            'unit' => [
                'type'           => 'INT',
                'constraint' => 11,
            ],
            'payment' => [
                'type'           => 'INT',
                'constraint' => 11,
            ],
            'shipment' => [
                'type'           => 'INT',
                'constraint' => 11,
            ],
            'taxes' => [
                'type'           => 'INT',
                'constraint' => 11,
            ],
            'discount' => [
                'type'           => 'INT',
                'constraint' => 11,
            ],
            'users' => [
                'type'           => 'INT',
                'constraint' => 11,
            ],
            'level' => [
                'type'           => 'INT',
                'constraint' => 11,
            ],
            'ref_user_id' => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            'ref_administrator_id' => [
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
        $this->forge->createTable('user_acces_management');
    }

    public function down()
    {
        //
        $this->forge->dropTable('user_acces_management');
    }
}
