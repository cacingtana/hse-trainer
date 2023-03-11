<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StatusViolation extends Seeder
{
    public function run()
    {
        $data = [
            'violation_name' => 'Pelanggaran 1',
        ];

        // Simple Queries
        $this->db->query('INSERT INTO ref_status_violation (violation_name) VALUES(:violation_name:)', $data);

        // Using Query Builder
        $this->db->table('ref_status_violation')->insert($data);
    }
}
