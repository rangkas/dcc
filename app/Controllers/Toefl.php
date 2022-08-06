<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ToeflModel;

class Toefl extends ResourceController

{

    public function __construct()
    {
        $this->session = session();
        $this->model = new \App\Models\ToeflModel();
    }


    public function index()
    {
        if ($this->session->get('status') == 'admin' || $this->session->get('status') == 'mahasiswa' || $this->session->get('status') == 'prodi') {
            $dataProduct = $this->model->getToefl()->getResult();;
            return view('sertifikasi/toefl', ['produk' => $dataProduct]);
        } else {
            return redirect()->to('/');
        }
    }


    public function new()
    {
        return view('sertifikasi/tambah_toefl');
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
            'skhu' => [
                'rules' => 'uploaded[skhu]|mime_in[skhu,image/jpg,image/jpeg,image/gif,image/png]|max_size[skhu,2048]',
                'errors' => [
                    'uploaded' => 'Foto SKHU Harus Ada File yang diupload',
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
            return redirect()->to('toefl/new')->withInput();
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

        //Tangkap File Foto skhu image
        $skhu = $this->request->getFile('skhu');
        //Pindahkan ke Folder Uploads/skhu
        $skhu->move('uploads/skhu');
        //ambil nama file
        $namaFileskhu = $skhu->getName();


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
            'semester' => $this->request->getVar('semester'),
            'nilai_prasyarat' => $this->request->getVar('nilai_prasyarat'),
            'email' => $this->request->getVar('email'),
            'no_hp' => $this->request->getVar('no_hp'),
            'foto' =>  $namaFilefoto,
            'ijazah' => $namaFileijazah,
            'skhu' => $namaFileskhu,
            'spp' => $namaFilespp,
            'nilai_listening' => $this->request->getVar('nilai_listening'),
            'nilai_struktur' => $this->request->getVar('nilai_struktur'),
            'nilai_reading' => $this->request->getVar('nilai_reading'),
        ]);

        session()->setFlashdata('pesan', 'Pendaftaran Berhasil.');

        return redirect()->to('/toefl');
    }


    public function show($id_toefl = null)
    {
        //Mengubah Data Produk Hukum
        $dataProduct = $this->model->where('id_toefl', $id_toefl)->first();

        return view('/sertifikasi/lihat_toefl', ['product' => $dataProduct]);
    }

    public function edit($id_toefl = null)
    {
        //Mengubah Data Produk Hukum
        $dataProduct = $this->model->where('id_toefl', $id_toefl)->first();
        return view('/sertifikasi/edit_toefl', ['product' => $dataProduct]);
    }

    public function delete($id_toefl = null)
    {
        //Menghapus Produk Hukum
        $this->model->delete($id_toefl);

        return redirect()->to('/toefl');
    }

    public function update($id_toefl = null)
    {

        $isi_nilai = $this->request->getVar('isi_nilai');

        if ($isi_nilai == "1") {

            $this->model->where('id_toefl', $id_toefl)->set([
                'nilai_listening' => $this->request->getVar('nilai_listening'),
                'nilai_struktur' => $this->request->getVar('nilai_struktur'),
                'nilai_reading' => $this->request->getVar('nilai_reading'),
            ])->update();

            session()->setFlashdata('pesan', 'Nilai Berhasil di Input');

            return redirect()->to('/toefl');
        } else {



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
            $skhu = $this->request->getFile('skhu');
            // cek logo, apakah logo tetap logo lama
            if ($skhu->getError() == 4) {
                $namaFileskhu = $this->request->getVar('skhu_lama');
            } else {
                //ambil nama file
                $namaFileskhu = $skhu->getName();
                //pindahkan file
                $skhu->move('uploads/skhu', $namaFileskhu);
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



            $this->model->where('id_toefl', $id_toefl)->set([

                'nama' => $this->request->getVar('nama'),
                'npm' => $this->request->getVar('npm'),
                'prodi' => $this->request->getVar('prodi'),
                'semester' => $this->request->getVar('semester'),
                'nilai_prasyarat' => $this->request->getVar('nilai_prasyarat'),
                'email' => $this->request->getVar('email'),
                'no_hp' => $this->request->getVar('no_hp'),
                'foto' =>  $namaFilefoto,
                'ijazah' => $namaFileijazah,
                'skhu' => $namaFileskhu,
                'spp' => $namaFilespp,
                'nilai_listening' => $this->request->getVar('nilai_listening'),
                'nilai_struktur' => $this->request->getVar('nilai_struktur'),
                'nilai_reading' => $this->request->getVar('nilai_reading'),
            ])->update();

            session()->setFlashdata('pesan', 'Data Berhasil Diedit.');

            return redirect()->to('/toefl');
        }
    }
}
