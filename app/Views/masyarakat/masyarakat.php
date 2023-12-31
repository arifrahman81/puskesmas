<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Hero Section -->


<!-- Layanan Section -->
<section class="mx-auto p-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-user-doctor fa-3x mb-3"></i>
                        <h5 class="card-text">Melaporkan kondisi kesehatan di sekitar saya</h5>
                        <a href="<?= base_url('Masyarakat/laporanMasyarakat'); ?>"
                            class="btn btn-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-eye fa-3x mb-3"></i>
                        <h5 class="card-text">Melihat status pelaporan saya</h5>
                        <a href="<?= base_url('masyarakat/viewCekLaporan'); ?>" class="btn btn-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-address-card fa-3x mb-3"></i>
                        <h5 class="card-text">Mendaftar antrian untuk berobat ke puskesmas</h5>
                        <a href="<?= base_url('/Masyarakat/daftar_antrian'); ?>"
                            class="btn btn-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-sitemap fa-3x mb-3"></i>
                        <h5 class="card-text">Melihat informasi tentang Puskesmas di wilayah saya (blog)</h5>
                        <a href="https://puskesmastamangapa.or.id/" class="btn btn-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mx-auto">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-place-of-worship fa-3x mb-3"></i>
                        <h5 class="card-text">Melihat informasi dari Dinas Kesehatan (blog)</h5>
                        <a href="https://dinkes.sulselprov.go.id/" class="btn btn-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>