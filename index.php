<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="style.css" />
  <title>SIRIL COMMUNITY</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top fw-bold" style="background-color: #0b0b0b;">
    <div class="container">
      <a class="navbar-brand" href="/">
        <div class="logo-image">
          <img src="BOOTSTRAP-BOOTCAM/assets/sirilpict.png" class="img-fluid">
        </div>
      </a>
      <a href="" class="navbar-brand">
        <h3><span style="font-style: italic; color: rgb(255, 255, 255)">SIRIL COMMUNITY</span></h3>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="#" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#home" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Division
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#website">Website</a></li>
              <li><a class="dropdown-item" href="#mobile">Mobile</a></li>
              <li><a class="dropdown-item" href="#ui/ux">UI/UX</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div class="icon-item">
      <span>
        <li class="d-none d-lg-block">
          <button type="button" class="bi bi-person fs-4 text-dark bg-warning rounded-circle" data-bs-toggle="modal"
            data-bs-target="#login">
          </button>
        </li>
      </span>
    </div>
  </nav>
  <!-- Showcase -->
  <section class="text-light p-5 p-lg-0 pt-lg-5 text-center"
    style="background-image: linear-gradient(rgb(15, 68, 114), black)">
    <div class="container">
      <div class="d-sm-flex align-items-center justify-content-between">
        <div>
          <h1>
            MARI MENJADI BAGIAN DARI
            <span class="text-primary fst-italic">SIRIL COMMUNITY</span>
          </h1>
          <p class="lead my-4">
            Sebuah wadah perkumpulan mahasiswa sistem UIN Raden Intan Lampung
            yang berfokus pada pembekalan serta pengembangan minat dan bakat
            dalam bidang IT
          </p>
          <button class="btn-primary btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#enrol">
            JOIN NOW!
          </button>
        </div>
        <img class="img-fluid w-50 d-none d-sm-block mb-lg-5" src="BOOTSTRAP-BOOTCAM/assets/sirilpict.png" alt="" />
      </div>
    </div>
  </section>
  <!-- Newsletter -->
  <section class="text-light p-4" style="background-color: black;">
    <div class="container">
      <div class="d-md-flex justify-content-between-align-items-center">
      </div>
    </div>
  </section>
  <!-- Boxes -->
  <section class="p-5" style="background-image: linear-gradient(black, rgb(15, 68, 114))">
    <div class="card-deck">
      <div class="row text-center g-4">
        <div class="col-md">
          <div class="card bg-warning text-dark">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <i class="bi bi-people-fill"></i>
              </div>
              <h3 class="card-title mb-3">Membangun Relasi</h3>
              <p class="card-text">
                Berguna membangun jaringan yang kuat. Melalui interaksi dengan sesama anggota, Anda dapat menemukan
                mentor, dan kesempatan karier yang menarik.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card bg-secondary text-dark">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <i class="bi bi-star-fill"></i>
              </div>
              <h3 class="card-title mb-3">Menambah Pengetahuan</h3>
              <p class="card-text">
                Kegiatan komunitas Melalui berbagai acara, seminar, lokakarya, dan diskusi, Anda akan terus terpapar
                dengan tren terbaru, teknologi terkini, serta berbagai gagasan inovatif.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card bg-warning text-dark">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <i class="bi bi-person-circle"></i>
              </div>
              <h3 class="card-title mb-3">Personal Branding</h3>
              <p class="card-text">
                Personal branding yang kuat dalam konteks organisasi memungkinkan Anda untuk dikenal sebagai seseorang
                yang punya nilai tambah serta dapat diandalkan.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Learn Section -->
  <section id="about">
    <section id="learn" class="p-5 text-light" style="background-color:rgb(15, 68, 114)" ;>
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md">
            <img src="BOOTSTRAP-BOOTCAM/assets/pict4.svg" class="img-fluid" alt="" />
          </div>
          <div class="col-md p-5">
            <h2>ABOUT</h2>
            <p class="lead">
              Siril Community merupakan sebuah bentuk pengimplementasian ide
              dari para mahasiswa sistem informasi UIN Raden Intan Lampung
              yang menginginkan SDM prodi SI menjadi SDM yang unggul, memiliki
              akhlakul karimah serta berdedikasi tinggi dalam bidang IT
            </p>
            <p>
              Siril community di bangun pada tahun 2023 sebagai sebuah
              terobosan prodi sistem informasi.....
            </p>
            <a href="/About" class="btn btn-warning mt-3 bg-warning text-dark">
              <i class="bi bi-chevron-right"></i>Read More
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="website">
      <section id="learn" class="p-5" style="background-color:rgb(15, 68, 114)" ;>
        <div class="container">
          <div class="row align-items-center justify-content-between text-light">
            <div class="col-md p-5">
              <h2>Divisi Website</h2>
              <p class="lead">
                Divisi Website akan mempelajari tentang pembuatan sebuah
                website yang bagus serta apik menggunakan bahasa pemrograman
                seperti HTML,CSS DAN JS
              </p>
              <p>
                Divisi website memiliki dua bagian kelompok terpisah
                didalamnya yaitu Front-End dan Back-End....
              </p>
              <a href="/Web" class="btn btn-warning mt-3 bg-warning text-dark">
                <i class="bi bi-chevron-right"></i>Read More
              </a>
            </div>
            <div class="col-md">
              <img src="BOOTSTRAP-BOOTCAM/assets/pict1 (1).svg" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </section>
    </section>

    <section id="mobile">
      <section id="learn" class="p-5 text-light" style="background-color:rgb(15, 68, 114)" ;>
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-md">
              <img src="BOOTSTRAP-BOOTCAM/assets/mobile.svg" class="img-fluid" alt="" />
            </div>
            <div class="col-md p-5">
              <h2>Divisi Mobile</h2>
              <p class="lead">
                Divisi Mobile berfokus pada pembuatan aplikasi, jauh berbeda
                dengan divisi website nantinya divisi mobile akan
                mengembangkan tampilan antarmuka aplikasi
              </p>
              <p>
                Mobile developer akan berkelut dengan tools Flutter dan.....
              </p>
              <a href="/Mobile" class="btn btn-warning mt-3 bg-warning text-dark">
                <i class="bi bi-chevron-right"></i>Read More
              </a>
            </div>
          </div>
        </div>
      </section>
    </section>

    <section id="ui/ux">
      <section id="learn" class="p-5" style="background-image: linear-gradient(rgb(15, 68, 114), black)">
        <div class="container">
          <div class="row align-items-center justify-content-between text-light">
            <div class="col-md p-5">
              <h2>Divisi UI/UX</h2>
              <p class="lead">
                Divisi UI/UX merupakan salah satu divisi yang
                mengengembangkan keinteraktifan dari suatu web. User
                Interface/User Experience akan mendesain rekayasa antarmuka
                pada software
              </p>

              <p>
                Divisi ini memungkinkan pengembangan salah satu teknologi
                paling canggih saat ini yaitu Ai (.....
              </p>
              <a href="/UI/UX" class="btn btn-warning mt-3 bg-warning text-dark">
                <i class="bi bi-chevron-right"></i>Read More
              </a>
            </div>
            <div class="col-md">
              <img src="BOOTSTRAP-BOOTCAM/assets/uiux.svg" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </section>
    </section>

    <!-- Question Accordin -->
    <section id="questions" class="p-5" style="background-image: linear-gradient( black, rgb(255, 208, 0));">
      <div class="container">
        <h2 class="text-center mb-4 text-white">
          Pertanyaan Yang Paling Sering Ditanyakan
        </h2>
        <div class="accordion accordion-flush" id="questions">
          <!-- Item 1-->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#question-one">
                Kegiatan apa saja yang ada dalam Siril Community?
              </button>
            </h2>
            <div id="question-one" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Kegiatan yang ada dalam komunitas ini adalah pemberian materi
                serta praktek yang nantinta materi-materi mengenai bidang IT
                dapat dibawakan oleh siapa saja tidak memandang dari seberapa
                yang paling menguasai materi tersebut. Serta praktek secara
                langsung dan bersama-sama. Rasio antara pemberian materi dan
                praktek yaitu 40%:60%
              </div>
            </div>
          </div>
          <!-- Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#question-two">
                Apakah ada syarat untuk masuk komunitas ini?
              </button>
            </h2>
            <div id="question-two" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                TIDAK ADA, semua mahasiswa yang ingin belajar serta
                mengembangkan potensi diri di TERIMA dengan baik dalam
                komunitas ini diperbolehkan untuk ikut dalam Siril Community
              </div>
            </div>
          </div>
          <!-- Item 3 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#question-three">
                Berapa kali pertemuan setiap kegiatan komunitas?
              </button>
            </h2>
            <div id="question-three" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Nantinya pertemuan setiap divisi akan berbeda-beda tergantung
                dari keputusan tiap-tiap divisi
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Carousel Image -->
    <div class="ms-auto">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="BOOTSTRAP-BOOTCAM/assets/img1.jpg" class="d-block w-100" alt="coba" />
          </div>
          <div class="carousel-item">
            <img src="BOOTSTRAP-BOOTCAM/assets/img2.jpg" class="d-block w-100" alt="try" />
          </div>
          <div class="carousel-item">
            <img src="BOOTSTRAP-BOOTCAM/assets/img3.jpg" class="d-block w-100" alt="amat" />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>


    <!-- Footer -->
    <section id="contact">
      <footer class="text-center text-lg-start text-light bg-dark">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-lg-3 border-bottom">
          <!-- Left -->
          <div class="me-5 d-none d-lg-block">
            <span>
              <h5> Get connected with us on social networks: </h5>
            </span>
          </div>
          <!-- Left -->

          <!-- Right -->
          <div>
            <div class="container p-3 m-1 pb-0 justify-content-center">
              <!-- Section: Social media -->
              <section class="mb-4">
                <!-- Facebook -->
                <a class="btn text-white btn-floating fs-4 m-3 rounded-circle" style="background-color: #3b5998;"
                  href="#!" role="button"><i class="bi-facebook"></i></a>

                <!-- Twitter -->
                <a class="btn text-white btn-floating fs-4 m-3 rounded-circle" style="background-color: #55acee;"
                  href="https://twitter.com/Siril_Community" role="button"><i class="bi-twitter"></i></a>

                <!-- Discord-->
                <a class="btn text-white btn-floating fs-4 m-3 rounded-circle" style="background-color: #5739dd;"
                  href="#!" role="button"><i class="bi-discord"></i></a>

                <!-- Instagram -->
                <a class="btn text-white btn-floating fs-4 m-3 rounded-circle" style="background-color: #ac2bac;"
                  href="https://instagram.com/siril_community?igshid=NGVhN2U2NjQ0Yg==" role="button"><i
                    class="bi-instagram"></i></a>

                <!-- Youtube -->
                <a class="btn text-white btn-floating fs-4 m-3 rounded-circle" style="background-color: #ca0000;"
                  href="https://www.youtube.com/channel/UCWl2M-rz1ZhShveKvvoPypA" role="button"><i
                    class="bi-youtube"></i></a>
                <!-- Github -->
                <a class="btn text-white btn-floating fs-4 m-3 rounded-circle" style="background-color: #0b0b0b;"
                  href="https://github.com/SirilCommunityUINRIL23" role="button"><i class="bi-github"></i></a>
              </section>
              <!-- Section: Social media -->
            </div>
          </div>
          <!-- Right -->
        </section>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4 text-center">
            <!-- Content -->
            <p>
              <a href="https://www.radenintan.ac.id/">
                <img src="https://www.radenintan.ac.id/wp-content/uploads/sites/10/2022/04/logo.png"
                  height="75px justify-content-center" class="rounded-circle-mb-1" alt="" />
              </a>
            <h5 class="text-uppercase mb-4 pb-1 border-bottom">UIN RADEN INTAN LAMPUNG</h5>
            </p>
            <div class="mt-4 ms-auto">
              <!-- Facebook -->
              <a class="btn text-white btn-floating fs-5 rounded-circle" style="background-color: #3b9841;"
                href="https://www.facebook.com/uinradenintan/" role="button"><i class="bi-facebook"></i></a>
              <!-- Instagram -->
              <a class="btn text-white btn-floating fs-5 rounded-circle" style="background-color: #3b9841;"
                href="https://www.instagram.com/uinradenintan/" role="button"><i class="bi-instagram"></i></a>
              <!-- Twitter -->
              <a class="btn text-white btn-floating fs-5 rounded-circle" style="background-color: #3b9841;"
                href="https://twitter.com/uinradenintan" role="button"><i class="bi-twitter"></i></a>
              <!-- Youtube -->
              <a class="btn text-white btn-floating fs-5 rounded-circle" style="background-color: #3b9841;"
                href="https://www.youtube.com/channel/UC5YknvNnxrx5aV8fYjWNWQQ" role="button"><i
                  class="bi-youtube"></i></a>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="bi-map me-3"></i>
              Jl. Letnan Kolonel H. Endro Suratmin, Sukarame, Kota Bandar Lampung, 35131</p>
            <p>
              <i class="bi-envelope me-3"></i>
              sirilcommunity.uinril@gmail.com
            </p>
            <p><i class="bi-phone me-3"></i> + 62 857 8393 8236</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2023 Copyright
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- login -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="login>Modal title </h5>
            <button type=" button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="lead fw-bold">User Login</p>
            <form action="login.php" method="post">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="enrol" tabindex="-1" aria-labelledby="enrolLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="enrolLabel">Form Pendaftaran</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="koneksi.php" method="post">
            <div class="mb-3">
            <label for="nama">Nama:</label><br>
              <input type="text" id="nama" name="nama"><br>
              </div>
              <div class="mb-3">
              <label for="email">Email:</label><br>
              <input type="text" id="email" name="email"><br>
              </div>
              <div class="mb-3">
              <label for="password">Password:</label><br>
              <input type="password" id="password" name="password"><br>
              </div>
              <div class="mb-3">
              <label for="divisi">Divisi Yang Dipilih:</label><br>
              <select id="divisi" name="divisi">
                <option value="website">Website</option>
                <option value="ui_ux">Ui/Ux</option>
                <option value="mobile">Mobile</option>
              </select><br>
              </div>
              <div class="mb-3">
              <label for="alasan">Alasan:</label><br>
              <textarea id="alasan" name="alasan" rows="4" cols="50"></textarea><br>
              </div>
              <input type="submit" class="btn-primary" value="Submit">
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
</body>

</html>