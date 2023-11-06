<?= $this->extend('layout/Faskes/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Informasi yang dikirim ke PKM</h1>

    <a href="<?= base_url('Faskes/form_information') ?> " class="btn btn-primary mb-3">Kirim Informasi</a>
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-primary">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pengirim</th>
                            <th>Nama Fasilitas Kesehatan</th>
                            <th>Alamat</th>
                            <th>Puskesmas</th>
                            <th>Informasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($data as $data) : ?>
                            <tr>
                                <td><?= $no++ ?> </td>
                                <td><?= $data['nama'] ?> </td>
                                <td><?= $data['nama_faskes'] ?> </td>
                                <td><?= $data['alamat'] ?> </td>
                                <td><?= $data['puskesmas'] ?> </td>
                                <td><?= $data['informasi'] ?> </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>