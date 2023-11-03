<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row pt-5 d-flex justify-content-center">
        <div class="col-lg-7 border border-2  border-primary p-5">
            <h1>Status Laporan Anda</h1>
            <br>

            <?php if (isset($message)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $message; ?>
                </div>
                <div class="col-5">
                    <a href="<?= base_url('masyarakat/laporanMasyarakat') ?> " class="btn btn-success">Buat Laporan</a>
                </div>
            <?php else : ?>
                <?php foreach ($laporan as $laporan) : ?>
                    <?php if (!empty($laporan)) : ?>
                        <div class="mb-3">
                            <label class="form-label fw-5">Nomor Laporan</label>
                            <input class="form-control" value="<?= $laporan['no_laporan']; ?>" disabled readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-5">Nama</label>
                            <input class="form-control" value="<?= $laporan['name']; ?>" disabled readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-5">Alamat</label>
                            <textarea class="form-control" rows="3" disabled readonly><?= $laporan['alamat']; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-5">Laporan</label>
                            <textarea class="form-control" rows="3" disabled readonly><?= $laporan['laporan']; ?></textarea>
                        </div>

                        <?php if ($laporan['status'] === 'terkirim') : ?>
                            <div class="alert alert-info" role="alert">
                                Status : Laporan Terkirim
                            </div>
                        <?php elseif ($laporan['status'] === 'dibaca') : ?>
                            <div class="alert alert-info" role="alert">
                                Status : Laporan Telah Dibaca
                            </div>
                        <?php elseif ($laporan['status'] === 'ditangani') : ?>
                            <div class="alert alert-info" role="alert">
                                Status : Laporan Ditindak lanjuti
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
                <div class="col-2">
                    <a href="<?= base_url('masyarakat/masyarakat') ?> " class="btn btn-success">Back</a>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>