<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row pt-5 d-flex justify-content-center">
        <div class="col-lg-7 border border-2  border-primary p-5">
            <h3 class="mb-5">Laporan Kesehatan</h3>
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-primary">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>
            <form action="<?= base_url('masyarakat/save') ?> " method="POST" autocomplete="off">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" required autofocus />
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" placeholder="" name="alamat" id="alamat" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="no_hp" class="form-label">Nomer Hp/Whatsapp</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required />
                </div>

                <div class="mb-3">
                    <label for="date">Tanggal Pelaporan</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div><br>

                <div class="form-group">
                    <select class="form-select" name="Puskesmas" required>
                        <option selected>Pilih Salah Satu untuk Mengirim</option>
                        <?php foreach ($puskesmas as $puskesmas) : ?>
                            <option value="<?= $puskesmas['name'] ?> "><?= $puskesmas['name'] ?> </option>
                        <?php endforeach ?>
                    </select>
                </div>

                <label for="laporan" class="form-label">Isi Laporan</label>
                <div class="mb-3">
                    <textarea class="form-control" placeholder="Tuliskan Laporan Anda" name="laporan" id="laporan" style="height: 100px" required></textarea>
                </div>

                <div class="row justify-content-between">
                    <div class="col-4">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                    <div class="col-2">
                        <a href="<?= base_url('masyarakat/masyarakat') ?> " class="btn btn-success">Back</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>