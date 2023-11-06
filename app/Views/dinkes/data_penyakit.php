<?= $this->extend('layout/Dinkes/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Data Penyakit</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kota</th>
                            <th>Puskesmas</th>
                            <th>Judul Laporan</th>
                            <th>Isi Laporan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($data as $data) : ?>
                            <tr>
                                <td><?= $no++ ?> </td>
                                <td><?= $data['kota'] ?> </td>
                                <td><?= $data['nama_puskesmas'] ?> </td>
                                <td><?= $data['judul_laporan'] ?> </td>
                                <td>
                                    <a class="btn btn-info" href="/file/download_laporan_puskesmas/<?= $data['id']; ?>">Download</a>
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