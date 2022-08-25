<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\PklModel;

class NilaiPkl extends ResourceController

{

    public function __construct()
    {
        $this->session = session();
        $this->model = new \App\Models\PklModel();
        $this->model2 = new \App\Models\DosenModel();
    }


    public function index()
    {
        if ($this->session->get('status') == 'admin'  || $this->session->get('status') == 'prodi') {
            $dataProduct = $this->model->getNilaiPkl()->getResult();;
            return view('pkl/nilai_pkl', ['produk' => $dataProduct]);
        } else {
            return redirect()->to('/');
        }
    }

    public function show($id_pkl = null)
    {
        //Mengubah Data Produk Hukum
        $dataProduct = $this->model->where('id_pkl', $id_pkl)->first();
        $dataDosen = $this->model2->getDosen();
        return view('/pkl/input_nilai_pkl', ['product' => $dataProduct, 'dosen' => $dataDosen]);
    }

    public function update($id_pkl = null)
    {

        $this->model->where('id_pkl', $id_pkl)->set([

            'nilai_dosen_pembimbing' => $this->request->getVar('nilai_dosen_pembimbing'),
            'nilai_pembimbing_instansi' => $this->request->getVar('nilai_pembimbing_instansi'),

        ])->update();

        session()->setFlashdata('pesan', 'Nilai PKL Berhasil Di Input');

        return redirect()->to('/nilaipkl');
    }
}
