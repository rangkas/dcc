<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\PklModel;

class Pkl extends ResourceController

{

    public function __construct()
    {
        $this->session = session();
        $this->model = new \App\Models\PklModel();
    }


    public function index()
    {
        if ($this->session->get('status') == 'admin'  || $this->session->get('status') == 'prodi') {
            $dataProduct = $this->model->getPkl()->getResult();;
            return view('pkl/pkl', ['produk' => $dataProduct]);
        } elseif ($this->session->get('status') == 'mahasiswa') {
            $dataProduct = $this->model->getPklMahasiswa()->getResult();;
            return view('pkl/pkl', ['produk' => $dataProduct]);
        } else {
            return redirect()->to('/');
        }
    }


    public function new()
    {
        return view('pkl/tambah_pkl');
    }

    public function create()
    {

        if (!$this->validate([
            'persyaratan' => [
                'rules' => 'uploaded[persyaratan]|mime_in[persyaratan,application/pdf,application/docx,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/zip,application/msword,application/vnd.ms-office]|max_size[persyaratan,20480]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa docx,doc',
                    'max_size' => 'Ukuran File Maksimal 20 MB'
                ]
            ],
            'transkrip' => [
                'rules' => 'uploaded[transkrip]|mime_in[transkrip,application/pdf,application/docx,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/zip,application/msword,application/vnd.ms-office]|max_size[transkrip,20480]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa docx,doc',
                    'max_size' => 'Ukuran File Maksimal 20 MB'
                ]
            ],
            'sertifikat' => [
                'rules' => 'uploaded[sertifikat]|mime_in[sertifikat,application/pdf,application/docx,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/zip,application/msword,application/vnd.ms-office]|max_size[sertifikat,20480]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa docx,doc',
                    'max_size' => 'Ukuran File Maksimal 20 MB'
                ]
            ],
            'frs' => [
                'rules' => 'uploaded[frs]|mime_in[frs,application/pdf,application/docx,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/zip,application/msword,application/vnd.ms-office]|max_size[frs,20480]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa docx,doc',
                    'max_size' => 'Ukuran File Maksimal 20 MB'
                ]
            ],
            'pembayaran_pkl' => [
                'rules' => 'uploaded[pembayaran_pkl]|mime_in[pembayaran_pkl,application/pdf,application/docx,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/zip,application/msword,application/vnd.ms-office]|max_size[pembayaran_pkl,20480]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa docx,doc',
                    'max_size' => 'Ukuran File Maksimal 20 MB'
                ]
            ],
            'surat_bekerja' => [
                'rules' => 'uploaded[surat_bekerja]|mime_in[surat_bekerja,application/pdf,application/docx,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/zip,application/msword,application/vnd.ms-office]|max_size[surat_bekerja,20480]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa docx,doc',
                    'max_size' => 'Ukuran File Maksimal 20 MB'
                ]
            ],
            'slip_gaji' => [
                'rules' => 'uploaded[slip_gaji]|mime_in[slip_gaji,application/pdf,application/docx,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/zip,application/msword,application/vnd.ms-office]|max_size[slip_gaji,20480]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa docx,doc',
                    'max_size' => 'Ukuran File Maksimal 20 MB'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('pkl/new')->withInput();
        }


        //Tangkap File Fotoimage
        $persyaratan = $this->request->getFile('persyaratan');
        //Pindahkan ke Folder Uploads/persyaratan
        $persyaratan->move('uploads/pkl/persyaratan');
        //ambil nama file
        $namaFilepersyaratan = $persyaratan->getName();

        //Tangkap File Foto Ijazah image
        $transkrip = $this->request->getFile('transkrip');
        //Pindahkan ke Folder Uploads/transkrip
        $transkrip->move('uploads/pkl/transkrip');
        //ambil nama file
        $namaFiletranskrip = $transkrip->getName();

        //Tangkap File Foto sertifikat image
        $sertifikat = $this->request->getFile('sertifikat');
        //Pindahkan ke Folder Uploads/sertifikat
        $sertifikat->move('uploads/pkl/sertifikat');
        //ambil nama file
        $namaFilesertifikat = $sertifikat->getName();

        //Tangkap File Foto frs image
        $frs = $this->request->getFile('frs');
        //Pindahkan ke Folder Uploads/kk
        $frs->move('uploads/pkl/frs');
        //ambil nama file
        $namaFilefrs = $frs->getName();

        //Tangkap File Foto pembayaran_pkl image
        $pembayaran_pkl = $this->request->getFile('pembayaran_pkl');
        //Pindahkan ke Folder Uploads/kk
        $pembayaran_pkl->move('uploads/pkl/pembayaran_pkl');
        //ambil nama file
        $namaFilepembayaran_pkl = $pembayaran_pkl->getName();

        //Tangkap File Foto surat_bekerja image
        $surat_bekerja = $this->request->getFile('surat_bekerja');
        //Pindahkan ke Folder Uploads/kk
        $surat_bekerja->move('uploads/pkl/surat_bekerja');
        //ambil nama file
        $namaFilesurat_bekerja = $surat_bekerja->getName();

        //Tangkap File Foto slip_gaji image
        $slip_gaji = $this->request->getFile('slip_gaji');
        //Pindahkan ke Folder Uploads/kk
        $slip_gaji->move('uploads/pkl/slip_gaji');
        //ambil nama file
        $namaFileslip_gaji = $slip_gaji->getName();


        $this->model->insert([

            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'prodi' => $this->request->getVar('prodi'),
            'no_hp' => $this->request->getVar('no_hp'),

            'nama_instansi' => $this->request->getVar('nama_instansi'),
            'alamat_instansi' => $this->request->getVar('alamat_instansi'),
            'jabatan' => $this->request->getVar('jabatan'),
            'bidang' => $this->request->getVar('bidang'),

            'lama_bekerja' => $this->request->getVar('lama_bekerja'),
            'no_instansi' => $this->request->getVar('no_instansi'),


            'persyaratan' =>  $namaFilepersyaratan,
            'transkrip' => $namaFiletranskrip,
            'sertifikat' => $namaFilesertifikat,
            'frs' => $namaFilefrs,
            'pembayaran_pkl' => $namaFilepembayaran_pkl,
            'surat_bekerja' => $namaFilesurat_bekerja,
            'slip_gaji' => $namaFileslip_gaji,
            'kesanggupan' => $this->request->getVar('kesanggupan'),
            'disetujui' => $this->request->getVar('disetujui'),
            'alasan' => $this->request->getVar('alasan'),

            'dosen_pembimbing' => $this->request->getVar('dosen_pembimbing'),
            'nilai_dosen_pembimbing' => $this->request->getVar('nilai_dosen_pembimbing'),
            'nilai_pembimbing_instansi' => $this->request->getVar('nilai_pembimbing_instansi'),
        ]);

        session()->setFlashdata('pesan', 'Pendaftaran Berhasil.');

        return redirect()->to('/pkl');
    }


    public function show($id_pkl = null)
    {
        //Mengubah Data Produk Hukum
        $dataProduct = $this->model->where('id_pkl', $id_pkl)->first();

        return view('/pkl/lihat_pkl', ['product' => $dataProduct]);
    }

    public function edit($id_pkl = null)
    {
        //Mengubah Data Produk Hukum
        $dataProduct = $this->model->where('id_pkl', $id_pkl)->first();
        return view('/pkl/edit_pkl', ['product' => $dataProduct]);
    }

    public function delete($id_pkl = null)
    {
        //Menghapus Produk Hukum
        $this->model->delete($id_pkl);

        return redirect()->to('/pkl');
    }

    public function update($id_pkl = null)
    {

        //Tangkap File Docx
        $persyaratan = $this->request->getFile('persyaratan');
        // cek logo, apakah logo tetap logo lama
        if ($persyaratan->getError() == 4) {
            $namaFilepersyaratan = $this->request->getVar('persyaratan_lama');
        } else {
            //ambil nama file
            $namaFilepersyaratan = $persyaratan->getName();
            //pindahkan file
            $persyaratan->move('uploads/pkl/persyaratan', $namaFilepersyaratan);
        }


        //Tangkap File Docx
        $transkrip = $this->request->getFile('transkrip');
        // cek logo, apakah logo tetap logo lama
        if ($transkrip->getError() == 4) {
            $namaFiletranskrip = $this->request->getVar('transkrip_lama');
        } else {
            //ambil nama file
            $namaFiletranskrip = $transkrip->getName();
            //pindahkan file
            $transkrip->move('uploads/pkl/transkrip', $namaFiletranskrip);
        }


        //Tangkap File Docx
        $sertifikat = $this->request->getFile('sertifikat');
        // cek logo, apakah logo tetap logo lama
        if ($sertifikat->getError() == 4) {
            $namaFilesertifikat = $this->request->getVar('sertifikat_lama');
        } else {
            //ambil nama file
            $namaFilesertifikat = $sertifikat->getName();
            //pindahkan file
            $sertifikat->move('uploads/pkl/sertifikat', $namaFilesertifikat);
        }

        //Tangkap File Docx
        $frs = $this->request->getFile('frs');
        // cek logo, apakah logo tetap logo lama
        if ($frs->getError() == 4) {
            $namaFilefrs = $this->request->getVar('frs_lama');
        } else {
            //ambil nama file
            $namaFilefrs = $frs->getName();
            //pindahkan file
            $frs->move('uploads/pkl/frs', $namaFilefrs);
        }


        //Tangkap File Docx
        $pembayaran_pkl = $this->request->getFile('pembayaran_pkl');
        // cek logo, apakah logo tetap logo lama
        if ($pembayaran_pkl->getError() == 4) {
            $namaFilepembayaran_pkl = $this->request->getVar('pembayaran_pkl_lama');
        } else {
            //ambil nama file
            $namaFilepembayaran_pkl = $pembayaran_pkl->getName();
            //pindahkan file
            $pembayaran_pkl->move('uploads/pkl/pembayaran_pkl', $namaFilepembayaran_pkl);
        }


        //Tangkap File Docx
        $surat_bekerja = $this->request->getFile('surat_bekerja');
        // cek logo, apakah logo tetap logo lama
        if ($surat_bekerja->getError() == 4) {
            $namaFilesurat_bekerja = $this->request->getVar('surat_bekerja_lama');
        } else {
            //ambil nama file
            $namaFilesurat_bekerja = $surat_bekerja->getName();
            //pindahkan file
            $surat_bekerja->move('uploads/pkl/surat_bekerja', $namaFilesurat_bekerja);
        }

        //Tangkap File Docx
        $slip_gaji = $this->request->getFile('slip_gaji');
        // cek logo, apakah logo tetap logo lama
        if ($slip_gaji->getError() == 4) {
            $namaFileslip_gaji = $this->request->getVar('slip_gaji_lama');
        } else {
            //ambil nama file
            $namaFileslip_gaji = $slip_gaji->getName();
            //pindahkan file
            $slip_gaji->move('uploads/pkl/slip_gaji', $namaFileslip_gaji);
        }

        $this->model->where('id_pkl', $id_pkl)->set([

            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'prodi' => $this->request->getVar('prodi'),
            'no_hp' => $this->request->getVar('no_hp'),

            'nama_instansi' => $this->request->getVar('nama_instansi'),
            'alamat_instansi' => $this->request->getVar('alamat_instansi'),
            'jabatan' => $this->request->getVar('jabatan'),
            'bidang' => $this->request->getVar('bidang'),

            'lama_bekerja' => $this->request->getVar('lama_bekerja'),
            'no_instansi' => $this->request->getVar('no_instansi'),


            'persyaratan' =>  $namaFilepersyaratan,
            'transkrip' => $namaFiletranskrip,
            'sertifikat' => $namaFilesertifikat,
            'frs' => $namaFilefrs,
            'pembayaran_pkl' => $namaFilepembayaran_pkl,
            'surat_bekerja' => $namaFilesurat_bekerja,
            'slip_gaji' => $namaFileslip_gaji,


        ])->update();

        session()->setFlashdata('pesan', 'Data Berhasil Diedit.');

        return redirect()->to('/pkl');
    }
}
