<?php

namespace App\Controllers;

class coba extends BaseController
{
    public function index()
    {
        echo 'tampilkan controller coba method index';
    }

    public function about($nama = '')
    {
        echo " haloo nama $nama uji coba ";
    }
}
