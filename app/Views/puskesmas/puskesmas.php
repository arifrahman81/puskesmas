<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Hero Section -->
<section class="puskesmas text-center">
    <div class="container">
        <!-- <h1>Layanan Laporan Kesehatan</h1>
        <p>Temukan layanan kesehatan terbaik untuk Anda</p> -->
    </div>
</section>

<!-- Layanan Section -->
<section class="mx-auto p-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-hospital fa-3x mb-3"></i>
                        <h5 class="card-text">Mengecek laporan masyarakat dan laporan Faskes</h5>
                        <a href="<?= base_url('/Puskesmas/laporan_pkm'); ?>" class="btn btn-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-hospital fa-3x mb-3"></i>
                        <h5 class="card-text">Mengecek jadwal antrian pasien</h5>
                        <a href="<?= base_url('#'); ?>" class="btn btn-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-hospital fa-3x mb-3"></i>
                        <h5 class="card-text">Mengupdate informasi baru di aplikasi tentang kondisi terkini Puskesmas</h5>
                        <a href="<?= base_url('/Puskesmas/update_pkm'); ?>" class="btn btn-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-hospital fa-3x mb-3"></i>
                        <h5 class="card-text">Memasukkan laporan pasien ke dalam database</h5>
                        <a href="<?= base_url('/Puskesmas/laporan_puskesmas'); ?>" class="btn btn-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>