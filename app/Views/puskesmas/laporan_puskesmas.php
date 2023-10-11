<?= $this->extend('layout/Puskesmas/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Laporan Pasien</h1>

    <a href="<?= base_url('Puskesmas/t_laporan_puskesmas') ?> " class="btn btn-primary mb-3">Tambah Laporan</a>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No. Laporan</th>
                            <th>Kota</th>
                            <th>Nama Puskesmas</th>
                            <th>Judul Laporan</th>
                            <th>Lihat Laporan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Makassar</td>
                            <td>Puskesmas Tamangapa</td>
                            <td>Laporan 1</td>
                            <td>
                                <a href="#" class="btn btn-primary">Buka</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Makassar</td>
                            <td>Puskesmas Tamalanrea</td>
                            <td>Laporan 2</td>
                            <td>
                                <a href="#" class="btn btn-primary">Buka</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>

<?= $this->endSection(); ?>