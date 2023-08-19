<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Hero Section -->
<section class="puskesmas text-center">
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
                        <i class="fas fa-hospital fa-3x mb-3"></i>
                        <h4 class="card-title">Puskesmas</h4>
                        <p class="card-text">Mengecek laporan masyarakat dan laporan Faskes</p>
                        <a href="<?= base_url('/Puskesmas/laporan_pkm'); ?>" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-hospital fa-3x mb-3"></i>
                        <h4 class="card-title">Puskesmas</h4>
                        <p class="card-text">Mengecek jadwal antrian pasien</p>
                        <a href="<?= base_url('#'); ?>" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-hospital fa-3x mb-3"></i>
                        <h4 class="card-title">Puskesmas</h4>
                        <p class="card-text">Mengupdate informasi baru di aplikasi tentang kondisi terkini Puskesmas</p>
                        <a href="<?= base_url('/Puskesmas/update_pkm'); ?>" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-hospital fa-3x mb-3"></i>
                        <h4 class="card-title">Puskesmas</h4>
                        <p class="card-text">Memasukkan laporan pasien ke dalam database</p>
                        <a href="<?= base_url('/Puskesmas/laporan_puskesmas'); ?>" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>