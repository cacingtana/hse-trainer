<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Notification extends Migration
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
            'notification_id'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            'message'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'start_at' => [
                'type'           => 'DATE',
                'DEFAULT'        => NULL,
            ],
            'expire_at' => [
                'type'           => 'DATE',
                'DEFAULT'        => NULL,
            ],
            'status'      => [
                'type' => 'INT',
                'constraint' => 11,
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
        $this->forge->createTable('notification');
    }

    public function down()
    {
        $this->forge->dropTable('notification');
    }
}
