<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Category extends Seeder
{
    public function run()
    {
        $data = [
            'category_name' => 'ASSET',
            'ref_user_id' => 'USR22082800001',
        ];

        // Simple Queries
        $this->db->query('INSERT INTO ref_category (category_name, ref_user_id) VALUES(:category_name:, :ref_user_id:)', $data);

        // Using Query Builder
        $this->db->table('ref_category')->insert($data);
    }
}
