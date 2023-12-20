<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table            = 'pesanan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama','meja','pesanan','jumlah','harga'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function savePesanan($data){
        $this->insert($data);
    }

    public function getPesanan($id = null){
        if ($id != null) {

            return $this->select('pesanan.id, pesanan.nama, pesanan.meja, pesanan.pesanan, pesanan.jumlah, pesanan.harga')
            ->find($id);
        }
        return $this->select('pesanan.id, pesanan.nama, pesanan.meja, pesanan.pesanan, pesanan.jumlah, pesanan.harga')
            ->find();
    }
}
