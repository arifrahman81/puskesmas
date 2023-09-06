<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid py-5 bg-dark mb-5"></div>
<div class="container">
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-lg-6 border border-warning p-5">
            <h2 class="mb-3">Masukkan e-mail dan password anda
                (FASKES)
            </h2>
            <form action="<?= base_url('') ?> " method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" />
                </div>
                <a href="<?= base_url('/Dinkes/dinkes'); ?>" class="btn btn-danger">Login</a>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>