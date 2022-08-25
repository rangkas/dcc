<?php

namespace App\Models;

use CodeIgniter\Model;

class PklModel extends Model
{
    protected $table      = 'sp_pkl';
    protected $primaryKey = 'id_pkl';
    protected $returnType = "object";
    protected $allowedFields        = [
        "nama", "npm", "prodi", "no_hp", "nama_instansi", "alamat_instansi", "jabatan",
        "bidang", "lama_bekerja",  "no_instansi", "persyaratan", "transkrip",  "sertifikat", "frs",
        "pembayaran_pkl", "surat_bekerja",  "slip_gaji", "kesanggupan", "disetujui",  "alasan", "dosen_pembimbing",
        "nilai_dosen_pembimbing", "nilai_pembimbing_instansi"

    ];

    public function getPkl()
    {
        $query =  $this->db->table('sp_pkl')
            ->select('id_pkl,nama,npm,prodi,alamat_instansi,disetujui,dosen_pembimbing')
            ->get();
        return $query;
    }
    public function getPklMahasiswa()
    {
        $session = session();
        $npm = $session->get('npm');
        $query =  $this->db->table('sp_pkl')
            ->select('id_pkl,nama,npm,prodi,alamat_instansi,disetujui,dosen_pembimbing')
            ->where(['npm' => $npm])
            ->get();
        return $query;
    }

    public function getPembimbingPkl()
    {
        $query =  $this->db->table('sp_pkl')
            ->select('id_pkl,nama,npm,prodi,alamat_instansi,disetujui,dosen_pembimbing')
            ->where(['disetujui' => 1])
            ->get();
        return $query;
    }

    public function getNilaiPkl()
    {
        $query =  $this->db->table('sp_pkl')
            ->select('id_pkl,nama,npm,prodi,alamat_instansi,disetujui,dosen_pembimbing,nilai_dosen_pembimbing,nilai_pembimbing_instansi')
            ->where('dosen_pembimbing !=', '0')
            ->get();
        return $query;
    }
}
