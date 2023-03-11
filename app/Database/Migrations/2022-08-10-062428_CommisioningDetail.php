<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CommisioningDetail extends Migration
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
            'commisioning_id'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'type_commisioning'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 200,
            ],
            'date_commisioning'      => [
                'type'           => 'DATE',
                'DEFAULT'     => NULL,
            ],
            'date_expired_commisioning'      => [
                'type'           => 'DATE',
                'DEFAULT'     => NULL,
            ],
            'hm_km'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            'plant'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'safety'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'trainer'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'informasi'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'note'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'status_test'      => [
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
        $this->forge->createTable('commisioning_detail');
    }

    public function down()
    {
        $this->forge->dropTable('commisioning_detail');
    }
}
