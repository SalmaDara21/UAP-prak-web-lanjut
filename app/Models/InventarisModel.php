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

    protected $allowedFields    = ['Booked','jumlah_kursi','nama_inventaris'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'update_at';
    protected $deletedField  = 'delete_at';

    // Validation
    protected $validationRules      = [
        'nama_inventaris'=>[
        'rules'=>'required',
        'errors'=>[
            'required'=> '{field} tidak valid'
        ]
    ],
    'jumlah_kursi'=>[
        'rules'=>'required',
        'errors'=>[
            'required'=> '{field} tidak valid'
        ]
    ],
];
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

    public function getInventaris($id=null){
        if($id!=null){
            return $this->find($id);
        }
        return $this->findAll();
    }

    public function destroy($id){
        return $this->delete($id);
    }
    public function updateInventaris($data,$id){
        return $this->update($id,$data);
    }
    public function saveInventaris($data){
        $this->insert($data);
    }
}
