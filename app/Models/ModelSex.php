<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSex extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ref_sex';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
}
