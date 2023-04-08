<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuthentication extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users_authentication';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'username',
        'password',
        'activation_token',
        'remember_token',
        'expire_token',
        'ref_user_id',
        'created_at',
        'updated_at',
    ];

    // Dates
    protected $useTimestamps = false;

    public function update($id = null, $data = null): bool
    {
        return $this->db->table($this->table)->update($data, ['ref_user_id' => $id]);
    }

    function getUserWithAuthentication($username)
    {
        $search = $this->db->escape($username);
        $query = "SELECT a.users_id, a.first_name, last_name, a.ref_role_id, b.username, b.password FROM users a 
                    JOIN users_authentication b
                    on a.users_id = b.ref_user_id 
                    WHERE b.username = $search && a.user_status = 1";
        return  $this->db->query($query)->getRow();
    }

    function getUserAuthenticationWithId($id)
    {
        $userId = $this->db->escape($id);
        $query = "SELECT a.users_id, a.first_name, last_name, a.ref_role_id, b.username, b.password FROM users a 
                    LEFT JOIN users_authentication b
                    on a.users_id = b.ref_user_id 
                    WHERE a.users_id = $userId && a.user_status = 1";
        return  $this->db->query($query)->getRow();
    }
}
