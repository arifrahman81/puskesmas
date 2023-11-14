<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Daftar Antrian -->
<div class="container">
    <div class="row pt-5 d-flex justify-content-center">
    <div class="col-lg-7 border border-2  border-primary p-5">
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-primary">
                <?= session()->getFlashdata('success') ?>
                <img src="<?= base_url('/assets/img/bisa.gif') ?> " alt="Logo" height="45">
            </div>
        <?php elseif (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        
            <form action="<?= site_url('Masyarakat/proses_daftar') ?> " method="POST" autocomplete="off">
                <!-- Form Group: Nama -->
                <h3 class="mb-5">Pendaftaran Antrian</h3>
                <div class="mb-3">
                    <label for="inputNama">Nama Pasien</label>
                    <input type="text" class="form-control" name="name" id="inputNama" placeholder="Masukkan nama" required autofocus>
                </div>

                <!-- Form Group: Tanggal Lahir -->
                <div class="mb-3">
                    <label for="inputTanggalLahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" id="inputTanggalLahir" required>
                </div>

                <!-- Form Group: Alamat -->
                <div class="mb-3">
                    <label for="inputAlamat">Alamat</label>
                    <textarea class="form-control" id="inputAlamat" name="alamat" rows="3" placeholder="Masukkan alamat" required></textarea>
                </div>

                <!-- Form Group: Nomor Telepon -->
                <div class="mb3">
                    <label for="inputNomorTelepon">Nomor Telepon</label>
                    <input type="tel" class="form-control" name="no_hp" id="inputNomorTelepon" placeholder="Masukkan nomor telepon" required autofocus>
                </div><br>

                <div class="mb-3">
                    <select class="form-select" name="puskesmas" aria-label="Default select example">
                        <option selected>Pilih Puskesmas</option>
                        <?php foreach ($puskesmas as $puskesmas) : ?>
                            <option value="<?= $puskesmas['name'] ?> "><?= $puskesmas['name'] ?> </option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="pesan">Keluhan</label>
                    <textarea class="form-control" id="pesan" name="keluhan" rows="4" placeholder="Keluhan" required></textarea>
                </div>

                <div class="mb-3">
                    <select name="jam" class="form-select" required>
                        <option selected>Pilih Jam Berobat</option>
                        <option value="08:00:00">08:00</option>
                        <option value="09:00:00">09:00</option>
                        <option value="09:00:00">10:00</option>
                        <option value="09:00:00">11:00</option>
                    </select>
                </div>
                <!-- Tombol Submit -->
                <div class="row justify-content-between">
                    <div class="col-3">
                        <button type="submit" class="btn btn-info btn-sm">Daftar</button>
                    </div>
                    <div class="col-2">
                        <a href="<?= base_url('masyarakat/masyarakat') ?> " class="btn btn-success btn-sm">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>