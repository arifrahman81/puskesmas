<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>

<body>
    <h2>Register</h2>

    <?php if (session()->getFlashdata('success')) : ?>
        <div><?= session()->getFlashdata('success'); ?></div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')) : ?>
        <div><?= session()->getFlashdata('error'); ?></div>
    <?php endif; ?>

    <form action="<?= base_url('auth/process_register'); ?>" method="post">
        <label for="name">name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="role">Role:</label>
        <select id="role" name="role">
            <option value="dinkes">Dinkes</option>
            <option value="puskes">Puskes</option>
            <option value="faskes">Faskes</option>
        </select><br><br>

        <button type="submit">Register</button>
    </form>
</body>

</html>