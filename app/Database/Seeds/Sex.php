<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Sex extends Seeder
{
    public function run()
    {
        $data = [
            'sex_name' => 'Pria',
        ];

        // Simple Queries
        $this->db->query('INSERT INTO ref_sex (sex_name) VALUES(:sex_name:)', $data);

        // Using Query Builder
        $this->db->table('ref_sex')->insert($data);
    }
}
