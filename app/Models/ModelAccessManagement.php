<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAccessManagement extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user_acces_management';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'purchase',
        'receive',
        'stock_management',
        'r_trans_in',
        'r_trans_out',
        'product',
        'customer',
        'supplier',
        'category',
        'unit',
        'payment',
        'shipment',
        'taxes',
        'discount',
        'users',
        'level',
        'ref_user_id',
        'ref_administrator_id',
        'created_at',
        'updated_at',
    ];

    // Dates
    protected $useTimestamps = false;

    public function update($id = null, $data = null): bool
    {
        return $this->db->table($this->table)->update($data, ['ref_user_id' => $id]);
    }

    public function getAccessByUserId($id)
    {
        $search = $this->db->escape($id);
        $query = "SELECT a.*, b.* FROM users a 
                    LEFT JOIN user_acces_management b on a.users_id = b.ref_user_id WHERE b.ref_user_id = $search";
        return  $this->db->query($query)->getRow();
    }
}
