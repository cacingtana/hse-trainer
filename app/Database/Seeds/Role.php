<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Role extends Seeder
{
    public function run()
    {
        $data = [
            'role_name' => 'Administrator',
            'description' => 'Akses',
            'ref_user_id' => 'USR22082800001',
        ];

        // Simple Queries
        $this->db->query('INSERT INTO ref_role (role_name, description, ref_user_id) VALUES(:role_name:, :description:, :ref_user_id:)', $data);

        // Using Query Builder
        $this->db->table('ref_role')->insert($data);
    }
}
