<?= $this->extend('layout/Puskesmas/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Nomor Laporan <?= $data['no_laporan'] ?> </h1>

    <div class="col-9">
        <p class="h5 text-black fw-semibold">Nama : <?= $data['name'] ?> </p>
        <br>

        <p class="h5 text-black fw-semibold">Alamat : <?= $data['alamat'] ?> </p>
        <br>

        <p class="h5 text-black fw-semibold">Nomor Hp : <?= $data['no_hp'] ?> </p>
        <br>

        <p class="h5 text-black fw-semibold">Tanggal : <?= $data['tanggal'] ?> </p>
        <br>
        <p class="h5 text-black fw-semibold">Isi Laporan : <?= $data['laporan'] ?> </p>
        <br>

        <p class="h5 text-black fw-semibold">Status : <?= $data['status'] ?></p>
        <br>

        <a href="<?= base_url('Puskesmas/laporan') ?> " class="btn btn-primary">Kembali</a>
    </div>



</div>

<?= $this->endSection(); ?>