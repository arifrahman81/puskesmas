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
    <section class="mx-auto text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-stethoscope fa-3x mb-3"></i>
                            <h4 class="card-title">Fasilitas Kesehatan</h4>
                            <p class="card-text">Mengirimkan laporan bulanan fasilitas kesehatan saya ke Puskesmas di wilayah kerja saya</p>
                            <a href="<?= base_url('/Pages/form_faskes'); ?>" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-heartbeat fa-3x mb-3"></i>
                            <h4 class="card-title">Fasilitas Kesehatan</h4>
                            <p class="card-text">Mengirimkan informasi penting ke Puskesmas</p>
                            <a href="<?= base_url('/Pages/faskes_pkm'); ?>" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?= $this->endSection(); ?>