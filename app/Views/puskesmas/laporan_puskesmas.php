<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Daftar Antrian -->
<div class="container">
    <div class="row pt-5 d-flex justify-content-center">
        <div class="col-lg-7 border border-2  border-primary p-5">
            <form action="" method="POST" autocomplete="off">
                <h2 class="mx-auto py-3">Masukkan laporan Puskesmas</h2>
                <!-- Form Group: Nama -->
                <div class="form-group">
                    <label for="inputNama">Kota</label>
                    <input type="text" class="form-control" id="inputNama" placeholder="Masukkan kota anda" required autofocus>
                </div>

                <!-- Form Group: Nama -->
                <div class="form-group">
                    <label for="inputFaskes">Nama Puskesmas</label>
                    <input type="text" class="form-control" id="inputFaskes" placeholder="Masukkan nama Puskesmas" required>
                </div>

                <!-- Form Group: Alamat -->
                <div class="form-group">
                    <label for="inputAlamat">Judul Laporan</label>
                    <textarea class="form-control" id="inputAlamat" rows="3" placeholder="Contoh Laporan bulan maret 2023" required></textarea>
                </div>

                <div class="form-group">
                    <label for="fileInput">Upload (excel only) :</label>
                    <input type="file" class="form-control-file" id="fileInput" name="file">
                </div>

                <!-- Tombol Submit -->
                <button type="submit" class="btn btn-info">Kirim Laporan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>