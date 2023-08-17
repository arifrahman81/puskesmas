<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('pages/index');
    }

    public function masyarakat(): string
    {
        return view('pages/masyarakat');
    }

    public function laporan(): string
    {
        return view('pages/laporan');
    }

    public function status(): string
    {
        return view('pages/status');
    }

    public function daftar_antrian(): string
    {
        return view('pages/daftar_antrian');
    }

    public function login_faskes(): string
    {
        return view('pages/login_faskes');
    }

    public function faskes(): string
    {
        return view('pages/faskes');
    }

    public function form_faskes(): string
    {
        return view('pages/form_faskes');
    }

    public function faskes_pkm(): string
    {
        return view('pages/faskes_pkm');
    }

    public function login_pkm(): string
    {
        return view('pages/login_pkm');
    }

    public function puskesmas(): string
    {
        return view('pages/puskesmas');
    }

    public function laporan_pkm(): string
    {
        return view('pages/laporan_pkm');
    }

    public function update_pkm(): string
    {
        return view('pages/update_pkm');
    }

    public function laporan_puskesmas(): string
    {
        return view('pages/laporan_puskesmas');
    }

    public function login_dinkes(): string
    {
        return view('pages/login_dinkes');
    }

    public function dinkes(): string
    {
        return view('pages/dinkes');
    }

    public function kondisi_pkm(): string
    {
        return view('pages/kondisi_pkm');
    }

    public function penyakit(): string
    {
        return view('pages/data_penyakit');
    }
}
