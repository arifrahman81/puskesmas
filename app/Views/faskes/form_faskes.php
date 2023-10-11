<?= $this->extend('layout/Faskes/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Mengirim Informasi Penting ke PKM</h1>

    <form action="#" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nama">Nama Pengirim</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pengirim">
        </div>

        <div class="form-group">
            <label for="Nama_Faskes">Nama Faskes</label>
            <input type="text" class="form-control" id="Nama_Faskes" name="Nama_Faskes" placeholder="Nama Faskes">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="6" placeholder="alamat"></textarea>
        </div>

        <div class="form-group">
            <select class="form-select">
                <option selected>Pilih Salah Satu untuk Mengirim</option>
                <option value="puskesmas_tamangapa">Puskesmas Tamangapa</option>
                <option value="puskesmas_tamalanrea">Puskesmas Tamalanrea</option>
                <option value="puskesmas_daya">Puskesmas Daya</option>
            </select>
        </div>

        <div class="form-group">
            <label for="informasi">Informasi</label>
            <textarea class="form-control" id="informasi" name="informasi" rows="6" placeholder="Informasi"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

<?= $this->endSection(); ?>