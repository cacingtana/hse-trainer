<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRefTypeEmployee extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ref_type_employee';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'type_employee',
        'created_at',
        'updated_at',
    ];

    // Dates
    protected $useTimestamps = false;
}
