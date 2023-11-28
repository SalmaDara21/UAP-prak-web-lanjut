<?php

namespace App\Models;

use CodeIgniter\Model;

class InventarisModel extends Model
{
    protected $table            = 'inventaris';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'barang', 'stok'];

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

    public function getInventaris($id = null)
    {
        if ($id != null){
            return $this->select('inventaris.*, inventaris.id, inventaris.nama, inventaris.barang, inventaris.stok') -> find($id);
        }
        return $this->select('inventaris.* , inventaris.id, inventaris.nama, inventaris.barang, inventaris.stok') -> findAll();
    }

    public function saveInventaris($data){
        $this->insert($data);
    }

    public function updateInventaris($data, $id){
        return $this->update($id, $data);
    }

    public function deleteInventaris($id){
        return $this->delete($id);
    }
}
