<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Isi halaman -->
<section class="">
    <div class="container mt-5 justify-content-center">
        <div class="row">
            <div class="col">
                <h1>Status Laporan Pasien</h1>
                <?php if (session()->getFlashdata('bisa')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('bisa'); ?>
                        <img src="/assets/img/bisa.gif" alt="Logo" height="50">
                    </div>
                <?php endif; ?>
                <table class="table mb-3">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nomer Laporan</th>
                            <th scope="col">Tanggal Pelaporan</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($status as $k) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $k['tanggal_laporan']; ?></td>
                                <td><?= $k['nama']; ?></td>
                                <td><span class="badge badge-warning">Proses</span></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>