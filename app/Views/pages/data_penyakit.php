<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row pt-5 d-flex justify-content-center">
        <div class="col-lg-7 border border-2  border-primary p-5">
            <form action="" method="POST" autocomplete="off">
                <h3 class="mb-5">Mencari data penyakit</h3>
                <div class="mb-3">
                    <label for="nama" class="form-label">Kota Anda</label>
                    <input type="text" class="form-control" name="nama" placeholder="Tulis Nama Kota" autofocus />
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Penyakit</label>
                    <input type="text" class="form-control" name="nama" placeholder="Tulis Nama Penyakit" autofocus />
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Puskesmas</label>
                    <input type="text" class="form-control" name="nama" placeholder="Tulis Nama Puskesmas" autofocus />
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Waktu</label>
                    <input type="text" class="form-control" name="nama" placeholder="Tulis Waktu" autofocus />
                </div>
               
                <button type="submit" class="btn btn-danger">Cari</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>