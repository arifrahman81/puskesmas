<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row pt-5 d-flex justify-content-center">
        <div class="col-lg-7 border border-2  border-primary p-5">
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-primary">
                    <?= session()->getFlashdata('success') ?>
                    <img src="<?= base_url('/assets/img/bisa.gif') ?> " alt="Logo" height="45">
                </div>
            <?php endif; ?>
            <h1>Nomor Antrian Anda : <?= $antrian['nomor_antrian'] ?></h1>
            <br>
            <h2>Mohon disimpan!!</h2>
            <a href="<?= base_url('Masyarakat/masyarakat') ?> " class="btn btn-primary">Back</a>


        </div>
    </div>
</div>

<?= $this->endSection(); ?>