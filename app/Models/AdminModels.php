<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModels extends Model
{
    protected $table      = 'kk';

    protected $useAutoIncrement = true;

    protected $allowedFields =
    [
        'nomor_kk',
        'kepala_keluarga',
        'alamat',
        'id_provinsi',
        'id_kecamatan',
        'id_kelurahan',
        'id_rw',
        'id_rt',
        'kode_pos',
        'foto_kk'

    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    

    public function addvaluearea($table,$data){
        $db      = \Config\Database::connect();
        $builder = $db->table($table);
        $builder->insert($data);
    }
    public function getdata($table,$condition){
        $db      = \Config\Database::connect();
        $builder = $db->table($table);
        $builder->select('*');
        $builder->where($condition);
        $result = $builder->get();
        return $result;
    }
    public function update_data($table,$condition,$value){
        $db      = \Config\Database::connect();
        $builder = $db->table($table);
        $builder->set($value);
        $builder->where($condition);
        $builder->update();
    }
    public function delete_data($table,$condition){
        $db      = \Config\Database::connect();
        $builder = $db->table($table);
        $builder->where($condition);
        $builder->delete();
    }
    
}
