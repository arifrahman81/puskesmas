<?= $this->extend('layout/Dinkes/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
    <?php
    $userData = session()->get('userData');

    if ($userData) {
        echo '<h1>Selamat datang, ' . $userData['name'] . '!</h1>';
        echo '<p>Peran: ' . $userData['role'] . '</p>';
    } else {
        echo '<p>Sesi pengguna tidak tersedia. Silakan masuk terlebih dahulu.</p>';
    }

    ?>


</div>

<?= $this->endSection(); ?>