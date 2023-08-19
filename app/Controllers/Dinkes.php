<?php

namespace App\Controllers;

class Dinkes extends BaseController
{
    public function dinkes(): string
    {
        return view('dinkes/dinkes');
    }

    public function kondisi_pkm(): string
    {
        return view('dinkes/kondisi_pkm');
    }

    public function penyakit(): string
    {
        return view('dinkes/data_penyakit');
    }
}