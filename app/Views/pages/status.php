<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Isi halaman -->
<section class="">
    <div class="container mt-5 justify-content-center">
        <div class="row">
            <div class="col">
                <h1>Status Laporan Pasien</h1>
                <table class="table mt-4">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nomer Laporan</th>
                            <th scope="col">Tanggal Laporan</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Contoh data status laporan pasien -->
                        <tr>
                            <th scope="row">1</th>
                            <td>2023-07-01</td>
                            <td>Arif Rahman</td>
                            <td>Antang</td>
                            <td><span class="badge badge-success">Selesai</span></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>2023-07-02</td>
                            <td>Nuralam Pakubumi</td>
                            <td>Abdesir</td>
                            <td><span class="badge badge-success">Selesai</span></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>2023-07-03</td>
                            <td>Muh Iqbal</td>
                            <td>Pampang</td>
                            <td><span class="badge badge-warning">Proses</span></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>2023-07-04</td>
                            <td>Wahyu Hidayat</td>
                            <td>Perintis</td>
                            <td><span class="badge badge-danger">Bermasalah</span></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>2023-07-03</td>
                            <td>Salman Halik</td>
                            <td>Pampang</td>
                            <td><span class="badge badge-warning">Proses</span></td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>2023-07-03</td>
                            <td>Jokowi</td>
                            <td>Pampang</td>
                            <td><span class="badge badge-success">Selesai</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>