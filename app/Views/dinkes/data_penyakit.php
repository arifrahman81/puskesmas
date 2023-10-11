<?= $this->extend('layout/Dinkes/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Data Penyakit Page</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Penyakit</th>
                            <th>Kota</th>
                            <th>Puskesmas</th>
                            <th>Jumlah</th>
                            <th>Tahun</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TBC</td>
                            <td>JL. Jend Urip Sumoharjo, No. 269, Makasar, Sinrijala, Panakkukang, Makassar City, South
                                Sulawesi 90232</td>
                            <td>Puskesmas Tamangapa</td>
                            <td>
                                209
                            </td>
                            <td>2022</td>
                            <td>
                                <a href="#" class="btn btn-primary">Buka</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Cacar</td>
                            <td>JL. Jend Urip Sumoharjo, No. 269, Makasar, Sinrijala, Panakkukang, Makassar City, South
                                Sulawesi 90232</td>
                            <td>Puskesmas Tamangapa</td>
                            <td>
                                209
                            </td>
                            <td>2022</td>
                            <td>
                                <a href="#" class="btn btn-primary">Buka</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- <form>
        <div class="mb-3 col-lg-5">
            <select class="form-select" aria-label="Default select example">
                <option selected>Kota</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="mb-3 col-lg-5">
            <select class="form-select" aria-label="Default select example">
                <option selected>Penyakit</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="mb-3 col-lg-5">
            <select class="form-select" aria-label="Default select example">
                <option selected>Puskesmas</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="mb-3 col-lg-5">
            <input type="date" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> -->

</div>

<?= $this->endSection(); ?>