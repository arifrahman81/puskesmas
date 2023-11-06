<?= $this->extend('layout/Puskesmas/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Informasi Dari Fasilitas Kesehatan</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pengirim</th>
                            <th>Nama Faskes</th>
                            <th>Alamat</th>
                            <th>Tanggal</th>
                            <th>Informasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($data as $data) : ?>
                            <tr>
                                <td><?= $no++ ?> </td>
                                <td><?= $data['nama'] ?> </td>
                                <td><?= $data['nama_faskes'] ?> </td>
                                <td><?= $data['alamat'] ?> </td>
                                <td><?= $data['tanggal'] ?> </td>
                                <td><?= $data['informasi'] ?> </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>

<?= $this->endSection(); ?>