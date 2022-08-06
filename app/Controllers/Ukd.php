<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UkdModel;

class Ukd extends ResourceController

{

    public function __construct()
    {
        $this->session = session();
        $this->model = new \App\Models\UkdModel();
    }


    public function index()
    {
        if ($this->session->get('status') == 'admin' || $this->session->get('status') == 'mahasiswa') {
            $dataProduct = $this->model->getUkd()->getResult();;
            return view('sertifikasi/ukd', ['produk' => $dataProduct]);
        } else {
            return redirect()->to('/');
        }
    }

    public function new()
    {
        return view('sertifikasi/tambah_ukd');
    }

    public function create()
    {

        if (!$this->validate([
            'foto' => [
                'rules' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,2048]',
                'errors' => [
                    'uploaded' => 'Foto Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
            'ijazah' => [
                'rules' => 'uploaded[ijazah]|mime_in[ijazah,image/jpg,image/jpeg,image/gif,image/png]|max_size[ijazah,2048]',
                'errors' => [
                    'uploaded' => 'Foto Ijazah Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
            'ktp' => [
                'rules' => 'uploaded[ktp]|mime_in[ktp,image/jpg,image/jpeg,image/gif,image/png]|max_size[ktp,2048]',
                'errors' => [
                    'uploaded' => 'Foto KTP Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
            'kk' => [
                'rules' => 'uploaded[kk]|mime_in[kk,image/jpg,image/jpeg,image/gif,image/png]|max_size[kk,2048]',
                'errors' => [
                    'uploaded' => 'Foto KK Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
            'spp' => [
                'rules' => 'uploaded[spp]|mime_in[spp,image/jpg,image/jpeg,image/gif,image/png]|max_size[spp,2048]',
                'errors' => [
                    'uploaded' => 'Foto SPP Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('ukd/new')->withInput();
        }


        //Tangkap File Fotoimage
        $foto = $this->request->getFile('foto');
        //Pindahkan ke Folder Uploads/foto
        $foto->move('uploads/foto');
        //ambil nama file
        $namaFilefoto = $foto->getName();

        //Tangkap File Foto Ijazah image
        $ijazah = $this->request->getFile('ijazah');
        //Pindahkan ke Folder Uploads/ijazah
        $ijazah->move('uploads/ijazah');
        //ambil nama file
        $namaFileijazah = $ijazah->getName();

        //Tangkap File Foto ktp image
        $ktp = $this->request->getFile('ktp');
        //Pindahkan ke Folder Uploads/ktp
        $ktp->move('uploads/ktp');
        //ambil nama file
        $namaFilektp = $ktp->getName();


        //Tangkap File Foto kk image
        $kk = $this->request->getFile('kk');
        //Pindahkan ke Folder Uploads/kk
        $kk->move('uploads/kk');
        //ambil nama file
        $namaFilekk = $kk->getName();

        //Tangkap File Foto spp image
        $spp = $this->request->getFile('spp');
        //Pindahkan ke Folder Uploads/kk
        $spp->move('uploads/spp');
        //ambil nama file
        $namaFilespp = $spp->getName();


        $this->model->insert([

            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'prodi' => $this->request->getVar('prodi'),
            'skema' => $this->request->getVar('skema'),
            'semester' => $this->request->getVar('semester'),
            'nilai_prasyarat' => $this->request->getVar('nilai_prasyarat'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'email' => $this->request->getVar('email'),
            'no_hp' => $this->request->getVar('no_hp'),
            'foto' =>  $namaFilefoto,
            'ijazah' => $namaFileijazah,
            'ktp' => $namaFilektp,
            'kk' => $namaFilekk,
            'spp' => $namaFilespp,
        ]);

        session()->setFlashdata('pesan', 'Pendaftaran Berhasil.');

        return redirect()->to('/ukd');
    }


    public function show($id_ukd = null)
    {
        //Mengubah Data Produk Hukum
        $dataProduct = $this->model->where('id_ukd', $id_ukd)->first();

        return view('/sertifikasi/lihat_ukd', ['product' => $dataProduct]);
    }

    public function pdam()
    {

        return view('/pages/pdam');
    }



    public function edit($id_kendaraan = null)
    {
        //Mengubah Data Produk Hukum
        $dataProduct = $this->model->where('id_kendaraan', $id_kendaraan)->first();
        return view('/pages/edit_kendaraan', ['product' => $dataProduct]);
    }

    public function delete($id_ukd = null)
    {
        //Menghapus Produk Hukum
        $this->model->delete($id_ukd);

        return redirect()->to('/ukd');
    }

    public function update($id_kendaraan = null)
    {

        //Tangkap File Docx
        $foto_stnk = $this->request->getFile('foto_stnk');
        // cek logo, apakah logo tetap logo lama
        if ($foto_stnk->getError() == 4) {
            $namaFilefoto_stnk = $this->request->getVar('foto_stnk_lama');
        } else {
            //ambil nama file
            $namaFilefoto_stnk = $foto_stnk->getName();
            //pindahkan file
            $foto_stnk->move('uploads/stnk', $namaFilefoto_stnk);
        }


        //Tangkap File Docx
        $foto_kendaraan = $this->request->getFile('foto_kendaraan');
        // cek logo, apakah logo tetap logo lama
        if ($foto_kendaraan->getError() == 4) {
            $namaFilefoto_kendaraan = $this->request->getVar('foto_kendaraan_lama');
        } else {
            //ambil nama file
            $namaFilefoto_kendaraan = $foto_kendaraan->getName();
            //pindahkan file
            $foto_kendaraan->move('uploads/kendaraan', $namaFilefoto_kendaraan);
        }

        $this->model->where('id_kendaraan', $id_kendaraan)->set([

            'no_registrasi' => $this->request->getVar('no_registrasi'),
            'nama_pemilik' => $this->request->getVar('nama_pemilik'),
            'alamat' => $this->request->getVar('alamat'),
            'merk' => $this->request->getVar('merk'),
            'tipe' => $this->request->getVar('tipe'),
            'jenis' => $this->request->getVar('jenis'),
            'model' => $this->request->getVar('model'),
            'tahun_pembuatan' => $this->request->getVar('tahun_pembuatan'),
            'isi_silinder' => $this->request->getVar('isi_silinder'),
            'no_rangka' => $this->request->getVar('no_rangka'),

            'no_mesin' => $this->request->getVar('no_mesin'),
            'warna' => $this->request->getVar('warna'),
            'bahan_bakar' => $this->request->getVar('bahan_bakar'),
            'warna_tnkb' => $this->request->getVar('warna_tnkb'),
            'no_bpkb' => $this->request->getVar('no_bpkb'),
            'kode_lokasi' => $this->request->getVar('kode_lokasi'),
            'foto_stnk' =>  $namaFilefoto_stnk,
            'foto_kendaraan' => $namaFilefoto_kendaraan,
            'pinjam_pakai' => $this->request->getVar('pinjam_pakai'),
        ])->update();

        session()->setFlashdata('pesan', 'Data Berhasil Diedit.');

        return redirect()->to('/kendaraan');
    }
}
