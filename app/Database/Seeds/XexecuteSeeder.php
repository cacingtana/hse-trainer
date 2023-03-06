<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class XexecuteSeeder extends Seeder
{
    public function run()
    {
        $this->call('Coorporate');
        $this->call('Role');
        $this->call('User');
        $this->call('Status');
        $this->call('Departments');
        $this->call('Position');
        $this->call('Sex');
    }
}
