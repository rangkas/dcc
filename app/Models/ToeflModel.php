<?php

namespace App\Models;

use CodeIgniter\Model;

class ToeflModel extends Model
{
    protected $table      = 'sp_toefl';
    protected $primaryKey = 'id_toefl';
    protected $returnType = "object";
    protected $allowedFields        = [
        "nama", "npm", "prodi", "semester", "nilai_prasyarat", "email", "no_hp",
        "foto", "ijazah",  "skhu", "spp", "nilai_listening",  "nilai_struktur", "nilai_reading"
    ];

    public function getToefl()
    {
        $query =  $this->db->table('sp_toefl')
            ->select('id_toefl,nama,npm,prodi,nilai_listening,nilai_struktur,nilai_reading')
            ->get();
        return $query;
    }
}
