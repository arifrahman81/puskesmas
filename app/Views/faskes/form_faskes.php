<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Daftar Antrian -->
<div class="container">
    <div class="row pt-5 d-flex justify-content-center">
        <div class="col-lg-7 border border-2  border-primary p-5">
            <form action="" method="POST" autocomplete="off">
                <h2 class="mx-auto py-3">Pengiriman data Faskes ke PKM </h2>
                <!-- Form Group: Nama -->
                <div class="form-group">
                    <label for="inputNama">Nama Pengirim</label>
                    <input type="text" class="form-control" id="inputNama" placeholder="Masukkan nama" required autofocus>
                </div>

                <!-- Form Group: Nama -->
                <div class="form-group">
                    <label for="inputFaskes">Nama FASKES</label>
                    <input type="text" class="form-control" id="inputFaskes" placeholder="Masukkan nama faskes" required>
                </div>

                <!-- Form Group: Alamat -->
                <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <textarea class="form-control" id="inputAlamat" rows="3" placeholder="Masukkan alamat" required></textarea>
                </div>

                <div>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Pilih salah satu untuk mengirim :</option>
                        <option value="1">Puskesmas Tamangapa</option>
                        <option value="2">Puskesmas Perintis</option>
                        <option value="3">Puskesmas Pettarani</option>
                    </select>
                </div><br>

                <!-- Form Group: Nama -->
                <div class="form-group">
                    <label for="inputLaporan">Nama Laporan</label>
                    <input type="text" class="form-control" id="inputLaporan" placeholder="Laporan Pasien Bulan Februari 2023" required>
                </div>

                <div class="form-group">
                    <label for="pesan">Catatan Tambahan</label>
                    <textarea class="form-control" id="pesan" rows="4" placeholder="" required></textarea>
                </div>

                <div class="form-group">
                    <label for="fileInput">Upload laporan (Format PDF saja) :</label>
                    <input type="file" class="form-control-file" id="fileInput" name="file">
                </div>

                <!-- Tombol Submit -->
                <button type="submit" class="btn btn-info">Kirim Laporan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>