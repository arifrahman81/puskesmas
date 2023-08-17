<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="">
        <div class="container mt-5 justify-content-center">
            <div class="row">
                <div class="col">
                    <h1>Data Laporan Masyarakat</h1>
                    <table class="table mt-4">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Nomer Laporan</th>
                                <th scope="col">Tanggal Masuk Laporan</th>
                                <th scope="col">Nama Laporan</th>
                                <th scope="col">Lihat Laporan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Contoh data status laporan pasien -->
                            <tr>
                                <th scope="row">1</th>
                                <td>2023-07-01</td>
                                <td>Laporan 1</td>
                                <td><a href="#" class="btn btn-warning">Buka</a></td> 
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>2023-07-02</td>
                                <td>Laporan 2</td>
                                <td><a href="#" class="btn btn-warning">Buka</a></td> 
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>2023-07-03</td>
                                <td>Laporan 3</td>
                                <td><a href="#" class="btn btn-warning">Buka</a></td> 
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>2023-07-04</td>
                                <td>Laporan 4</td>
                                <td><a href="#" class="btn btn-warning">Buka</a></td> 
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>2023-07-03</td>
                                <td>Laporan 5</td>
                                <td><a href="#" class="btn btn-warning">Buka</a></td> 
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>2023-07-03</td>
                                <td>Laporan 6</td>
                                <td><a href="#" class="btn btn-warning">Buka</a></td> 
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container mt-5 justify-content-center">
            <div class="row">
                <div class="col">
                    <h1>Data Laporan Fasilitas Kesehatan</h1>
                    <table class="table mt-4">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Nomer Laporan</th>
                                <th scope="col">Tanggal Masuk Laporan</th>
                                <th scope="col">Nama Laporan</th>
                                <th scope="col">Lihat Laporan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Contoh data status laporan pasien -->
                            <tr>
                                <th scope="row">1</th>
                                <td>2023-07-01</td>
                                <td>Laporan 1</td>
                                <td><a href="#" class="btn btn-warning">Buka</a></td> 
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>2023-07-02</td>
                                <td>Laporan 2</td>
                                <td><a href="#" class="btn btn-warning">Buka</a></td> 
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>2023-07-03</td>
                                <td>Laporan 3</td>
                                <td><a href="#" class="btn btn-warning">Buka</a></td> 
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>2023-07-04</td>
                                <td>Laporan 4</td>
                                <td><a href="#" class="btn btn-warning">Buka</a></td> 
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>2023-07-03</td>
                                <td>Laporan 5</td>
                                <td><a href="#" class="btn btn-warning">Buka</a></td> 
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>2023-07-03</td>
                                <td>Laporan 6</td>
                                <td><a href="#" class="btn btn-warning">Buka</a></td> 
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

<?= $this->endSection(); ?>