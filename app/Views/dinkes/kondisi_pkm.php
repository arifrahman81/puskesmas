<?= $this->extend('layout/Dinkes/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Informasi Terkini Puskesmas</h1>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Puskesmas</th>
                            <th>Judul Informasi</th>
                            <th>Tanggal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $no = 1 ?>
                            <?php foreach ($data as $data) : ?>
                            <td><?= $no++ ?> </td>
                            <td><?= $data['name'] ?> </td>
                            <td><?= $data['title'] ?> </td>
                            <td><?= $data['date'] ?> </td>
                            <td>
                                <a href="<?= base_url('Dinkes/viewKondisiPkm/' . $data['id']) ?> "
                                    class="btn btn-primary">Buka</a>
                            </td>
                        </tr>
                        <?php endforeach ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>