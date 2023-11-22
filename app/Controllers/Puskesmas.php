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

    // function untuk view daftar laporan puskesmas
    public function laporan_puskesmas()
    {
        $laporanPuskesmas = new LaporanPuskesmas();
        $data['data'] = $laporanPuskesmas->findAll();

        return view('puskesmas/laporan_puskesmas', $data);
    }

    // view untuk import data
    public function importData()
    {
        return view('puskesmas/import_data');
    }

    // funsi proses import data
    public function import()
    {
        $file_excel = $this->request->getFile('file');
        $ext = $file_excel->getClientExtension();

        if ($ext == 'xls') {
            $render = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else {
            $render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }

        $spreadsheet = $render->load($file_excel);
        $data = $spreadsheet->getActiveSheet()->toArray();

        $dataExistCount = 0; // Menyimpan jumlah data yang sudah ada
        foreach ($data as $x => $row) {
            if ($x == 0) {
                continue;
            }

            $nik = $row[5];

            // Pemeriksaan keberadaan data
            if ($this->isDataExist($nik)) {
                // Data sudah ada, lewati atau lakukan pembaruan sesuai kebutuhan
                $dataExistCount++;
                continue;
            }

            $tahun = $row[0];
            $bulan = $row[1];
            $provinsi = $row[2];
            $kota = $row[3];
            $puskesmas = $row[4];
            // $nik = $row[5];
            $nama_penderita = $row[6];
            $umur = $row[7];
            $jenis_kelamin = $row[8];
            $nama_wali = $row[9];
            $alamat = $row[10];
            $tgl_kunjungan = $row[11];
            $diagnosa = $row[12];
            $klinis = $row[13];
            $laboratorium = $row[14];

            if ($laboratorium === null || $laboratorium === '') {
                continue;
            }

            // echo "$tahun<br>";
            $laporanPuskesmas = new LaporanPuskesmas();
            $datasimpan = [
                'tahun' => $tahun,
                'bulan' => $bulan,
                'provinsi' => $provinsi,
                'kota' => $kota,
                'puskesmas' => $puskesmas,
                'nik' => $nik,
                'nama_penderita' => $nama_penderita,
                'umur' => $umur,
                'jenis_kelamin' => $jenis_kelamin,
                'nama_wali' => $nama_wali,
                'alamat' => $alamat,
                'tgl_kunjungan' => $tgl_kunjungan,
                'diagnosa' => $diagnosa,
                'klinis' => $klinis,
                'laboratorium' => $laboratorium
            ];
            $laporanPuskesmas->insert($datasimpan);
        }
        // Menampilkan pesan flash data
        if ($dataExistCount > 0) {
            return redirect()->to('Puskesmas/laporan_puskesmas')->with('success', 'Data Berhasil Diimport. Sebanyak ' . $dataExistCount . ' Data Tidak Disimpan Karena Sudah Ada Didatabase');
        }
    }

    // Fungsi untuk memeriksa keberadaan data berdasarkan NIK
    private function isDataExist($nik)
    {
        $laporanPuskesmas = new LaporanPuskesmas();
        $result = $laporanPuskesmas->where('nik', $nik)->first();
        return ($result !== null);
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
        $data = [
            'tahun' => $this->request->getVar('tahun'),
            'bulan' => $this->request->getVar('bulan'),
            'provinsi' => $this->request->getVar('provinsi'),
            'kota' => $this->request->getVar('kota'),
            'puskesmas' => $this->request->getVar('puskesmas'),
            'nik' => $this->request->getVar('nik'),
            'nama_penderita' => $this->request->getVar('nama_penderita'),
            'umur' => $this->request->getVar('umur'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'nama_wali' => $this->request->getVar('nama_wali'),
            'alamat' => $this->request->getVar('alamat'),
            'tgl_kunjungan' => $this->request->getVar('tgl_kunjungan'),
            'diagnosa' => $this->request->getVar('diagnosa'),
            'klinis' => $this->request->getVar('klinis'),
            'laboratorium' => $this->request->getVar('laboratorium'),
        ];

        $laporanPuskesmas->insert($data);
        return redirect()->to('Puskesmas/laporan_puskesmas')->with('success', 'Data Berhasil Ditambahkan');
    }

    // function hapus data penyakit
    public function hapusDataPenyakit($id)
    {
        $laporanPuskesmas = new LaporanPuskesmas();
        $laporanPuskesmas->delete($id);
        return redirect()->to('Puskesmas/laporan_puskesmas')->with('success', 'Data berhasil dihapus');
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
