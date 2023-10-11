<?= $this->extend('layout/Puskesmas/templates') ?>

<?= $this->Section('content') ?>

<div class="container-fluid">

    <form action="#" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="Kota">Kota</label>
            <input type="text" class="form-control" id="Kota" name="Kota" placeholder="Kota">
        </div>

        <div class="form-group">
            <label for="Nama_Puskesmas">Nama Puskesmas</label>
            <input type="text" class="form-control" id="Nama_Puskesmas" name="Nama_Puskesmas"
                placeholder="Nama Puskesmas">
        </div>

        <div class="form-group">
            <label for="Judul_Laporan">Judul Laporan</label>
            <input type="text" class="form-control" id="Judul_Laporan" name="Judul_Laporan" placeholder="Judul Laporan">
        </div>

        <div class="form-group">
            <label for="file">Upload (Excel only)</label>
            <input type="file" class="form-control-file" id="file" name="file">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?= $this->endSection() ?>