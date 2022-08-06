<?php

namespace App\Models;

use CodeIgniter\Model;

class KendaraanModel extends Model
{
    protected $table      = 'kendaraan';
    protected $primaryKey = 'id_kendaraan';
    protected $returnType = "object";
    protected $allowedFields        = [
        "no_registrasi", "nama_pemilik", "alamat", "merk", "tipe", "jenis", "model", "tahun_pembuatan", "isi_silinder", "no_rangka",
        "no_mesin", "warna", "bahan_bakar", "warna_tnkb", "no_bpkb", "kode_lokasi", "foto_stnk", "foto_kendaraan", "pinjam_pakai"
    ];

    public function getProduk($id_kendaraan = false)
    {
        if ($id_kendaraan = false) {
            return $this->findAll();
        }

        return $this->where(['id_kendaraan' => $id_kendaraan])->first();
    }

    public function getKendaraan()
    {
        $query =  $this->db->table('kendaraan')
            ->join('jabatan', 'kendaraan.nama_pemilik = jabatan.id_jabatan')
            ->select('kendaraan.id_kendaraan, kendaraan.no_registrasi, jabatan.nama_jabatan, kendaraan.alamat, kendaraan.merk, kendaraan.tipe, kendaraan.jenis, kendaraan.model, kendaraan.tahun_pembuatan, kendaraan.isi_silinder, kendaraan.no_rangka, kendaraan.no_mesin, kendaraan.warna, kendaraan.bahan_bakar, kendaraan.warna_tnkb, kendaraan.no_bpkb, kendaraan.kode_lokasi, kendaraan.foto_stnk, kendaraan.foto_kendaraan, kendaraan.pinjam_pakai')
            ->get();
        return $query;
    }

    public function getKendaraanMobil()
    {
        $query =  $this->db->table('kendaraan')

            ->join('jabatan', 'kendaraan.nama_pemilik = jabatan.id_jabatan')
            ->select('kendaraan.id_kendaraan, kendaraan.no_registrasi, jabatan.nama_jabatan, kendaraan.alamat, kendaraan.merk, kendaraan.tipe, kendaraan.jenis, kendaraan.model, kendaraan.tahun_pembuatan, kendaraan.isi_silinder, kendaraan.no_rangka, kendaraan.no_mesin, kendaraan.warna, kendaraan.bahan_bakar, kendaraan.warna_tnkb, kendaraan.no_bpkb, kendaraan.kode_lokasi, kendaraan.foto_stnk, kendaraan.foto_kendaraan, kendaraan.pinjam_pakai')
            ->where('jenis !=', 'Roda Dua')
            ->where('jenis !=', 'Roda Tiga')
            ->get();
        return $query;
    }

    public function getKendaraanMotor()
    {
        $query =  $this->db->table('kendaraan')

            ->join('jabatan', 'kendaraan.nama_pemilik = jabatan.id_jabatan')
            ->select('kendaraan.id_kendaraan, kendaraan.no_registrasi, jabatan.nama_jabatan, kendaraan.alamat, kendaraan.merk, kendaraan.tipe, kendaraan.jenis, kendaraan.model, kendaraan.tahun_pembuatan, kendaraan.isi_silinder, kendaraan.no_rangka, kendaraan.no_mesin, kendaraan.warna, kendaraan.bahan_bakar, kendaraan.warna_tnkb, kendaraan.no_bpkb, kendaraan.kode_lokasi, kendaraan.foto_stnk, kendaraan.foto_kendaraan, kendaraan.pinjam_pakai')
            ->where('jenis !=', 'Roda Empat')
            ->where('jenis !=', 'Bus')
            ->get();
        return $query;
    }

    public function getPdam()
    {

        $query =  $this->db->table('kendaraan')
            ->join('jabatan', 'kendaraan.nama_pemilik = jabatan.id_jabatan')
            ->select('kendaraan.id_kendaraan, kendaraan.no_registrasi, jabatan.nama_jabatan, kendaraan.alamat, kendaraan.merk, kendaraan.tipe, kendaraan.jenis, kendaraan.model, kendaraan.tahun_pembuatan, kendaraan.isi_silinder, kendaraan.no_rangka, kendaraan.no_mesin, kendaraan.warna, kendaraan.bahan_bakar, kendaraan.warna_tnkb, kendaraan.no_bpkb, kendaraan.kode_lokasi, kendaraan.foto_stnk, kendaraan.foto_kendaraan, kendaraan.pinjam_pakai')
            ->where(['pinjam_pakai' => "PDAM"])
            ->get();
        return $query;
    }

