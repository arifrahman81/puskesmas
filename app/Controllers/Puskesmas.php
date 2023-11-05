<?php

namespace App\Controllers;

use App\Models\InfoKondisiPkm;
use App\Models\LaporanMasyarakat;
use App\Models\LaporanPuskesmas;
use App\Models\ReportMonthFaskes;


class Puskesmas extends BaseController
{
    // function view untuk dashboard puskesmas
    public function dashboard(): string
    {
        return view('Puskesmas/dashboard');
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
        return view('Puskesmas/laporan', $data);
    }

    // function view untuk melihat detail laporan PKM berdasarkan Id
    public function viewLaporanFaskes($id)
    {
        $reportModel = new ReportMonthFaskes();
        $data['data'] = $reportModel->find($id);
        return view('Puskesmas/viewLaporanFaskes', $data);
    }

    public function viewLaporanMasyarakat($id)
    {
        $laporanModel = new LaporanMasyarakat();
        $data['data'] = $laporanModel->find($id);
        return view('Puskesmas/viewLaporanMasyarakat', $data);
    }

    public function updateStatus($id)
    {
        $laporanModel = new LaporanMasyarakat();

        // Ambil data status yang dikirimkan dari form
        $newStatus = $this->request->getPost('status');

        // Perbarui status laporan di database
        $laporanModel->updateStatus($id, $newStatus);

        // Redirect kembali ke halaman lihat laporan
        return redirect()->to('Puskesmas/viewLaporanMasyarakat/' . $id)->with('success', 'Status Berhasil Diupdate');
    }

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

    public function laporan_puskesmas()
    {
        return view('Puskesmas/laporan_puskesmas');
    }

    public function t_laporan_puskesmas()
    {
        return view('Puskesmas/t_laporan_puskesmas');
    }

    public function proses_tambah_laporan_puskesmas()
    {
        $laporanPuskesmas = new LaporanPuskesmas(); // objek baru dari class Report Month Faskes
        $file = $this->request->getFile('file');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newName);

            $laporanPuskesmas->insert([
                'name' => $this->request->getPost('name'),
                'name_faskes' => $this->request->getPost('name_faskes'),
                'address' => $this->request->getPost('address'),
                'puskesmas' => $this->request->getPost('puskesmas'),
                'name_laporan' => $this->request->getPost('name_laporan'),
                'catatan' => $this->request->getPost('catatan'),
                'file' => $newName,
                'file_path' => $file->getpath(),
                'date' => date('Y-m-d')
            ]);
            return redirect()->to('Faskes/laporan')->with('success', 'Laporan Berhasil Terkirim');
        } else {
            return redirect()->to('Faskes/laporan')->with('error', 'Laporan Gagal Terkirim');
        }
    }

    public function blog()
    {
        return view('Puskesmas/blog');
    }

    public function t_blog()
    {
        return view('Puskesmas/t_blog');
    }

    public function saveDataInfoPkm()
    {
        $request = \Config\Services::request();

        $name = $request->getPost('name');
        $title = $request->getPost('title');
        $info = $request->getPost('info');
        $date = date('Y-m-d');

        $dataModel = new InfoKondisiPkm();
        $dataModel->inserData($name, $title, $info, $date);

        return redirect()->to('Puskesmas/t_blog')->with('success', 'Data Berhasil Disimpan');
    }

    public function removeOldData()
    {
        $sixMonthAgo = date('Y-m-d', strtotime('-6 month'));
        $dataModel = new InfoKondisiPkm();
        $dataModel->where('date <', $sixMonthAgo)->delete();
    }
}
