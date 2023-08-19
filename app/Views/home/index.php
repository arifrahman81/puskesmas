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
                            <i class="fas fa-stethoscope fa-3x mb-3"></i>
                            <h4 class="card-title">Masyarakat Biasa</h4>
                            <p class="card-text">Dapatkan konsultasi medis dari tenaga ahli kami.</p>
                            <a href="<?= base_url('/Masyarakat/masyarakat'); ?>" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-heartbeat fa-3x mb-3"></i>
                            <h4 class="card-title">Staf Fasilitas Kesehatan</h4>
                            <p class="card-text">Lakukan pemeriksaan kesehatan secara berkala untuk mencegah penyakit.</p>
                            <a href="<?= base_url('/Auth/login_faskes'); ?>" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-hospital fa-3x mb-3"></i>
                            <h4 class="card-title">Staf Puskesmas</h4>
                            <p class="card-text">Kami menyediakan fasilitas rawat inap untuk pasien yang membutuhkan.</p>
                            <a href="<?= base_url('/Auth/login_pkm'); ?>" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-medkit fa-3x mb-3"></i>
                            <h4 class="card-title">Staf Dinas Kesehatan</h4>
                            <p class="card-text">Dapatkan obat dan alat kesehatan berkualitas dari kami.</p>
                            <a href="<?= base_url('/Auth/login_dinkes'); ?>" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Konten Utama -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Tentang Kami</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero officiis tempore odio, expedita sequi
                        harum dolore in quisquam consequuntur odit quidem a laboriosam ipsa velit tempora. Eius ab laborum
                        iste expedita adipisci. Nobis, dignissimos dolores nostrum exercitationem laboriosam reiciendis.
                        Nobis amet sit sequi nesciunt autem necessitatibus at nulla vero ducimus.</p>
                </div>
                <div class="col-md-6">
                    <h2>Layanan Kami</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet aperiam debitis impedit, eos
                        voluptatem laudantium doloribus? Eveniet odit voluptates hic aliquid tenetur voluptatum quod ex
                        asperiores blanditiis? Commodi nam quos natus totam aspernatur, assumenda eos reprehenderit aut est
                        hic facere cum nesciunt, a explicabo praesentium at animi odio quibusdam? Ipsam.</p>
                </div>
            </div>
        </div>
    </section>

    <?= $this->endSection(); ?>