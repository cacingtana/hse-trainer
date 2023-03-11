<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StatusTest extends Seeder
{
    public function run()
    {
        $data = [
            'test_name' => 'Lulus',
        ];

        // Simple Queries
        $this->db->query('INSERT INTO ref_status_test (test_name) VALUES(:test_name:)', $data);

        // Using Query Builder
        $this->db->table('ref_status_test')->insert($data);
    }
}
