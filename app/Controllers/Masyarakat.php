<?php

namespace App\Controllers;

use App\Models\AntrianPasien;
use App\Models\UserModels;
use App\Models\LaporanMasyarakat;

class Masyarakat extends BaseController
{
    protected $laporanModel;

    public function __construct()
    {
        $this->laporanModel = new LaporanMasyarakat();
    }

    public function masyarakat(): string
    {
        return view('masyarakat/masyarakat');
    }

    public function laporanMasyarakat()
    {
        $userModel = new UserModels();
        $laporanModel = new LaporanMasyarakat();
        $kode = '';
        $query = $laporanModel->query("SELECT MAX(RIGHT(no_laporan, 3)) AS kode FROM laporanmasyarakat WHERE DATE(tanggal) = CURDATE()")->getResultArray();

        if (!empty($query)) {
            $no = ((int) $query[0]['kode']) + 1;
            $kd = sprintf("%03s", $no);
        } else {
            $kd = "001";
        }

        $kode = date('ymd') . $kd;

        $getDataPuskesmas = $userModel->getPuskesmas();
        $data = [
            'puskesmas' => $getDataPuskesmas,
            'kode' => $kode,
        ];
        return view('masyarakat/laporan',  $data);
    }

    public function save()
    {
        $laporanModel = new LaporanMasyarakat();

        $kode = $this->request->getVar('kode');
        $name = $this->request->getVar('name');
        $alamat = $this->request->getVar('alamat');
        $no_hp = $this->request->getVar('no_hp');
        $tanggal = date('Y-m-d');
        $Puskesmas = $this->request->getVar('Puskesmas');
        $laporan = $this->request->getVar('laporan');
        $status = 'terkirim';
        $data = [
            'no_laporan' => $kode,
            'name' => $name,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'tanggal' => $tanggal,
            'Puskesmas' => $Puskesmas,
            'laporan' => $laporan,
            'status' => $status
        ];

        $laporanModel->insert($data);
        return redirect()->to('Masyarakat/laporanMasyarakat')->with('success', 'Laporan Anda Berhasil di Kirim, Terima Kasih');
    }

    public function viewCekLaporan()
    {
        return view('Masyarakat/cekStatusLaporan');
    }

    public function cekStatusLaporan()
    {
        $laporanModel = new LaporanMasyarakat();
        $noLaporan = $this->request->getPost('no_laporan');
        $data['laporan'] = $laporanModel->like('no_laporan', $noLaporan)->findAll();

        if (empty($data['laporan'])) {
            $data['message'] = 'Nomor Laporan tidak ada. Silahkan mengirim laporan anda';
        }

        return view('Masyarakat/status', $data);
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
        $userModel = new UserModels();
        $data['puskesmas'] = $userModel->getPuskesmas();

        return view('masyarakat/daftar_antrian', $data);
    }

    public function proses_daftar()
    {
        // Ambil data dari form
        $name = $this->request->getPost('name');
        $tgl_lahir = $this->request->getPost('tgl_lahir');
        $alamat = $this->request->getPost('alamat');
        $no_hp = $this->request->getPost('no_hp');
        $puskesmas = $this->request->getPost('puskesmas');
        $keluhan = $this->request->getPost('keluhan');
        $jam = $this->request->getPost('jam');

        $modelAntrian = new AntrianPasien();
        $countAntrian = $modelAntrian->where('jam', $jam)->countAllResults();
        if ($countAntrian >= 20) {
            // Tampilkan pesan jika sudah penuh
            // $data['error'] = 'Maaf, jam berobat sudah penuh. Silakan pilih jam lain.';
            return redirect()->to('Masyarakat/daftar_antrian')->with('error', 'Maaf, Jam Berobat Sudah Penuh. Silahkan Pilih Jam Lain.');
        } else {
            // Generate nomor antrian dengan format y-m-d-2digit
            $nomorAntrian = date('ymd-') . sprintf("%02d", $countAntrian + 1);

            // Masukkan data ke database
            $data = [
                'name' => $name,
                'tgl_lahir' => $tgl_lahir,
                'alamat' => $alamat,
                'no_hp' => $no_hp,
                'puskesmas' => $puskesmas,
                'keluhan' => $keluhan,
                'jam' => $jam,
                'nomor_antrian' => $nomorAntrian
            ];
            $modelAntrian->insert($data);

            // Tampilkan nomor antrian kepada pasien
            // $data['success'] = 'Pendaftaran berhasil. Nomor antrian Anda: ' . $nomorAntrian;

            return redirect()->to('Masyarakat/daftar_antrian')->with('success', 'Pendaftaran Berhasil. Nomor Antrian Anda : ' . $nomorAntrian);
        }
    }
}
