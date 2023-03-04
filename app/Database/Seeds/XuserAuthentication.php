<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class XuserAuthentication extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'stevra.silvanus',
            'password' => '$2y$10$fUcBBMOgtWpa2i5KKnjdLelH6AX5ggBhtl8dPqVs4ay8Niy/S9JbW',
            'activation_token' => "",
            'remember_token' => "",
            'ref_user_id' => 'USR22082800001',
            'expire_token' => "",
        ];

        // Simple Queries
        $this->db->query('INSERT INTO users_authentication (username, password, activation_token, remember_token, ref_user_id, expire_token) VALUES(:username:, :password:, :activation_token:, :remember_token:, :ref_user_id:, :expire_token:)', $data);

        // Using Query Builder
        $this->db->table('users_authentication')->insert($data);
    }
}
