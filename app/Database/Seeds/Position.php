<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Position extends Seeder
{
    public function run()
    {
        $data = [
            'ref_user_id' => 'USR22082800001',
            'position_name' => 'Staff',
        ];

        // Simple Queries
        $this->db->query('INSERT INTO position (ref_user_id, position_name) VALUES(:ref_user_id:, :position_name:)', $data);

        // Using Query Builder
        $this->db->table('position')->insert($data);
    }
}
