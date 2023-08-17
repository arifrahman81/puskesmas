<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row pt-5 d-flex justify-content-center">
        <div class="col-lg-7 border border-2  border-primary p-5">
            <form action="" method="POST" autocomplete="off">
                <h3 class="mb-5">Laporan Kesehatan</h3>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" required autofocus />
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" required />
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">Nomer Hp/Whatsapp</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required />
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Pilih Puskesmas</option>
                        <option value="1">Puskesmas Tamangapa</option>
                        <option value="2">Puskesmas Perintis</option>
                        <option value="3">Puskesmas Pettarani</option>
                    </select>
                </div>
                <label for="laporan" class="form-label">Isi Laporan</label>
                <div class="mb-3">
                    <textarea class="form-control" placeholder="Tuliskan Laporan Anda" name="ringkasan" style="height: 100px" required></textarea>
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>