<?= $this->extend('layout/Puskesmas/templates') ?>

<?= $this->Section('content') ?>

<div class="container-fluid">

    <?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-primary">
        <?= session()->getFlashdata('success') ?>
    </div>
    <?php endif; ?>

    <form action="<?= base_url('Puskesmas/saveDataInfoPkm') ?> " method="POST">
        <div class="form-group">
            <label for="name">Puskesmas</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Puskesmas">
        </div>

        <div class="form-group">
            <label for="title">Judul Info</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Judul Info">
        </div>

        <div class="form-group">
            <label for="info">Informasi</label>
            <textarea class="form-control" id="info" name="info" rows="6" placeholder="Informasi"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?= $this->endSection() ?>