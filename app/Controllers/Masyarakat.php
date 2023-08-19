<?php

namespace App\Controllers;

class Masyarakat extends BaseController
{
    
    public function masyarakat(): string
    {
        
        return view('masyarakat/masyarakat');
    }

    public function laporanMasyarakat()
    {
        
        return view('masyarakat/laporan',);
    }

    public function status(): string
    {
        
        return view('masyarakat/status');
    }

    public function daftar_antrian(): string
    {
        return view('masyarakat/daftar_antrian');
    }
}
