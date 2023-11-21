<?= $this->extend('layout/Puskesmas/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- <h1 class="h3 mb-4 text-gray-800">Laporan Pasien</h1> -->

    <a href="<?= base_url('Puskesmas/t_laporan_puskesmas') ?> " class="btn btn-primary mb-3">Tambah Laporan</a>
    <a href="<?= base_url('Puskesmas/importData') ?> " class="btn btn-secondary mb-3">Import Data</a>
    <?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-primary">
        <?= session()->getFlashdata('success') ?>
    </div>
    <?php endif; ?>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="example1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tahun</th>
                            <th>Bulan</th>
                            <th>Provinsi</th>
                            <th>Kota</th>
                            <th>Puskesmas</th>
                            <th>NIK</th>
                            <th>Nama Penderita</th>
                            <th>Umur</th>
                            <th>Jenis Kelamin</th>
                            <th>Nama Wali</th>
                            <th>Alamat</th>
                            <th>Tgl Kunjungan</th>
                            <th>Diagnosa</th>
                            <th>Klinis +</th>
                            <th>Laboratorium +</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($data as $data) : ?>
                        <tr>
                            <td><?= $no++ ?> </td>
                            <td><?= $data['tahun'] ?> </td>
                            <td><?= $data['bulan'] ?> </td>
                            <td><?= $data['provinsi'] ?> </td>
                            <td><?= $data['kota'] ?> </td>
                            <td><?= $data['puskesmas'] ?> </td>
                            <td><?= $data['nik'] ?> </td>
                            <td><?= $data['nama_penderita'] ?> </td>
                            <td><?= $data['umur'] ?> </td>
                            <td><?= $data['jenis_kelamin'] ?> </td>
                            <td><?= $data['nama_wali'] ?> </td>
                            <td><?= $data['alamat'] ?> </td>
                            <td><?= $data['tgl_kunjungan'] ?> </td>
                            <td><?= $data['diagnosa'] ?> </td>
                            <td><?= $data['klinis'] ?> </td>
                            <td><?= $data['laboratorium'] ?> </td>
                            <td>
                                <a href="<?= base_url('Puskesmas/hapusDataPenyakit/' . $data['id']) ?>"
                                    class="btn btn-danger btn-circle"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>

<?= $this->endSection(); ?>