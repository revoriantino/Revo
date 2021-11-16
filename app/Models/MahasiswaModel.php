<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'mahasiswas';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['id', 'nama_mahasiswa', 'jenis_kelamin', 'tanggal_lahir', 'id_perguruan_tinggi', 'id_mahasiswa', 'id_agama', 'nama_agama', 'id_prodi', 'nama_program_studi', 'nama_status_mahasiswa', 'nim', 'id_periode', 'nama_periode_masuk'];

    // Dates
    protected $useTimestamps        = true;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks       = true;
    protected $beforeInsert         = [];
    protected $afterInsert          = [];
    protected $beforeUpdate         = [];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];       
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];
    
}


l
