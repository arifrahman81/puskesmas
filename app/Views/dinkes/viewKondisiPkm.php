<?= $this->extend('layout/Dinkes/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Informasi Terkini <?= $data['name'] ?> </h1>

    <div class="col-9">
        <p class="h5 text-black fw-semibold">Tanggal : <?= $data['date'] ?> </p>
        <br>
        <p class="h5 text-black fw-semibold">Judul : <?= $data['title'] ?> </p>
        <br>
        <h3 class="text-black fw-bold">Informasi</h3>
        <p class="text-black fs-5"><?= $data['info'] ?> </p>

        <a href="<?= base_url('Dinkes/kondisi_pkm') ?> " class="btn btn-primary">Kembali</a>
    </div>



</div>

<?= $this->endSection(); ?>