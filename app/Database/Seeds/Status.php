<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Status extends Seeder
{
    public function run()
    {
        $data = [
            'status_name' => 'Aktif',
        ];

        // Simple Queries
        $this->db->query('INSERT INTO ref_status (status_name) VALUES(:status_name:)', $data);

        // Using Query Builder
        $this->db->table('ref_status')->insert($data);
    }
}
