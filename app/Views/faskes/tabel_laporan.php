<?= $this->extend('layout/Faskes/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Laporan Bulanan Fasilitas Kesehatan</h1>

    <a href="<?= base_url('Faskes/laporan') ?> " class="btn btn-primary mb-3">Tambah Laporan</a>

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
                        <?php foreach ($data as $data) : ?>
                            <tr>
                                <td><?= $no++ ?> </td>
                                <td><?= $data['name'] ?> </td>
                                <td><?= $data['name_faskes'] ?> </td>
                                <td><?= $data['name_laporan'] ?> </td>
                                <td>
                                    <a href="<?= base_url('Faskes/view_laporan/' . $data['id']) ?> " class="btn btn-primary">Buka</a>
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