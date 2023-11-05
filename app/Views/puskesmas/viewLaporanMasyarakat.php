<?= $this->extend('layout/Puskesmas/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-primary">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
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

        <form method="post" action="<?= base_url('Puskesmas/updateStatus/' . $data['id']); ?>">
            <div class="form-group">
                <select name="status" class="form-select">
                    <option selected><?= $data['status'] ?></option>
                    <option value="terkirim">Terkirim</option>
                    <option value="dibaca">Dibaca</option>
                    <option value="ditangani">Ditangani</option>
                </select>
            </div>
            <div class="row justify-content-between">
                <div class="col-3">
                    <button type="submit" class="btn btn-info btn-sm">Submit</button>
                </div>
                <div class="col-2">
                    <a href="<?= base_url('Puskesmas/laporan') ?> " class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </form>
    </div>



</div>

<?= $this->endSection(); ?>