<?php
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Inventory';
?>
<div class="site-index">

    <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid">
      <div class="row gy-4">
        <!-- <img src="assets/img/hpi.png" class="card-img-top" alt="hpi" style="width: 250px; height: 250px"> -->
        <div class="col-lg text-center">
          <!-- <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"> -->
          <h1>Inventory & Peralatan<br> Haleyora Powerindo</h1>
          <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quidem fugit tempore magni unde voluptate porro quam. Alias iste ratione nam voluptates. Earum excepturi, quos molestias dicta eius quae provident.</h2>
        </div>
        <!-- <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/unas.jpg" class="img-fluid animated" alt="">
        </div> -->
      </div>
    </div>

  </section><!-- End Hero -->
    
    <main id="main">
    <!-- ======= About Section ======= -->
    <!-- <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="assets/img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Voluptatem dignissimos provident quasi</h3>
            <p data-aos="fade-up" data-aos-delay="100">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
            </p>
            <div class="row">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
                <h4>Corporis voluptates sit</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-cube-alt"></i>
                <h4>Ullamco laboris nisi</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h2></h2> -->
          <p>Informasi Data Barang</p>
        </div>

        <div class="row justify-content-center">

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box" style="width: 18rem;">
              <img src="https://source.unsplash.com/200x200?code" class="card-img-top" alt="code">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title text-center mt-4">
              <?= Html::a('Inventaris Barang', ['/inventbarang/index'], ['class' => 'btn btn-outline-info']) ?>
              </h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box" style="width: 18rem;">
              <img src="https://source.unsplash.com/200x200?code" class="card-img-top" alt="code">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title text-center mt-4">
              <?= Html::a('Jenis Barang', ['/jenisbarang/index'], ['class' => 'btn btn-outline-info']) ?>
              </h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box" style="width: 18rem;">
              <img src="https://source.unsplash.com/200x200?code" class="card-img-top" alt="code">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title text-center mt-4">
              <?= Html::a('Kategori', ['/kategori/index'], ['class' => 'btn btn-outline-info']) ?>
              </h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box" style="width: 18rem;">
              <img src="https://source.unsplash.com/200x200?code" class="card-img-top" alt="code">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title text-center mt-4">
              <?= Html::a('Lokasi', ['/lokasi/index'], ['class' => 'btn btn-outline-info']) ?>
              </h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p> -->
            </div>
          </div>

        </div>

        <div class="section-title py-5">
          <!-- <h2></h2> -->
          <p>Informasi Data Pengajuan & Peminjaman Barang</p>
        </div>

        <div class="row justify-content-center">

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box" style="width: 18rem;">
              <img src="https://source.unsplash.com/200x200?code" class="card-img-top" alt="code">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title text-center mt-4">
              <?= Html::a('Peminjaman', ['/peminjaman/index'], ['class' => 'btn btn-outline-info']) ?>
              <?= Html::a('Peminjaman Item', ['/peminjaman-item/index'], ['class' => 'btn btn-outline-info mt-3']) ?>
              </h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box" style="width: 18rem;">
              <img src="https://source.unsplash.com/200x200?code" class="card-img-top" alt="code">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title text-center mt-4">
              <?= Html::a('Pengadaan', ['/pengadaan/index'], ['class' => 'btn btn-outline-info']) ?>
              <?= Html::a('Pengadaan Item', ['/pengadaan-item/index'], ['class' => 'btn btn-outline-info mt-3']) ?>
              </h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box" style="width: 18rem;">
              <img src="https://source.unsplash.com/200x200?code" class="card-img-top" alt="code">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title text-center mt-4">
              <?= Html::a('Pengajuan', ['/pengajuan/index'], ['class' => 'btn btn-outline-info']) ?>
              <?= Html::a('Pengajuan Detail', ['/pengajuandetail/index'], ['class' => 'btn btn-outline-info mt-3']) ?>
              </h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box" style="width: 18rem;">
              <img src="https://source.unsplash.com/200x200?code" class="card-img-top" alt="code">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title text-center mt-4">
              <?= Html::a('PO', ['/po/index'], ['class' => 'btn btn-outline-info']) ?>
              <?= Html::a('P.O Detail', ['/podetail/index'], ['class' => 'btn btn-outline-info']) ?>
              </h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p> -->
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
          <p>Contact us the get started</p>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location :</h4>
                <p>Haleyora Powerindo Pusat, Jl. Kyai Tapa No.216, RT.5/RW.9, Tomang, Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11440</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email :</h4>
                <p>info@hapindo.co.id</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call :</h4>
                <p>(021) 5640590</p>
              </div>

              <iframe src="https://maps.google.com/maps?q=Haleyora%20Powerindo%20Pusat,%20Jl.%20Kyai%20Tapa%20No.216,%20RT.5/RW.9,%20Tomang,%20Kec.%20Grogol%20petamburan,%20Kota%20Jakarta%20Barat,%20Daerah%20Khusus%20Ibukota%20Jakarta%2011440&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>

            </div>

          </div>

          <!-- <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div> -->

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

    <!-- <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div> -->
</div>
