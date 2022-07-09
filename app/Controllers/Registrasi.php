<?php

namespace App\Controllers;

class Registrasi extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Halaman Registrasi',
        ];
        return view('Registrasi/index', $data);
    }
}
