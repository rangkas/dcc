<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\KendaraanModel;

class Layanan extends ResourceController

{

    public function __construct()
    {
        $this->session = session();
        $this->model = new \App\Models\KendaraanModel();
    }

    public function pajak()
    {
        $dataPDAM = $this->model->getKendaraan()->getResult();;
        return view('pages/pajak', ['produk' => $dataPDAM]);
    }

    public function pemeliharaan()
    {
        $dataPDAM = $this->model->getKendaraan()->getResult();;
        return view('pages/pemeliharaan', ['produk' => $dataPDAM]);
    }

    public function asuransi()
    {
        $dataPDAM = $this->model->getKendaraan()->getResult();;
        return view('pages/asuransi', ['produk' => $dataPDAM]);
    }
}
