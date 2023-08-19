<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row pt-5 d-flex justify-content-center">
        <div class="col-lg-7 border border-2  border-primary p-5">
            <form action="" method="POST" autocomplete="off">
                <h3 class="mb-5">INFORMASI TERBARU TENTANG PUSKESMAS TAMANGAPA, KOTA MAKASSAR</h3>
                <div class="mb-3">
                    <label for="nama" class="form-label">Postingan Baru</label>
                    <input type="text" class="form-control" name="nama" placeholder="Tulis judul info di sini" required autofocus />
                </div>
                <label for="laporan" class="form-label"></label>
                <div class="mb-3">
                    <textarea class="form-control" placeholder="Isi informasi laporan" name="ringkasan" style="height: 100px" required></textarea>
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>