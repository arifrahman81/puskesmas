<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="">
        <div class="container mt-5 justify-content-center">
            <div class="row">
                <div class="col">
                    <h1>Informasi Puskesmas Anda. Pilih salah satu :</h1>
                    <table class="table mt-4">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Puskesmas</th>
                                <th scope="col">Alamat Puskesmas</th>
                                <th scope="col">Lihat Puskesmas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Contoh data status laporan pasien -->
                            <tr>
                                <th scope="row">Puskesmas Tamangapa</th>
                                <td>JL. Jend Urip Sumoharjo, No. 269, Makasar, Sinrijala, Panakkukang, Makassar City, South Sulawesi 90232</td>
                                <td><a href="#" class="btn btn-warning">Buka</a></td> 
                            </tr>
                            <tr>
                                <th scope="row">Puskesmas B</th>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, error.</td>
                                <td><a href="#" class="btn btn-warning">Buka</a></td> 
                            </tr>
                            <tr>
                                <th scope="row">Puskesmas C</th>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, repellat.</td>
                                <td><a href="#" class="btn btn-warning">Buka</a></td> 
                            </tr>
                            <tr>
                                <th scope="row">Puskesmas D</th>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, consequuntur?</td>
                                <td><a href="#" class="btn btn-warning">Buka</a></td> 
                            </tr>
                            <tr>
                                <th scope="row">Puskesmas E</th>
                                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, perferendis?</td>
                                <td><a href="#" class="btn btn-warning">Buka</a></td> 
                            </tr>
                            <tr>
                                <th scope="row">Puskesmas F</th>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.\</td>
                                <td><a href="#" class="btn btn-warning">Buka</a></td> 
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

<?= $this->endSection(); ?>