
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MyAnime</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../asset/NiceAdmin/assets/img/favicon.png" rel="icon">
  <link href="../asset/NiceAdmin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../asset/NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../asset/NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../asset/NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../asset/NiceAdmin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../asset/NiceAdmin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../asset/NiceAdmin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../asset/NiceAdmin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../asset/NiceAdmin/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- <img src="../asset/NiceAdmin/assets/img/logo.png" alt=""> -->
        <span class="d-none d-lg-block">MyAnime</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Cari Anime / Manga" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li><!-- End Home Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Anime</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="anime-list.html">
              <i class="bi bi-circle"></i><span>Anime List</span>
            </a>
          </li>
          <li>
            <a href="anime-tamat.html">
              <i class="bi bi-circle"></i><span>Tamat</span>
            </a>
          </li>
          <li>
            <a href="anime-ongoing.html">
              <i class="bi bi-circle"></i><span>On-Going</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Manga</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="manga-list.html">
              <i class="bi bi-circle"></i><span>Manga List</span>
            </a>
          </li>
          <li>
            <a href="manga-tamat.html">
              <i class="bi bi-circle"></i><span>Tamat</span>
            </a>
          </li>
          <li>
            <a href="manga-ongoing.html">
              <i class="bi bi-circle"></i><span>On-Going</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Character</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="character-male.html">
              <i class="bi bi-circle"></i><span>Male</span>
            </a>
          </li>
          <li>
            <a href="character-female.html">
              <i class="bi bi-circle"></i><span>Female</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

    

      

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="genre.html">
          <i class="bi bi-card-list"></i>
          <span>Pilih Genre</span>
        </a>
      </li><!-- End Register Page Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="rekomendasi-anime.html">
          <i class="bi bi-question-circle"></i>
          <span>Rekomendasi Anime</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="rekomendasi-manga.html">
          <i class="bi bi-envelope"></i>
          <span>Rekomendasi Manga</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="tentang.html">
          <i class="bi bi-person"></i>
          <span>Tentang</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="saran.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Saran</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Home</h1>
      <h1 style="margin-left: 30px; margin-top: 30px;">Anime</h1>
    </div><!-- End Page Title -->

             <!-- Default Card -->
             <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Rekomendasi Anime</h5>
                
                    <!-- Default Tabs -->
              <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100 active" id="anime-action" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="anime-action" aria-selected="true">Action</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="anime-comedy" data-bs-toggle="tab" data-bs-target="#profile-justified" type="button" role="tab" aria-controls="anime-comedy" aria-selected="false">Comedy</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="anime-mystery" data-bs-toggle="tab" data-bs-target="#contact-justified" type="button" role="tab" aria-controls="anime-mystery" aria-selected="false">Mystery</button>
                </li>
              </ul>

              <div class="tab-content pt-2" id="myTabjustifiedContent">
                <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="anime-action">
                  
              <div class="row" style="margin: 10px; margin-top: 30px ;">

                <div class="col-md-3">
                  <div class="card text-start shadow-sm " >
                    <img class="card-img-top" src="../foto/ref2.jpg" alt="Title">
                    <div class="card-body">
                      <h4 class="card-title" style="text-align: center;">Judul-anime</h4>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="card text-start shadow-sm ">
                    <img class="card-img-top" src="../foto/ref2.jpg" alt="Title">
                    <div class="card-body">
                      <h4 class="card-title" style="text-align: center;">Judul-anime</h4>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="card text-start shadow-sm ">
                    <img class="card-img-top" src="../foto/ref2.jpg" alt="Title">
                    <div class="card-body">
                      <h4 class="card-title" style="text-align: center;">Judul-anime</h4>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="card text-start shadow-sm ">
                    <img class="card-img-top" src="../foto/ref2.jpg" alt="Title">
                    <div class="card-body">
                      <h4 class="card-title" style="text-align: center;">Judul-anime</h4>
                    </div>
                  </div>
                </div>
                
              </div>

                </div>

              <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="anime-comedy">
                  
                <div class="row" style="margin: 10px; margin-top: 30px ;">

                  <div class="col-md-3">
                    <div class="card text-start shadow-sm ">
                      <img class="card-img-top" src="../foto/ref2.jpg" alt="Title">
                      <div class="card-body">
                        <h4 class="card-title" style="text-align: center;">Judul-anime</h4>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="card text-start shadow-sm ">
                      <img class="card-img-top" src="../foto/ref2.jpg" alt="Title">
                      <div class="card-body">
                        <h4 class="card-title" style="text-align: center;">Judul-anime</h4>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="card text-start shadow-sm ">
                      <img class="card-img-top" src="../foto/ref2.jpg" alt="Title">
                      <div class="card-body">
                        <h4 class="card-title" style="text-align: center;">Judul-anime</h4>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="card text-start shadow-sm ">
                      <img class="card-img-top" src="../foto/ref2.jpg" alt="Title">
                      <div class="card-body">
                        <h4 class="card-title" style="text-align: center;">Judul-anime</h4>
                      </div>
                    </div>
                  </div>
                  </div>

                </div>

              <div v class="tab-pane fade" id="contact-justified" role="tabpanel" aria-labelledby="anime-mystery">
                 
                <div class="row" style="margin: 10px; margin-top: 30px ;">

                  <div class="col-md-3">
                    <div class="card text-start shadow-sm ">
                      <img class="card-img-top" src="../foto/ref2.jpg" alt="Title">
                      <div class="card-body">
                        <h4 class="card-title" style="text-align: center;">Judul-anime</h4>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="card text-start shadow-sm ">
                      <img class="card-img-top" src="../foto/ref2.jpg" alt="Title">
                      <div class="card-body">
                        <h4 class="card-title" style="text-align: center;">Judul-anime</h4>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="card text-start shadow-sm ">
                      <img class="card-img-top" src="../foto/ref2.jpg" alt="Title">
                      <div class="card-body">
                        <h4 class="card-title" style="text-align: center;">Judul-anime</h4>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="card text-start shadow-sm ">
                      <img class="card-img-top" src="../foto/ref2.jpg" alt="Title">
                      <div class="card-body">
                        <h4 class="card-title" style="text-align: center;">Judul-anime</h4>
                      </div>
                    </div>
                  </div>
                  </div>

                </div>
    
              </div>
              </div>

              </div>
            </div>

               <!-- End Default Card -->
             <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Anime On-Going</h5>
                  Ut in ea error laudantium quas omnis officia. Sit sed praesentium voluptas. Corrupti inventore consequatur nisi necessitatibus modi consequuntur soluta id. Enim autem est esse natus assumenda. Non sunt dignissimos officiis expedita. Consequatur sint repellendus voluptas.
                  Quidem sit est nulla ullam. Suscipit debitis ullam iusto dolorem animi dolorem numquam. Enim fuga ipsum dolor nulla quia ut.
                  Rerum dolor voluptatem et deleniti libero totam numquam nobis distinctio. Sit sint aut. Consequatur rerum in.
                </div>
              </div><!-- End Default Card -->

              <!-- title manga -->
              <div class="pagetitle">
              <h1 style="margin-left: 30px; margin-top: 50px;">Manga</h1>
              </div>
              
             <!-- Default Card -->
             <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Rekomendasi Manga</h5>
                  Ut in ea error laudantium quas omnis officia. Sit sed praesentium voluptas. Corrupti inventore consequatur nisi necessitatibus modi consequuntur soluta id. Enim autem est esse natus assumenda. Non sunt dignissimos officiis expedita. Consequatur sint repellendus voluptas.
                  Quidem sit est nulla ullam. Suscipit debitis ullam iusto dolorem animi dolorem numquam. Enim fuga ipsum dolor nulla quia ut.
                  Rerum dolor voluptatem et deleniti libero totam numquam nobis distinctio. Sit sint aut. Consequatur rerum in.
                </div>
              </div><!-- End Default Card -->

              <!-- End Default Card -->
             <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Manga Populer</h5>
                  Ut in ea error laudantium quas omnis officia. Sit sed praesentium voluptas. Corrupti inventore consequatur nisi necessitatibus modi consequuntur soluta id. Enim autem est esse natus assumenda. Non sunt dignissimos officiis expedita. Consequatur sint repellendus voluptas.
                  Quidem sit est nulla ullam. Suscipit debitis ullam iusto dolorem animi dolorem numquam. Enim fuga ipsum dolor nulla quia ut.
                  Rerum dolor voluptatem et deleniti libero totam numquam nobis distinctio. Sit sint aut. Consequatur rerum in.
                </div>
              </div><!-- End Default Card -->

              <div class="pagetitle">
              <h1 style="margin-left: 30px; margin-top: 50px;">Genre</h1>
              </div>
              
              <div class="row" style="margin: 10px;">
                <div class="col-md-2">
                  <div class="card text-start">
                    <img class="card-img-top" src="../foto/ref2.jpg" alt="Title">
                    <div class="card-body">
                      <h4 class="card-title" style="text-align: center;">Action</h4>
                      <button class="btn btn-primary" style="width: 100%;">Baca</button>
                    </div>
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="card text-start">
                    <img class="card-img-top" src="../foto/ref2.jpg" alt="Title">
                    <div class="card-body">
                      <h4 class="card-title" style="text-align: center;">Action</h4>
                      <button class="btn btn-primary" style="width: 100%;">Baca</button>
                    </div>
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="card text-start">
                    <img class="card-img-top" src="../foto/ref2.jpg" alt="Title">
                    <div class="card-body">
                      <h4 class="card-title" style="text-align: center;">Action</h4>
                      <button class="btn btn-primary" style="width: 100%;">Baca</button>
                    </div>
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="card text-start">
                    <img class="card-img-top" src="../foto/ref2.jpg" alt="Title">
                    <div class="card-body">
                      <h4 class="card-title" style="text-align: center;">Action</h4>
                      <button class="btn btn-primary" style="width: 100%;">Baca</button>
                    </div>
                  </div>
                </div>
                
                <div class="col-md-2">
                  <div class="card text-start">
                    <img class="card-img-top" src="../foto/ref2.jpg" alt="Title">
                    <div class="card-body">
                      <h4 class="card-title" style="text-align: center;">Action</h4>
                      <button class="btn btn-primary" style="width: 100%;">Baca</button>
                    </div>
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="card text-start">
                    <img class="card-img-top" src="../foto/ref2.jpg" alt="Title">
                    <div class="card-body">
                      <h4 class="card-title" style="text-align: center;">Action</h4>
                      <button class="btn btn-primary" style="width: 100%;">Baca</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Cari genre -->
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-2">
                      <h5 class="card-title">Cari Genre :</h5>
                    </div>
                    <div class="col-2">
                    <select class="form-select" id="validationDefault1" style="margin-top: 10px;" required>
                    <option selected disabled value="">Anime</option>
                    <option>Manga</option>
                  </select>
                    </div>
                  </div>


                <div class="row" style="margin-left:40px; margin-right: 40px;">
                
                <div class="col-md-3">
                  <label for="validationDefault1" class="form-label">State</label>
                  <select class="form-select" id="validationDefault1" required>
                    <option selected disabled value="">Genre 1</option>
                    <option>...</option>
                  </select>
                </div>

                <div class="col-md-3">
                  <label for="validationDefault2" class="form-label">State</label>
                  <select class="form-select" id="validationDefault2" required>
                    <option selected disabled value="">Genre 2</option>
                    <option>...</option>
                  </select>
                </div>

                <div class="col-md-3">
                  <label for="validationDefault3" class="form-label">State</label>
                  <select class="form-select" id="validationDefault3" required>
                    <option selected disabled value="">Status</option>
                    <option>Tamat</option>
                    <option>On-Going</option>
                  </select>
                </div>

                <div class="col-md-3">
                  <button class="btn btn-primary" style="margin-top: 32px; width: 100%; ">Cari</button>
                </div>

                </div>
                  
                </div>
              </div>

              <div class="pagetitle"style="margin-left: 30px; margin-top: 30px;">
                <h1>History</h1>
              </div>

              <!-- End Default Card -->
             <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Anime</h5>
                  Ut in ea error laudantium quas omnis officia. Sit sed praesentium voluptas. Corrupti inventore consequatur nisi necessitatibus modi consequuntur soluta id. Enim autem est esse natus assumenda. Non sunt dignissimos officiis expedita. Consequatur sint repellendus voluptas.
                  Quidem sit est nulla ullam. Suscipit debitis ullam iusto dolorem animi dolorem numquam. Enim fuga ipsum dolor nulla quia ut.
                  Rerum dolor voluptatem et deleniti libero totam numquam nobis distinctio. Sit sint aut. Consequatur rerum in.
                </div>
              </div><!-- End Default Card -->

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Manga</h5>
                  Ut in ea error laudantium quas omnis officia. Sit sed praesentium voluptas. Corrupti inventore consequatur nisi necessitatibus modi consequuntur soluta id. Enim autem est esse natus assumenda. Non sunt dignissimos officiis expedita. Consequatur sint repellendus voluptas.
                  Quidem sit est nulla ullam. Suscipit debitis ullam iusto dolorem animi dolorem numquam. Enim fuga ipsum dolor nulla quia ut.
                  Rerum dolor voluptatem et deleniti libero totam numquam nobis distinctio. Sit sint aut. Consequatur rerum in.
                </div>
              </div><!-- End Default Card -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../asset/NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../asset/NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../asset/NiceAdmin/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../asset/NiceAdmin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="../asset/NiceAdmin/assets/vendor/quill/quill.min.js"></script>
  <script src="../asset/NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../asset/NiceAdmin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../asset/NiceAdmin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../asset/NiceAdmin/assets/js/main.js"></script>

</body>

</html>