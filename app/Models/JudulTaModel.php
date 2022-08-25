<?php

namespace App\Models;

use CodeIgniter\Model;

class JudulTaModel extends Model
{
    protected $table      = 'sp_judul_ta';
    protected $primaryKey = 'id_judul_ta ';
    protected $returnType = "object";
    protected $allowedFields        = [
        "nama", "npm", "prodi", "judul1", "judul2", "dosen_pembimbing", "acc_judul",
        "file_pengajuan", "transkrip",  "judul_disetujui", "alasan", "batas_waktu"

    ];

    public function getJudulTa()
    {
        $query =  $this->db->table('sp_judul_ta')
            ->select('id_judul_ta,nama,npm,prodi,judul1,judul2')
            ->get();
        return $query;
    }
    public function getJudulTaMahasiswa()
    {
        $session = session();
        $npm = $session->get('npm');
        $query =  $this->db->table('sp_judul_ta')
            ->select('id_judul_ta,nama,npm,prodi,judul1,judul2')
            ->where(['npm' => $npm])
            ->get();
        return $query;
    }
}
