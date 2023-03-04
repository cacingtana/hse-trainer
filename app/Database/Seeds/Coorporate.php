<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Coorporate extends Seeder
{
    public function run()
    {
        $data = [
            'coorporate_name' => 'HJF',
            'ref_user_id' => 'USR22082800001',
        ];

        // Simple Queries
        $this->db->query('INSERT INTO ref_coorporate (coorporate_name, ref_user_id) VALUES(:coorporate_name:, :ref_user_id:)', $data);

        // Using Query Builder
        $this->db->table('ref_coorporate')->insert($data);
    }
}
