<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\PklModel;

class PengesahanPkl extends ResourceController

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
            return view('pkl/pengesahan_pkl', ['produk' => $dataProduct]);
        } else {
            return redirect()->to('/');
        }
    }

    public function show($id_pkl = null)
    {
        //Mengubah Data Produk Hukum
        $dataProduct = $this->model->where('id_pkl', $id_pkl)->first();

        return view('/pkl/lihat_pkl', ['product' => $dataProduct]);
    }

    public function update($id_pkl = null)
    {

        $this->model->where('id_pkl', $id_pkl)->set([

            'disetujui' => $this->request->getVar('disetujui'),
            'alasan' => $this->request->getVar('alasan'),

        ])->update();

        session()->setFlashdata('pesan', 'Tempat PKL Berhasil di Verifikasi');

        return redirect()->to('/pengesahanpkl');
    }
}