    public function getKodim()
    {

        $query =  $this->db->table('kendaraan')
            ->join('jabatan', 'kendaraan.nama_pemilik = jabatan.id_jabatan')
            ->select('kendaraan.id_kendaraan, kendaraan.no_registrasi, jabatan.nama_jabatan, kendaraan.alamat, kendaraan.merk, kendaraan.tipe, kendaraan.jenis, kendaraan.model, kendaraan.tahun_pembuatan, kendaraan.isi_silinder, kendaraan.no_rangka, kendaraan.no_mesin, kendaraan.warna, kendaraan.bahan_bakar, kendaraan.warna_tnkb, kendaraan.no_bpkb, kendaraan.kode_lokasi, kendaraan.foto_stnk, kendaraan.foto_kendaraan, kendaraan.pinjam_pakai')
            ->where(['pinjam_pakai' => "KODIM"])
            ->get();
        return $query;
    }

    public function getMui()
    {

        $query =  $this->db->table('kendaraan')
            ->join('jabatan', 'kendaraan.nama_pemilik = jabatan.id_jabatan')
            ->select('kendaraan.id_kendaraan, kendaraan.no_registrasi, jabatan.nama_jabatan, kendaraan.alamat, kendaraan.merk, kendaraan.tipe, kendaraan.jenis, kendaraan.model, kendaraan.tahun_pembuatan, kendaraan.isi_silinder, kendaraan.no_rangka, kendaraan.no_mesin, kendaraan.warna, kendaraan.bahan_bakar, kendaraan.warna_tnkb, kendaraan.no_bpkb, kendaraan.kode_lokasi, kendaraan.foto_stnk, kendaraan.foto_kendaraan, kendaraan.pinjam_pakai')
            ->where(['pinjam_pakai' => "MUI"])
            ->get();
        return $query;
    }

    public function getKpu()
    {

        $query =  $this->db->table('kendaraan')
            ->join('jabatan', 'kendaraan.nama_pemilik = jabatan.id_jabatan')
            ->select('kendaraan.id_kendaraan, kendaraan.no_registrasi, jabatan.nama_jabatan, kendaraan.alamat, kendaraan.merk, kendaraan.tipe, kendaraan.jenis, kendaraan.model, kendaraan.tahun_pembuatan, kendaraan.isi_silinder, kendaraan.no_rangka, kendaraan.no_mesin, kendaraan.warna, kendaraan.bahan_bakar, kendaraan.warna_tnkb, kendaraan.no_bpkb, kendaraan.kode_lokasi, kendaraan.foto_stnk, kendaraan.foto_kendaraan, kendaraan.pinjam_pakai')
            ->where(['pinjam_pakai' => "KPU"])
            ->get();
        return $query;
    }

    public function getKoni()
    {

        $query =  $this->db->table('kendaraan')
            ->join('jabatan', 'kendaraan.nama_pemilik = jabatan.id_jabatan')
            ->select('kendaraan.id_kendaraan, kendaraan.no_registrasi, jabatan.nama_jabatan, kendaraan.alamat, kendaraan.merk, kendaraan.tipe, kendaraan.jenis, kendaraan.model, kendaraan.tahun_pembuatan, kendaraan.isi_silinder, kendaraan.no_rangka, kendaraan.no_mesin, kendaraan.warna, kendaraan.bahan_bakar, kendaraan.warna_tnkb, kendaraan.no_bpkb, kendaraan.kode_lokasi, kendaraan.foto_stnk, kendaraan.foto_kendaraan, kendaraan.pinjam_pakai')
            ->where(['pinjam_pakai' => "KONI"])
            ->get();
        return $query;
    }

    public function getKajari()
    {

        $query =  $this->db->table('kendaraan')
            ->join('jabatan', 'kendaraan.nama_pemilik = jabatan.id_jabatan')
            ->select('kendaraan.id_kendaraan, kendaraan.no_registrasi, jabatan.nama_jabatan, kendaraan.alamat, kendaraan.merk, kendaraan.tipe, kendaraan.jenis, kendaraan.model, kendaraan.tahun_pembuatan, kendaraan.isi_silinder, kendaraan.no_rangka, kendaraan.no_mesin, kendaraan.warna, kendaraan.bahan_bakar, kendaraan.warna_tnkb, kendaraan.no_bpkb, kendaraan.kode_lokasi, kendaraan.foto_stnk, kendaraan.foto_kendaraan, kendaraan.pinjam_pakai')
            ->where(['pinjam_pakai' => "KAJARI"])
            ->get();
        return $query;
    }

    public function getPolres()
    {

        $query =  $this->db->table('kendaraan')
            ->join('jabatan', 'kendaraan.nama_pemilik = jabatan.id_jabatan')
            ->select('kendaraan.id_kendaraan, kendaraan.no_registrasi, jabatan.nama_jabatan, kendaraan.alamat, kendaraan.merk, kendaraan.tipe, kendaraan.jenis, kendaraan.model, kendaraan.tahun_pembuatan, kendaraan.isi_silinder, kendaraan.no_rangka, kendaraan.no_mesin, kendaraan.warna, kendaraan.bahan_bakar, kendaraan.warna_tnkb, kendaraan.no_bpkb, kendaraan.kode_lokasi, kendaraan.foto_stnk, kendaraan.foto_kendaraan, kendaraan.pinjam_pakai')
            ->where(['pinjam_pakai' => "POLRES"])
            ->get();
        return $query;
    }
}
