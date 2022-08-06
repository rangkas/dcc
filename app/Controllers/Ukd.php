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

    public function edit($id_ukd = null)
    {
        //Mengubah Data Produk Hukum
        $dataProduct = $this->model->where('id_ukd', $id_ukd)->first();
        return view('/sertifikasi/edit_ukd', ['product' => $dataProduct]);
    }

    public function delete($id_ukd = null)
    {
        //Menghapus Produk Hukum
        $this->model->delete($id_ukd);

        return redirect()->to('/ukd');
    }

    public function update($id_ukd = null)
    {

        //Tangkap File Docx
        $foto = $this->request->getFile('foto');
        // cek logo, apakah logo tetap logo lama
        if ($foto->getError() == 4) {
            $namaFilefoto = $this->request->getVar('foto_lama');
        } else {
            //ambil nama file
            $namaFilefoto = $foto->getName();
            //pindahkan file
            $foto->move('uploads/foto', $namaFilefoto);
        }


        //Tangkap File Docx
        $ijazah = $this->request->getFile('ijazah');
        // cek logo, apakah logo tetap logo lama
        if ($ijazah->getError() == 4) {
            $namaFileijazah = $this->request->getVar('ijazah_lama');
        } else {
            //ambil nama file
            $namaFileijazah = $ijazah->getName();
            //pindahkan file
            $ijazah->move('uploads/ijazah', $namaFileijazah);
        }


        //Tangkap File Docx
        $ktp = $this->request->getFile('ktp');
        // cek logo, apakah logo tetap logo lama
        if ($ktp->getError() == 4) {
            $namaFilektp = $this->request->getVar('ktp_lama');
        } else {
            //ambil nama file
            $namaFilektp = $ktp->getName();
            //pindahkan file
            $ktp->move('uploads/ktp', $namaFilektp);
        }


        //Tangkap File Docx
        $kk = $this->request->getFile('kk');
        // cek logo, apakah logo tetap logo lama
        if ($kk->getError() == 4) {
            $namaFilekk = $this->request->getVar('kk_lama');
        } else {
            //ambil nama file
            $namaFilekk = $kk->getName();
            //pindahkan file
            $kk->move('uploads/kk', $namaFilekk);
        }


        //Tangkap File Docx
        $spp = $this->request->getFile('spp');
        // cek logo, apakah logo tetap logo lama
        if ($spp->getError() == 4) {
            $namaFilespp = $this->request->getVar('spp_lama');
        } else {
            //ambil nama file
            $namaFilespp = $spp->getName();
            //pindahkan file
            $spp->move('uploads/spp', $namaFilespp);
        }



        $this->model->where('id_ukd', $id_ukd)->set([

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
        ])->update();

        session()->setFlashdata('pesan', 'Data Berhasil Diedit.');

        return redirect()->to('/ukd');
    }
}
