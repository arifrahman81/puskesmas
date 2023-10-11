<?php

namespace App\Controllers;

use App\Models\UserModels;
use App\Models\laporanMasyarakat;

class Masyarakat extends BaseController
{
    protected $modelLaporan;

    public function __construct()
    {
        $this->modelLaporan = new LaporanMasyarakat();
    }

    public function masyarakat(): string
    {
        return view('masyarakat/masyarakat');
    }

    public function laporanMasyarakat()
    {
        $userModel = new UserModels();
        $data['puskesmas'] = $userModel->getPuskesmas();
        return view('masyarakat/laporan', $data);
    }

    public function save()
    {
        $this->modelLaporan->save([
            'name' => $this->request->getVar('name'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp'),
            'date' => $this->request->getVar('date'),
            'Puskesmas' => $this->request->getVar('Puskesmas'),
            'laporan' => $this->request->getVar('laporan'),
        ]);
        return redirect()->to('Masyarakat/laporanMasyarakat')->with('success', 'Laporan Anda Berhasil di Kirim, Terima Kasih');
    }



    // public function status(): string
    // {
    //     $status = $this->modelMasyarakat->findAll();
    //     $data = [
    //         'status' => $status
    //     ];

    //     return view('masyarakat/status', $data);
    // }

    public function daftar_antrian(): string
    {
        return view('masyarakat/daftar_antrian');
    }
}
