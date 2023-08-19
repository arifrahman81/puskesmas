<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Daftar Antrian -->
<div class="container">
    <div class="row pt-5 d-flex justify-content-center">
        <div class="col-lg-7 border border-2  border-primary p-5">
            <form action="" method="POST" autocomplete="off">
                <!-- Form Group: Nama -->
                <h3 class="mb-5">Pendaftaran Antrian</h3>
                <div class="mb-3">
                    <label for="inputNama">Nama Pasien</label>
                    <input type="text" class="form-control" id="inputNama" placeholder="Masukkan nama" required autofocus>
                </div>

                <!-- Form Group: Tanggal Lahir -->
                <div class="mb-3">
                    <label for="inputTanggalLahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="inputTanggalLahir" required>
                </div>

                <!-- Form Group: Alamat -->
                <div class="mb-3">
                    <label for="inputAlamat">Alamat</label>
                    <textarea class="form-control" id="inputAlamat" rows="3" placeholder="Masukkan alamat" required></textarea>
                </div>

                <!-- Form Group: Nomor Telepon -->
                <div class="mb3">
                    <label for="inputNomorTelepon">Nomor Telepon</label>
                    <input type="tel" class="form-control" id="inputNomorTelepon" placeholder="Masukkan nomor telepon" required autofocus>
                </div><br>

                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Pilih Puskesmas</option>
                        <option value="1">Puskesmas Tamangapa</option>
                        <option value="2">Puskesmas Perintis</option>
                        <option value="3">Puskesmas Pettarani</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="pesan">Keluhan</label>
                    <textarea class="form-control" id="pesan" rows="4" placeholder="" required></textarea>
                </div>

                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Jam 08.00-09.00
                    </label>
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Jam 09.00-10.00
                    </label>
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Jam 10.00-11.00
                    </label>
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Jam 11.00-12.00
                    </label>
                </div><br>

                <!-- Tombol Submit -->
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>