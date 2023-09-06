<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin</title>
  <link rel="icon" type="image/x-icon" href="/assets/img/logo2.png">
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap'>

<!-- Template Stylesheet -->
<link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet" />

</head>

<body>
<!-- partial:index.partial.html -->
<nav class="sidebar close">
  <header>
    <div class="image-text">
      <span class="image">
        <img src="https://drive.google.com/uc?export=view&id=1ETZYgPpWbbBtpJnhi42_IR3vOwSOpR4z" alt="">
      </span>

      <div class="text logo-text">
        <span class="name">Arif Rahman</span>
        <span class="profession">Administrator</span>
      </div>
    </div>

    <i class='bx bx-chevron-right toggle'></i>
  </header>

  <div class="menu-bar">
    <div class="menu">

      <li class="search-box">
        <i class='bx bx-search icon'></i>
        <input type="text" placeholder="Search...">
      </li>

      <ul class="menu-links">
        <li class="nav-link">
          <a href="#">
            <i class='bx bx-home-alt icon'></i>
            <span class="text nav-text">Dashboard</span>
          </a>
        </li>

        <li class="nav-link">
          <a href="#">
            <i class='bx bx-bar-chart-alt-2 icon'></i>
            <span class="text nav-text">Revenue</span>
          </a>
        </li>

        <li class="nav-link">
          <a href="#">
            <i class='bx bx-bell icon'></i>
            <span class="text nav-text">Notifications</span>
          </a>
        </li>

        <li class="nav-link">
          <a href="#">
            <i class='bx bx-pie-chart-alt icon'></i>
            <span class="text nav-text">Analytics</span>
          </a>
        </li>

        <li class="nav-link">
          <a href="#">
            <i class='bx bx-heart icon'></i>
            <span class="text nav-text">Likes</span>
          </a>
        </li>

        <li class="nav-link">
          <a href="#">
            <i class='bx bx-wallet icon'></i>
            <span class="text nav-text">Wallets</span>
          </a>
        </li>

      </ul>
    </div>

    <div class="bottom-content">
      <li class="">
        <a href="#">
          <i class='bx bx-log-out icon'></i>
          <span class="text nav-text">Logout</span>
        </a>
      </li>

      <li class="mode">
        <div class="sun-moon">
          <i class='bx bx-moon icon moon'></i>
          <i class='bx bx-sun icon sun'></i>
        </div>
        <span class="mode-text text">Dark mode</span>

        <div class="toggle-switch">
          <span class="switch"></span>
        </div>
      </li>

    </div>
  </div>

</nav>

<section class="home">
  <div class="text">Dashboard Sidebar</div>
</section>

<!-- Template Javascript -->
<script src="<?= base_url('assets/js/admin.js'); ?>"></script>

</body>
</html>
