<?= $this->extend('layout/Puskesmas/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <h1 class="h3 mt-5 mb-4 text-gray-800">Data Laporan Fasilitas Kesehatan </h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pengirim</th>
                            <th>Nama Fasilitas Kesehatan</th>
                            <th>Nama Laporan</th>
                            <th>Lihat Laporan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($report as $report) : ?>
                            <tr>
                                <td><?= $no++ ?> </td>
                                <td><?= $report['name'] ?> </td>
                                <td><?= $report['name_faskes'] ?> </td>
                                <td><?= $report['name_laporan'] ?> </td>
                                <td>
                                    <a href="<?= base_url('Puskesmas/viewLaporanFaskes/' . $report['id']) ?> " class="btn btn-primary">Buka</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <h1 class="h3 mt-5 mb-4 text-gray-800">Data Laporan Masyarakat </h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nomor Laporan</th>
                            <th>Nama</th>
                            <th>Nama Alamat</th>
                            <th>Nomor Hp</th>
                            <th>Status Laporan</th>
                            <th>Lihat Laporan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($laporan as $laporan) : ?>
                            <tr>
                                <td><?= $no++ ?> </td>
                                <td><?= $laporan['no_laporan'] ?> </td>
                                <td><?= $laporan['name'] ?> </td>
                                <td><?= $laporan['alamat'] ?> </td>
                                <td><?= $laporan['no_hp'] ?> </td>
                                <td><?= $laporan['status'] ?> </td>
                                <td>
                                    <a href="<?= base_url('Puskesmas/viewLaporanMasyarakat/' . $laporan['id']) ?> " class="btn btn-primary">Buka</a>
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