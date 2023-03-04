<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Departments extends Seeder
{
    public function run()
    {
        $data = [
            'ref_user_id' => 'USR22082800001',
            'dept_name' => 'IT',
        ];

        try {
            // Simple Queries
            $this->db->query('INSERT INTO departments (ref_user_id, dept_name) VALUES(:ref_user_id:, :dept_name:)', $data);

            // Using Query Builder
            $this->db->table('departments')->insert($data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
