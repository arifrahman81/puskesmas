<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Hero Section -->
<section class="jumbotron text-center">
    <div class="container">
        <h1>Layanan Laporan Kesehatan</h1>
        <p>Temukan layanan kesehatan terbaik untuk Anda</p>
    </div>
</section>

<!-- Layanan Section -->
<section class="mx-auto">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-medkit fa-3x mb-3"></i>
                        <h4 class="card-title">Staf Dinas Kesehatan</h4>
                        <p class="card-text">Mengecek kondisi PKM di wilayah saya</p>
                        <a href="<?= base_url('/Pages/kondisi_pkm'); ?>" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-medkit fa-3x mb-3"></i>
                        <h4 class="card-title">Staf Dinas Kesehatan</h4>
                        <p class="card-text">Menyebarkan informasi kesehatan langsung kepada masyarakat dan kepada Puskesmas yang bersifat publik</p>
                        <a href="<?= base_url('/Pages/login_faskes'); ?>" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-medkit fa-3x mb-3"></i>
                        <h4 class="card-title">Staf Dinas Kesehatan</h4>
                        <p class="card-text">Mencari informasi data penyakit di wilayah saya
                        </p>
                        <a href="<?= base_url('/Pages/data_penyakit'); ?>" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-medkit fa-3x mb-3"></i>
                        <h4 class="card-title">Staf Dinas Kesehatan</h4>
                        <p class="card-text">Melihat masukan dari masyarakat tentang kondisi kesehatan di wilayah saya (Link ke instagram Dinkes)
                        </p>
                        <a href="https://www.instagram.com/dinaskesehatankotamakassar/" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>