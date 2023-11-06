<?= $this->extend('layout/Puskesmas/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Jadwal Antrian Pasien</h1>

    <form action="<?= base_url('Puskesmas/getByDate') ?>" method="post" class="mb-4">
        <div class="form-group row">
            <label for="selected_date" class="col-sm-2 col-form-label">Pilih Tanggal:</label>
            <div class="col-sm-4">
                <input type="date" class="form-control" id="selected_date" name="selected_date">
            </div>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>


    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No. Antrian</th>
                            <th>Nama Pasien</th>
                            <th>Jam Berobat</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach ($data as $data) : ?>
                                <td><?= $data['nomor_antrian'] ?> </td>
                                <td><?= $data['name'] ?> </td>
                                <td><?= $data['jam'] ?> </td>
                                <td><?= $data['tanggal'] ?> </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>