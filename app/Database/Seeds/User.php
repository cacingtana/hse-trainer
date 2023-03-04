<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $data = [
            'users_id' => 'USR22082800001',
            'first_name' => 'Stevra',
            'last_name' => 'Silvanus',
            'address' => 'Jl. Maccini raya Lorong Ampera No 13',
            'phone' => '123456789',
            'email' => 'epankbole@gmail.com',
            'user_status' => 1,
            'ref_role_id' => 1,
        ];

        // Simple Queries
        $this->db->query('INSERT INTO users (users_id, first_name, last_name, address, phone, email, user_status, ref_role_id) VALUES(:users_id:, :first_name:, :last_name:, :address:, :phone:, :email:, :user_status:, :ref_role_id:)', $data);

        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}
