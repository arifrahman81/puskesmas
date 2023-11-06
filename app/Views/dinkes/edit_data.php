<?= $this->extend('layout/Dinkes/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Edit Data User</h1>
    <form action="<?= base_url('Dinkes/updateData/' . $data['id']) ?> " method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" name="name" value="<?= $data['name'] ?> ">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" value="<?= $data['username'] ?> ">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="passwordInput">
        </div>
        <button class="btn btn-outline-secondary" type="button" id="showPasswordButton" onclick="togglePassword()">Tampilkan Password</button>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-select" name="role" id="role">
                <?php if ($data['role'] == 'puskes') : ?>
                    <option value="puskes">Puskesmas</option>
                <?php elseif ($data['role'] == 'faskes') : ?>
                    <option value="faskes">Fasilitas Kesehatan</option>
                <?php endif ?>
                <option value="puskes">Puskesmas</option>
                <option value="faskes">Fasilitas Kesehatan</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?= $this->endSection(); ?>