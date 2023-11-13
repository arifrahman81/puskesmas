<?= $this->extend('layout/Faskes/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Mengirim Data Faskes ke Puskesmas</h1>

    <?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-primary">
        <?= session()->getFlashdata('success') ?>
    </div>
    <?php elseif (session()->getFlashdata('error')) : ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error') ?>
    </div>
    <?php endif; ?>

    <form action="<?= base_url('Faskes/saveLaporan') ?> " method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Nama Pengirim</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nama Pengirim">
        </div>

        <div class="form-group">
            <label for="name_faskes">Nama Faskes</label>
            <input type="text" class="form-control" id="name_faskes" name="name_faskes" placeholder="Nama Faskes">
        </div>

        <div class="form-group">
            <label for="address">Alamat</label>
            <textarea class="form-control" id="address" name="address" rows="6" placeholder="Alamat"></textarea>
        </div>

        <div class="form-group">
            <select class="form-select" name="puskesmas" required>
                <option selected>Pilih Salah Satu untuk Mengirim</option>
                <?php foreach ($puskesmas as $puskesmas) : ?>
                <option value="<?= $puskesmas['name'] ?> "><?= $puskesmas['name'] ?> </option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="form-group">
            <label for="name_laporan">Nama Laporan</label>
            <input type="text" class="form-control" id="name_laporan" name="name_laporan" placeholder="Nama Laporan">
        </div>

        <div class="form-group">
            <label for="catatan">Catatan Tambahan</label>
            <textarea class="form-control" id="catatan" name="catatan" rows="6" placeholder="Catatan"></textarea>
        </div>

        <div class="form-group">
            <label for="file">Upload Laporan (Excel dan PDF)</label>
            <input type="file" class="form-control-file" id="file" name="file">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

<?= $this->endSection(); ?>