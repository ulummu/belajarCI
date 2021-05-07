<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'belajar CI',
            'tes'   => ['satu,dua,tiga']

        ];
        echo view('layout/header', $data);
        echo view('pages/Home');
        echo view('layout/footer');
    }

    public function about()
    {
        $data = [
            'title' => 'tentang saya',
            'tes'   => ['satu,dua,tiga']

        ];
        echo view('layout/header', $data);
        echo view('pages/about');
    }
}
