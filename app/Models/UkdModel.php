<?php

namespace App\Models;

use CodeIgniter\Model;

class UkdModel extends Model
{
    protected $table      = 'sp_ukd';
    protected $primaryKey = 'id_ukd';
    protected $returnType = "object";
    protected $allowedFields        = [
        "nama", "npm", "prodi", "skema", "semester", "nilai_prasyarat", "tempat_lahir", "tanggal_lahir", "email", "no_hp",
        "foto", "ijazah", "ktp", "kk", "spp"
    ];

    public function getUkd()
    {
        $query =  $this->db->table('sp_ukd')
            ->select('id_ukd,nama,npm,prodi,skema')
            ->get();
        return $query;
    }
}
