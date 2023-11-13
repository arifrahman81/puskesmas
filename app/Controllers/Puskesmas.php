<?php

namespace App\Controllers;

use App\Models\AntrianPasien;
use App\Models\InfoKondisiPkm;
use App\Models\LaporanMasyarakat;
use App\Models\LaporanPuskesmas;
use App\Models\ReportMonthFaskes;
use App\Models\SendInformation;

class Puskesmas extends BaseController
{
    // function view untuk dashboard puskesmas
    public function dashboard(): string
    {
        return view('puskesmas/dashboard');
    }

    // function view untuk menu melihat laporan dan kondisi pkm
    public function laporan()
    {
        $reportModel = new ReportMonthFaskes();
        $laporanModel = new LaporanMasyarakat();
        $getReport = $reportModel->findAll();
        $getLaporan = $laporanModel->findAll();
        $data = [
            'report' => $getReport,
            'laporan' => $getLaporan
        ];
        return view('puskesmas/laporan', $data);
    }

    // function view untuk melihat detail laporan PKM berdasarkan Id
    public function viewLaporanFaskes($id)
    {
        $reportModel = new ReportMonthFaskes();
        $data['data'] = $reportModel->find($id);
        return view('puskesmas/viewLaporanFaskes', $data);
    }

    // function untuk melihat detail laporan masyarakat
    public function viewLaporanMasyarakat($id)
    {
        $laporanModel = new LaporanMasyarakat();
        $data['data'] = $laporanModel->find($id);
        return view('puskesmas/viewLaporanMasyarakat', $data);
    }

    // function untuk proses update status laporan masyarakat
    public function updateStatus($id)
    {
        $laporanModel = new LaporanMasyarakat();

        // Ambil data status yang dikirimkan dari form
        $newStatus = $this->request->getPost('status');

        // Perbarui status laporan di database
        $laporanModel->updateStatus($id, $newStatus);

        // Redirect kembali ke halaman lihat laporan
        return redirect()->to('puskesmas/viewLaporanMasyarakat/' . $id)->with('success', 'Status Berhasil Diupdate');
    }

    // function untuk menampilkan daftar antrian pasien
    public function antrian_pasien()
    {
        $antrianPasien = new AntrianPasien();
        $data['data'] = $antrianPasien->findAll();
        return view('puskesmas/viewAntrian', $data);
    }

    // function untuk menfilter daftar antrian pasien
    public function getByDate()
    {
        $selectedDate = $this->request->getPost('selected_date');

        $antrianPasien = new AntrianPasien();
        $data['data'] = $antrianPasien->where('tanggal', $selectedDate)->findAll();
        return view('puskesmas/viewAntrian', $data);
    }

    // function untuk download file laporan fasilitas kesehatan
    public function download($id)
    {
        $reportModel = new ReportMonthFaskes();
        $file = $reportModel->find($id);

        if ($file) {
            $file_path = WRITEPATH . 'uploads/' . $file['file'];
            return $this->response->download($file_path, null);
        } else {
            return redirect()->to('/file')->with(
                'error',
                'File not found.'
            );
        }
    }

    // function untuk download file laporan puskesmas
    public function download_laporan_puskesmas($id)
    {
        $laporanPuskesmas = new LaporanPuskesmas();
        $file = $laporanPuskesmas->find($id);

        if ($file) {
            $file_path = WRITEPATH . 'uploads/' . $file['file'];
            return $this->response->download($file_path, null);
        } else {
            return redirect()->to('/file')->with(
                'error',
                'File not found.'
            );
        }
    }

    // function untuk view daftar laporan puskesmas
    public function laporan_puskesmas()
    {
        $laporanPuskesmas = new LaporanPuskesmas();
        $data['data'] = $laporanPuskesmas->findAll();

        return view('puskesmas/laporan_puskesmas', $data);
    }

    // function untuk form tambah data laporan puskesmas
    public function t_laporan_puskesmas()
    {
        return view('puskesmas/t_laporan_puskesmas');
    }

    // function proses insert data laporan puskesmas
    public function proses_tambah_laporan_puskesmas()
    {
        $laporanPuskesmas = new LaporanPuskesmas();
        $file = $this->request->getFile('file');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newName);

            $laporanPuskesmas->insert([
                'kota' => $this->request->getPost('kota'),
                'nama_puskesmas' => $this->request->getPost('nama_puskesmas'),
                'judul_laporan' => $this->request->getPost('judul_laporan'),
                'file' => $newName,
            ]);
            return redirect()->to('puskesmas/laporan_puskesmas')->with('success', 'Laporan Berhasil Terkirim');
        } else {
            return redirect()->to('puskesmas/t_laporan_puskesmas')->with('error', 'Laporan Gagal Terkirim');
        }
    }

    // function untuk menampilkan informasi dari fasilitas kesehatan
    public function information_faskes()
    {
        $sendInformation = new SendInformation();
        $data['data'] = $sendInformation->findAll();
        return view('puskesmas/information_faskes', $data);
    }

    // function untuk memberikan tanda notifikasi ada informasi baru dari fasilitas kesehatan
    public function getDataCount()
    {
        $sendInformation = new SendInformation();
        $newDataCount = $sendInformation->where('tanggal >', date('Y-m-d', strtotime('-1 day')))->countAllResults();

        return $newDataCount;
    }

    // function untuk menghapus data lama dengan rentan waktu 6 bulan
    public function removeOldData()
    {
        $sixMonthAgo = date('Y-m-d', strtotime('-6 month'));
        $dataModel = new InfoKondisiPkm();
        $dataModel->where('date <', $sixMonthAgo)->delete();
    }
}
