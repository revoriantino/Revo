<?php

namespace App\Models;

use CodeIgniter\Model;

class TopiksModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'topiks';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['id', 'mahasiswa_id', 'judul', 'status'];

    // Dates
    protected $useTimestamps        = false;
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
    protected $db;

    public function __construct() {
        $this->db = \Config\Database::connect();
    }

    public function select()
    {
        $data = $this->db->query("SELECT
            `topiks`.*,
            `mahasiswas`.`user_id`,
            `mahasiswas`.`npm`,
            `mahasiswas`.`jurusan_idjurusan`,
            `mahasiswas`.`nama_mahasiswa`,
            `mahasiswas`.`jenis_kelamin`,
            `mahasiswas`.`alamat`,
            `mahasiswas`.`email`,
            `mahasiswas`.`agama`,
            `mahasiswas`.`nisn`,
            `mahasiswas`.`nik`,
            `mahasiswas`.`tanggal_lahir`,
            `mahasiswas`.`tempat_lahir`,
            `mahasiswas`.`nama_ayah`,
            `mahasiswas`.`nama_ibu`,
            `mahasiswas`.`tgl_ayah`,
            `mahasiswas`.`tgl_ibu`
        FROM
            `topiks`
            LEFT JOIN `mahasiswas` ON `topiks`.`mahasiswas_id` = `mahasiswas`.`id`")->getResultArray();
        return $data;
    }
}
