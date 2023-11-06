<?= $this->extend('layout/Faskes/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Mengirim Informasi Penting ke PKM</h1>
    <form action="<?= base_url('Faskes/add_information') ?> " method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nama">Nama Pengirim</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pengirim">
        </div>

        <div class="form-group">
            <label for="Nama_Faskes">Nama Fasilitas Kesehatan</label>
            <input type="text" class="form-control" id="Nama_Faskes" name="nama_faskes" placeholder="Nama Faskes">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="6" placeholder="alamat"></textarea>
        </div>

        <div class="form-group">
            <select class="form-select" name="puskesmas">
                <option selected>Pilih Salah Satu untuk Mengirim</option>
                <?php foreach ($puskesmas as $puskesmas) : ?>
                    <option value="<?= $puskesmas['name'] ?> "><?= $puskesmas['name'] ?> </option>
                <?php endforeach ?>
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