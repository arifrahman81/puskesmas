<?= $this->extend('layout/Puskesmas/templates') ?>

<?= $this->Section('content') ?>

<div class="container-fluid">

    <form action="<?= base_url('Puskesmas/import') ?> " method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="file">Import Data</label>
            <input type="file" class="form-control-file" id="file" name="file" accept=".xlsx, .xls">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?= $this->endSection() ?>