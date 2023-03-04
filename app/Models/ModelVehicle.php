<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelVehicle extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'vehicle';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'product_id',
        'product_name',
        'product_description',
        'product_status',
        'coorporate_id',
        'category_id',
        'type_id',
        'fert_id',
        'ref_user_id',
        'created_at',
        'updated_at',
    ];

    // Dates
    protected $useTimestamps = false;

    public function update($id = null, $data = null): bool
    {
        return $this->db->table($this->table)->update($data, ['product_id' => $id]);
    }

    function productNumber()
    {
        date_default_timezone_set('Asia/Jakarta');
        $kode = "";
        $tgl = date("ymd");
        $sql = $this->db->query("SELECT MAX(RIGHT(product_id,5)) AS kd_max FROM products");

        if ($sql->getResultObject() > 0) {
            foreach ($sql->getResultObject() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kode = sprintf("%05s", $tmp);
            }
        } else {
            $kode = $tgl . "00001";
        }
        return  "TM" . $tgl . $kode;
    }
}
