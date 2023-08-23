<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Hero Section -->
<section class="dinkes text-center">
    <div class="container">
        <!-- <h1>Layanan Laporan Kesehatan</h1> -->
        <!-- <p>Temukan layanan kesehatan terbaik untuk Anda</p> -->
    </div>
</section>

<!-- Layanan Section -->
<section class="mx-auto p-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-medkit fa-3x mb-3"></i>
                        <h5 class="card-text">Mengecek kondisi PKM di wilayah saya</h5>
                        <a href="<?= base_url('/Dinkes/kondisi_pkm'); ?>" class="btn btn-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-medkit fa-3x mb-3"></i>
                        <h5 class="card-text">Menyebarkan informasi kesehatan langsung kepada masyarakat dan kepada Puskesmas yang bersifat publik</h5>
                        <a href="<?= base_url('#'); ?>" class="btn btn-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-medkit fa-3x mb-3"></i>
                        <h5 class="card-text">Mencari informasi data penyakit di wilayah saya
                        </h5>
                        <a href="<?= base_url('/Dinkes/data_penyakit'); ?>" class="btn btn-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-medkit fa-3x mb-3"></i>
                        <h5 class="card-text">Melihat masukan dari masyarakat tentang kondisi kesehatan di wilayah saya (Link ke instagram Dinkes)
                        </h5>
                        <a href="https://www.instagram.com/dinaskesehatankotamakassar/" class="btn btn-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>