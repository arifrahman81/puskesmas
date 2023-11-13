<?php

namespace App\Controllers;

use App\Models\AntrianPasien;
use App\Models\UserModels;
use App\Models\LaporanMasyarakat;

class Masyarakat extends BaseController
{
    // protected $laporanModel;

    // public function __construct()
    // {
    //     $this->laporanModel = new LaporanMasyarakat();
    // }
    // function untuk menampilkan halaman masyarakat
    public function masyarakat(): string
    {
        return view('masyarakat/masyarakat');
    }

    // function form laporan masyarakat
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

    // function proses insert data laporan masyarakat
    public function save()
    {
        $laporanModel = new LaporanMasyarakat();
        $tanggal = date('Y-m-d');
        $status = 'terkirim';
        $data = [
            'no_laporan' => $this->request->getVar('kode'),
            'name' => $this->request->getVar('name'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp'),
            'tanggal' => $tanggal,
            'Puskesmas' => $this->request->getVar('Puskesmas'),
            'laporan' => $this->request->getVar('laporan'),
            'status' => $status
        ];
        $laporanModel->insert($data);
        return redirect()->to('masyarakat/laporanMasyarakat')->with('success', 'Laporan Anda Berhasil di Kirim, Terima Kasih');
    }

    // function form cek laporan masyarakat
    public function viewCekLaporan()
    {
        return view('masyarakat/cekStatusLaporan');
    }

    // function proses cek laporan masyarakat
    public function cekStatusLaporan()
    {
        $laporanModel = new LaporanMasyarakat();
        $noLaporan = $this->request->getPost('no_laporan');
        $data['laporan'] = $laporanModel->like('no_laporan', $noLaporan)->findAll();

        if (empty($data['laporan'])) {
            $data['message'] = 'Nomor Laporan tidak ada. Silahkan mengirim laporan anda';
        }
        return view('masyarakat/status', $data);
    }

    // function untuk pendaftaran antian pasien
    public function daftar_antrian(): string
    {
        $userModel = new UserModels();
        $data['puskesmas'] = $userModel->getPuskesmas();
        return view('masyarakat/daftar_antrian', $data);
    }

    // function proses pendaftaran antrian pasien
    public function proses_daftar()
    {
        $modelAntrian = new AntrianPasien();
        $jam = $this->request->getPost('jam');
        $tanggal = date('Y-m-d');

        $countAntrian = $modelAntrian->where('jam', $jam)->countAllResults();
        if ($countAntrian >= 20) {
            // Tampilkan pesan jika sudah penuh
            // $data['error'] = 'Maaf, jam berobat sudah penuh. Silakan pilih jam lain.';
            return redirect()->to('masyarakat/daftar_antrian')->with('error', 'Maaf, Jam Berobat Sudah Penuh. Silahkan Pilih Jam Lain.');
        } else {
            // Generate nomor antrian dengan format y-m-d-2digit
            $nomorAntrian = date('ymd-') . sprintf("%02d", $countAntrian + 1);

            // Masukkan data ke database
            $data = [
                'name' => $this->request->getPost('name'),
                'tgl_lahir' => $this->request->getPost('tgl_lahir'),
                'alamat' => $this->request->getPost('alamat'),
                'no_hp' => $this->request->getPost('no_hp'),
                'puskesmas' => $this->request->getPost('puskesmas'),
                'keluhan' =>  $this->request->getPost('keluhan'),
                'jam' => $jam,
                'nomor_antrian' => $nomorAntrian,
                'tanggal' => $tanggal
            ];
            $modelAntrian->insert($data);
            return redirect()->to('masyarakat/daftar_antrian')->with('success', 'Pendaftaran Berhasil. Nomor Antrian Anda : ' . $nomorAntrian);
        }
    }
}
