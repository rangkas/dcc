<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\KendaraanModel;

class PinjamPakai extends ResourceController

{

    public function __construct()
    {
        $this->session = session();
        $this->model = new \App\Models\KendaraanModel();
    }

    public function pdam()
    {
        $dataPDAM = $this->model->getPdam()->getResult();;
        return view('pages/pdam', ['produk' => $dataPDAM]);
    }

    public function kodim()
    {
        $dataPDAM = $this->model->getKodim()->getResult();;
        return view('pages/kodim', ['produk' => $dataPDAM]);
    }

    public function mui()
    {
        $dataPDAM = $this->model->getMui()->getResult();;
        return view('pages/mui', ['produk' => $dataPDAM]);
    }


    public function kpu()
    {
        $dataPDAM = $this->model->getKpu()->getResult();;
        return view('pages/kpu', ['produk' => $dataPDAM]);
    }

    public function koni()
    {
        $dataPDAM = $this->model->getKoni()->getResult();;
        return view('pages/koni', ['produk' => $dataPDAM]);
    }

    public function kajari()
    {
        $dataPDAM = $this->model->getKajari()->getResult();;
        return view('pages/kajari', ['produk' => $dataPDAM]);
    }

    public function polres()
    {
        $dataPDAM = $this->model->getPolres()->getResult();;
        return view('pages/polres', ['produk' => $dataPDAM]);
    }



    public function home()
    {
        return view('pages/index');
    }
}
