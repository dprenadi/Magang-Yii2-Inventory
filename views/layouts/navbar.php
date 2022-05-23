<?php
use yii\helpers\Html;

?>

<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="/"><span>Inventory</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <!-- <li><a class="nav-link scrollto" href="#about">About Us</a></li> -->
          <li><a class="nav-link scrollto" href="#services">Data</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><?= Html::a('Data Pengguna', ['/data-pengguna/index'], ['class' => 'nav-link scrollto']) ?></li>
          <li class="dropdown"><a href="#"><span>Data</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <!-- Aktivitas-Pengguna -->
              <li><?= Html::a('Data Pengguna', ['/data-pengguna/index']) ?></li>
              <!-- Data-Pengguna-Detail -->
              <li><?= Html::a('Data Jabatan', ['/data-jabatan/index']) ?></li>
              <li><?= Html::a('Departemen', ['/departemen/index']) ?></li>
              <li><?= Html::a('Pegawai', ['/pegawai/index']) ?></li>
              <li><?= Html::a('Data Region', ['/data-region/index']) ?></li>
              <li><?= Html::a('Data Unit', ['/data-unit/index']) ?></li>
            </ul>
          </li>
          <li>
              <?= Html::a('Logout', ['site/logout'], ['data-method' => 'post', 'class' => 'getstarted scrollto']) ?>
          </li>
          <!-- <li><a class="getstarted scrollto" href="#about">Login</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->