<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-lg-6 border border-warning p-5">
            <h2 class="mb-3">Masukkan Username dan Password Anda</h2>

            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('auth/process_login') ?> " method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="password" id="passwordField" />
                        <button type="button" class="btn btn-outline-secondary" onclick="togglePasswordVisibility()" tabindex="-1">
                            <i id="eyeIcon" class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>