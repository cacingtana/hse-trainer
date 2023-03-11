<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Vehicle extends Seeder
{
    public function run()
    {
        $data = [
            'unit_name' => 'Forklift',
            'note' => 'Alat berat',
        ];

        // Simple Queries
        $this->db->query('INSERT INTO vehicle (unit_name, note) VALUES(:unit_name:, :note:)', $data);

        // Using Query Builder
        $this->db->table('vehicle')->insert($data);
    }
}
