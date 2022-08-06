<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\KendaraanModel;

class Kendaraan extends ResourceController

{

    public function __construct()
    {
        $this->session = session();
        $this->model = new \App\Models\KendaraanModel();
    }


    public function index()
    {

        if ($this->session->get('status') == 'admin') {
            $dataProduct = $this->model->getKendaraan()->getResult();;
            return view('pages/kendaraan', ['produk' => $dataProduct]);
        } else {
            return redirect()->to('/');
        }
    }

    public function new()
    {
        return view('pages/tambah_kendaraan');
    }

    public function create()
    {

        if (!$this->validate([
            'foto_stnk' => [
                'rules' => 'uploaded[foto_stnk]|mime_in[foto_stnk,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto_stnk,2048]',
                'errors' => [
                    'uploaded' => 'Foto STNK Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
            'foto_kendaraan' => [
                'rules' => 'uploaded[foto_kendaraan]|mime_in[foto_kendaraan,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto_kendaraan,2048]',
                'errors' => [
                    'uploaded' => 'Foto Kendaraan Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('kendaraan/new')->withInput();
        }


        //Tangkap File Foto STNK image
        $foto_stnk = $this->request->getFile('foto_stnk');
        //Pindahkan ke Folder Upload/berkas
        $foto_stnk->move('uploads/stnk');
        //ambil nama file
        $namaFilefoto_stnk = $foto_stnk->getName();


        //Tangkap File foto_kendaraan image
        $foto_kendaraan = $this->request->getFile('foto_kendaraan');
        //Pindahkan ke Folder Upload/berkas
        $foto_kendaraan->move('uploads/kendaraan');
        //ambil nama file
        $namaFilefoto_kendaraan = $foto_kendaraan->getName();


        $this->model->insert([

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
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil ditambahkan.');

        return redirect()->to('/kendaraan');
    }


    public function show($id_kendaraan = null)
    {
        //Mengubah Data Produk Hukum
        $dataProduct = $this->model->where('id_kendaraan', $id_kendaraan)->first();

        return view('/pages/lihat_kendaraan', ['product' => $dataProduct]);
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

    public function delete($id_kendaraan = null)
    {
        //Menghapus Produk Hukum
        $this->model->delete($id_kendaraan);

        return redirect()->to('/kendaraan');
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
