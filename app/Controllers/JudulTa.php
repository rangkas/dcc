<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\JudulTaModel;

class JudulTa extends ResourceController

{

    public function __construct()
    {
        $this->session = session();
        $this->model = new \App\Models\JudulTaModel();
        $this->model2 = new \App\Models\DosenModel();
    }


    public function index()
    {
        if ($this->session->get('status') == 'admin'  || $this->session->get('status') == 'prodi') {
            $dataProduct = $this->model->getJudulTa()->getResult();;
            return view('tugas_akhir/tugas_akhir', ['produk' => $dataProduct]);
        } elseif ($this->session->get('status') == 'mahasiswa') {
            $dataProduct = $this->model->getJudulTaMahasiswa()->getResult();;
            return view('tugas_akhir/tugas_akhir', ['produk' => $dataProduct]);
        } else {
            return redirect()->to('/');
        }
    }


    public function new()
    {
        $dataDosen = $this->model2->getDosen();
        return view('tugas_akhir/tambah_tugas_akhir', ['dosen' => $dataDosen]);
    }

    public function create()
    {

        if (!$this->validate([
            'acc_judul' => [
                'rules' => 'uploaded[acc_judul]|mime_in[acc_judul,application/pdf,application/docx,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/zip,application/msword,application/vnd.ms-office]|max_size[acc_judul,20480]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa docx,doc',
                    'max_size' => 'Ukuran File Maksimal 20 MB'
                ]
            ],
            'file_pengajuan' => [
                'rules' => 'uploaded[file_pengajuan]|mime_in[file_pengajuan,application/pdf,application/docx,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/zip,application/msword,application/vnd.ms-office]|max_size[file_pengajuan,20480]',
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

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('judulta/new')->withInput();
        }


        //Tangkap File Fotoimage
        $acc_judul = $this->request->getFile('acc_judul');
        //Pindahkan ke Folder Uploads/acc_judul
        $acc_judul->move('uploads/TA/acc_judul');
        //ambil nama file
        $namaFileacc_judul = $acc_judul->getName();

        //Tangkap File Foto Ijazah image
        $file_pengajuan = $this->request->getFile('file_pengajuan');
        //Pindahkan ke Folder Uploads/file_pengajuan
        $file_pengajuan->move('uploads/TA/file_pengajuan');
        //ambil nama file
        $namaFilefile_pengajuan = $file_pengajuan->getName();

        //Tangkap File Foto transkrip image
        $transkrip = $this->request->getFile('transkrip');
        //Pindahkan ke Folder Uploads/transkrip
        $transkrip->move('uploads/TA/transkrip');
        //ambil nama file
        $namaFiletranskrip = $transkrip->getName();


        $this->model->insert([

            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'prodi' => $this->request->getVar('prodi'),
            'judul1' => $this->request->getVar('judul1'),

            'judul2' => $this->request->getVar('judul2'),
            'dosen_pembimbing' => $this->request->getVar('dosen_pembimbing'),

            'acc_judul' =>  $namaFileacc_judul,
            'file_pengajuan' => $namaFilefile_pengajuan,
            'transkrip' => $namaFiletranskrip,

            'judul_disetujui' => $this->request->getVar('judul_disetujui'),
            'alasan' => $this->request->getVar('alasan')
        ]);

        session()->setFlashdata('pesan', 'Pendaftaran Berhasil.');

        return redirect()->to('/judulta');
    }


    public function show($id_judul_ta = null)
    {
        //Mengubah Data Produk Hukum
        $dataProduct = $this->model->where('id_judul_ta', $id_judul_ta)->first();
        return view('/tugas_akhir/lihat_tugas_akhir', ['product' => $dataProduct]);
    }

    public function edit($id_judul_ta = null)
    {
        //Mengubah Data Produk Hukum
        $dataProduct = $this->model->where('id_judul_ta', $id_judul_ta)->first();
        return view('/tugas_akhir/edit_tugas_akhir', ['product' => $dataProduct]);
    }

    public function delete($id_judul_ta = null)
    {
        //Menghapus Produk Hukum
        $this->model->delete($id_judul_ta);

        return redirect()->to('/pkl');
    }

    public function update($id_judul_ta = null)
    {

        //Tangkap File Docx
        $acc_judul = $this->request->getFile('acc_judul');
        // cek logo, apakah logo tetap logo lama
        if ($acc_judul->getError() == 4) {
            $namaFileacc_judul = $this->request->getVar('acc_judul_lama');
        } else {
            //ambil nama file
            $namaFileacc_judul = $acc_judul->getName();
            //pindahkan file
            $acc_judul->move('uploads/TA/acc_judul', $namaFileacc_judul);
        }


        //Tangkap File Docx
        $file_pengajuan = $this->request->getFile('file_pengajuan');
        // cek logo, apakah logo tetap logo lama
        if ($file_pengajuan->getError() == 4) {
            $namaFilefile_pengajuan = $this->request->getVar('file_pengajuan_lama');
        } else {
            //ambil nama file
            $namaFilefile_pengajuan = $file_pengajuan->getName();
            //pindahkan file
            $file_pengajuan->move('uploads/TA/file_pengajuan', $namaFilefile_pengajuan);
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
            $transkrip->move('uploads/TA/transkrip', $namaFiletranskrip);
        }



        $this->model->where('id_judul_ta', $id_judul_ta)->set([

            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'prodi' => $this->request->getVar('prodi'),
            'judul1' => $this->request->getVar('judul1'),

            'judul2' => $this->request->getVar('judul2'),
            'dosen_pembimbing' => $this->request->getVar('dosen_pembimbing'),

            'acc_judul' =>  $namaFileacc_judul,
            'file_pengajuan' => $namaFilefile_pengajuan,
            'transkrip' => $namaFiletranskrip,

            'judul_disetujui' => $this->request->getVar('judul_disetujui'),
            'alasan' => $this->request->getVar('alasan')



        ])->update();

        session()->setFlashdata('pesan', 'Data Berhasil Diedit.');

        return redirect()->to('/judulta');
    }
}
