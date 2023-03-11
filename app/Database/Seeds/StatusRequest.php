<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StatusRequest extends Seeder
{
    public function run()
    {
        $data = [
            'status_name' => 'Training',
        ];

        // Simple Queries
        $this->db->query('INSERT INTO ref_status_request (status_name) VALUES(:status_name:)', $data);

        // Using Query Builder
        $this->db->table('ref_status_request')->insert($data);
    }
}
