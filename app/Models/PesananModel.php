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
    protected $allowedFields    = ['nama','meja','pesanan','jumlah','harga','status'];

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

    public function getPesananKaryawan($id = null){
        if ($id != null) {

            return $this->select('pesanan.id, pesanan.nama, pesanan.meja, pesanan.pesanan, pesanan.jumlah, pesanan.harga, pesanan.status')
            ->where('pesanan.status','proses')->find($id);
            // return $this->select('pesanan.*')
            //     ->find($id);
        }
        return $this->select('pesanan.id, pesanan.nama, pesanan.meja, pesanan.pesanan, pesanan.jumlah, pesanan.harga, pesanan.status')
            ->where('pesanan.status','proses')->find();
        // return $this->findAll();
    }

    public function updatePesanan($data, $id){
        return $this->update($id, $data);
    }

    public function getRiwayatKaryawan($id = null){
        if ($id != null) {

            return $this->select('pesanan.id, pesanan.nama, pesanan.meja, pesanan.pesanan, pesanan.jumlah, pesanan.harga, pesanan.status')
            ->where('pesanan.status','selesai')->find($id);
            // return $this->select('pesanan.*')
            //     ->find($id);
        }
        return $this->select('pesanan.id, pesanan.nama, pesanan.meja, pesanan.pesanan, pesanan.jumlah, pesanan.harga, pesanan.status')
            ->where('pesanan.status','selesai')->find();
        // return $this->findAll();
    }
}
