<?= $this->extend('layout/Dinkes/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Data Penyakit</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                <tr>
                            <th>No.</th>
                            <th>Tahun</th>
                            <th>Bulan</th>
                            <th>Provinsi</th>
                            <th>Kota</th>
                            <th>Puskesmas</th>
                            <th>NIK</th>
                            <th>Nama Penderita</th>
                            <th>Umur</th>
                            <th>Jenis Kelamin</th>
                            <th>Nama Wali</th>
                            <th>Alamat</th>
                            <th>Tgl Kunjungan</th>
                            <th>Diagnosa</th>
                            <th>Klinis +</th>
                            <th>Laboratorium +</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($data as $data) : ?>
                            <tr>
                                <td><?= $no++ ?> </td>
                                <td><?= $data['tahun'] ?> </td>
                                <td><?= $data['bulan'] ?> </td>
                                <td><?= $data['provinsi'] ?> </td>
                                <td><?= $data['kota'] ?> </td>
                                <td><?= $data['puskesmas'] ?> </td>
                                <td><?= $data['nik'] ?> </td>
                                <td><?= $data['nama_penderita'] ?> </td>
                                <td><?= $data['umur'] ?> </td>
                                <td><?= $data['jenis_kelamin'] ?> </td>
                                <td><?= $data['nama_wali'] ?> </td>
                                <td><?= $data['alamat'] ?> </td>
                                <td><?= $data['tgl_kunjungan'] ?> </td>
                                <td><?= $data['diagnosa'] ?> </td>
                                <td><?= $data['klinis'] ?> </td>
                                <td><?= $data['laboratorium'] ?> </td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>