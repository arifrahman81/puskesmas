<?= $this->extend('layout/Puskesmas/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Laporan <?= $data['name_faskes'] ?> </h1>

    <div class="col-9">
        <p class="h5 text-black fw-semibold">Tanggal : <?= $data['date'] ?> </p>
        <br>

        <p class="h5 text-black fw-semibold">Nama Laporan : <?= $data['name_laporan'] ?> </p>
        <br>

        <p class="h5 text-black fw-semibold">Nama Pengirim : <?= $data['name'] ?> </p>
        <br>

        <p class="h5 text-black fw-semibold">Alamat : <?= $data['address'] ?> </p>
        <br>
        <p class="h5 text-black fw-semibold">Catatan : <?= $data['catatan'] ?> </p>
        <br>

        <p class="h5 text-black fw-semibold">File Laporan : <?= $data['file'] ?></p>
        <a href="<?= base_url($downloadUrl) ?>" class="btn btn-success" download>Download
            File</a>
        <br>

        <a href="<?= base_url('Puskesmas/laporan') ?> " class="btn btn-primary">Kembali</a>
    </div>



</div>

<?= $this->endSection(); ?>