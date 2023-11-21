<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row pt-5 d-flex justify-content-center">
        <div class="col-lg-7 border border-2  border-primary p-5">
            <h3 class="mb-5">Cek Status laporan</h3>
            <form action="<?= site_url('masyarakat/cekStatusLaporan') ?> " method="POST" autocomplete="off">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="no_laporan" class="form-label">Masukkan Nomor Laporan</label>
                    <input type="text" class="form-control" id="no_laporan" name="no_laporan">
                </div>

                <div class="row justify-content-between">
                    <div class="col-6">
                        <button type="submit" class="btn btn-info">Cek Status Laporan</button>
                    </div>
                    <div class="col-2">
                        <a href="<?= base_url('masyarakat/masyarakat') ?> " class="btn btn-success">Back</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>