<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        $this->session = session();
        $this->modelUser = new \App\Models\UserModel();
    }

    public function index()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        // if ($this->session->get('status') != 'admin') {
        //     return redirect()->to('/user');
        // }

        return view('pages/index');
    }
    public function home()
    {
        return view('pages/index');
    }
}
