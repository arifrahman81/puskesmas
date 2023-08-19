<?php

namespace App\Controllers;

class Puskesmas extends BaseController
{
    public function puskesmas(): string
    {
        return view('puskesmas/puskesmas');
    }

    public function laporan_pkm(): string
    {
        return view('puskesmas/laporan_pkm');
    }

    public function update_pkm(): string
    {
        return view('puskesmas/update_pkm');
    }

    public function laporan_puskesmas(): string
    {
        return view('puskesmas/laporan_puskesmas');
    }
}