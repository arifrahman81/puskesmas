<?= $this->extend('layout/Puskesmas/templates') ?>

<?= $this->Section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-7">
            <form action="<?= base_url('Puskesmas/proses_tambah_laporan_puskesmas') ?> " method="POST"
                enctype="multipart/form-data">
                <div class="form-group">
                    <label for="Tahun" class="form-label">Tahun</label>
                    <input type="text" class="form-control" id="Tahun" name="tahun">
                </div>

                <div class="form-group">
                    <label for="Bulan" class="form-label">Bulan</label>
                    <input type="text" class="form-control" id="Bulan" name="bulan">
                </div>
                <div class="form-group">
                    <label for="Provinsi" class="form-label">Provinsi</label>
                    <input type="text" class="form-control" id="Provinsi" name="provinsi">
                </div>
                <div class="form-group">
                    <label for="Kota" class="form-label">Kota</label>
                    <input type="text" class="form-control" id="Kota" name="kota">
                </div>
                <div class="form-group">
                    <label for="Puskesmas" class="form-label">Puskesmas</label>
                    <input type="text" class="form-control" id="Puskesmas" name="puskesmas">
                </div>
                <div class="form-group">
                    <label for="NIK" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="NIK" name="nik">
                </div>
                <div class="form-group">
                    <label for="Nama Penderita" class="form-label">Nama Penderita</label>
                    <input type="text" class="form-control" id="Nama Penderita" name="nama_penderita">
                </div>
                <div class="form-group">
                    <label for="Umur" class="form-label">Umur</label>
                    <input type="text" class="form-control" id="Umur" name="umur">
                </div>
                <div class="form-group">
                    <label for="Jenis Kelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="Jenis Kelamin" name="jenis_kelamin">
                </div>
                <div class="form-group">
                    <label for="Nama Wali" class="form-label">Nama Wali</label>
                    <input type="text" class="form-control" id="Nama Wali" name="nama_wali">
                </div>
                <div class="form-group">
                    <label for="Alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="Alamat" name="alamat">
                </div>
                <div class="form-group">
                    <label for="Tanggal Kunjungan" class="form-label">Tanggal Kunjungan</label>
                    <input type="text" class="form-control" id="Tanggal Kunjungan" name="tgl_kunjungan">
                </div>
                <div class="form-group">
                    <label for="Diagnosa" class="form-label">Diagnosa</label>
                    <input type="text" class="form-control" id="Diagnosa" name="diagnosa">
                </div>
                <div class="form-group">
                    <label for="Klinis +" class="form-label">Klinis +</label>
                    <input type="text" class="form-control" id="Klinis +" name="klinis">
                </div>
                <div class="form-group">
                    <label for="Laboratorium +" class="form-label">Laboratorium +</label>
                    <input type="text" class="form-control" id="Laboratorium +" name="laboratorium">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>