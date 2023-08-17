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
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-stethoscope fa-3x mb-3"></i>
                        <h4 class="card-title">Masyarakat Biasa</h4>
                        <p class="card-text">Melaporkan kondisi kesehatan di sekitar saya</p>
                        <a href="<?= base_url('/Pages/laporan'); ?>" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-stethoscope fa-3x mb-3"></i>
                        <h4 class="card-title">Masyarakat Biasa</h4>
                        <p class="card-text">Melihat status pelaporan saya</p>
                        <a href="<?= base_url('/Pages/status'); ?>" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-stethoscope fa-3x mb-3"></i>
                        <h4 class="card-title">Masyarakat Biasa</h4>
                        <p class="card-text">Mendaftar antrian untuk berobat ke puskesmas</p>
                        <a href="<?= base_url('/Pages/daftar_antrian'); ?>" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-stethoscope fa-3x mb-3"></i>
                        <h4 class="card-title">Masyarakat Biasa</h4>
                        <p class="card-text">Melihat informasi tentang Puskesmas di wilayah saya (blog)</p>
                        <a href="https://puskesmastamangapa.or.id/" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mx-auto">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-stethoscope fa-3x mb-3"></i>
                        <h4 class="card-title">Masyarakat Biasa</h4>
                        <p class="card-text">Melihat informasi dari Dinas Kesehatan (blog)</p>
                        <a href="https://dinkes.sulselprov.go.id/" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>