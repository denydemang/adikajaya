<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()

    {
        $data = [
            'judul' => 'Halaman Utama',
        ];

        return view('pages/page', $data);
    }
}
