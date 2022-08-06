<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\KendaraanModel;

class JenisKendaraan extends ResourceController

{

    public function __construct()
    {
        $this->session = session();
        $this->model = new \App\Models\KendaraanModel();
    }

    public function mobil()
    {

        if ($this->session->get('status') == 'admin') {
            $dataProduct = $this->model->getKendaraanMobil()->getResult();;
            return view('pages/mobil', ['produk' => $dataProduct]);
        } else {
            return redirect()->to('/');
        }
    }

    public function motor()
    {

        if ($this->session->get('status') == 'admin') {
            $dataProduct = $this->model->getKendaraanMotor()->getResult();;
            return view('pages/mobil', ['produk' => $dataProduct]);
        } else {
            return redirect()->to('/');
        }
    }
}
