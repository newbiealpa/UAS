<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Web Siril</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top fw-bold" style="background-color:black;">
        <div class="container">
            <a class="navbar-brand" href="/">
                <div class="logo-image">
                    <img src="../BOOTSTRAP-BOOTCAM/assets/sirilpict.png" class="img-fluid">
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
                        <a href="/index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/About" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/index.php" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Division
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/Web">Website</a></li>
                            <li><a class="dropdown-item" href="/Mobile">Mobile</a></li>
                            <li><a class="dropdown-item" href="/UI/UX/index.php">UI/UX</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header - set the background image for the header in the line below-->
    <header class="py-5 bg-image-full" style="background-image: linear-gradient(rgb(0, 38, 255), black)">
        <div class="text-center my-5">
            <img class="img-fluid rounded-circle mb-4 mt-5 w-25"
                src="https://cdn-icons-png.flaticon.com/128/3437/3437364.png" alt="..." />
            <h1>
                <span class="text-light">DIVISI MOBILE SIRIL COMMUNITY</span>
            </h1>
            <h6 class="text-white-50 mb-0">Shaping Tomorrow's Tech: Innovate, Code, and Connect!</h6>
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <p class="lead text-light">
                            Divisi ini bertujuan untuk menggali potensi anggota dalam menciptakan solusi teknologi yang
                            berbasis aplikasi mobile, yang bermanfaat bagi anggota komunitas maupun masyarakat umum.

                            Program kinerja di divisi Mobile Apps meliputi pengembangan aplikasi yang beragam, mulai
                            dari aplikasi pendidikan, utilitas, hingga aplikasi inovatif yang dapat menyelesaikan
                            masalah sehari-hari. Melalui kolaborasi tim, anggota divisi ini terlibat dalam tahap desain,
                            pengembangan, hingga peluncuran aplikasi yang mengedepankan keunggulan fungsionalitas dan
                            tampilan.

                            Selain itu, divisi ini seringkali mengadakan workshop, seminar, dan kompetisi yang berfokus
                            pada pengembangan aplikasi mobile. Acara-acara ini dirancang untuk memperluas pengetahuan
                            dan keterampilan teknis anggota, memperkenalkan teknologi terkini, serta memfasilitasi
                            berbagi pengalaman dan ide-ide inovatif di bidang aplikasi mobile.

                            Kegiatan menarik dalam divisi ini mencakup pengembangan prototipe, hackathons, sesi
                            mentoring oleh para ahli dalam industri aplikasi mobile, dan juga eksplorasi teknologi
                            terkini seperti kecerdasan buatan (AI), keamanan aplikasi, atau pengembangan aplikasi
                            berbasis Augmented Reality (AR) dan Virtual Reality (VR).
                        </p>
                        <div class="row justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="instructors" class="p-5 bg-primary" style="background-image: linear-gradient( black, rgb(0, 38, 255))">
        <div class="container">
            <h2 class="text-center text-light">Penanggung Jawab</h2>
            <p></p>
            <p class="text-center text-light mb-5 text-center">
                Penanggung jawab siril merupakan mahasiswa sistem informasi yang
                memiliki kemampuan dan keunggulan di bidang masing-masing
            </p>
            <div class="row g-4 justify-content-center">

                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="../BOOTSTRAP-BOOTCAM/assets/pj1.png" height="150px" class="rounded-circle-mb-3"
                                alt="" />
                            <h3 class="card-title mb-3"></h3>
                            <p class="card-text fw-bold">
                                DAVID RIYAN KURNIAWAN AS PENANGGUNG JAWAB DIVISI MOBILE
                            </p>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


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
                            <a class="btn text-white btn-floating fs-4 m-3 rounded-circle"
                                style="background-color: #3b5998;" href="#!" role="button"><i
                                    class="bi-facebook"></i></a>

                            <!-- Twitter -->
                            <a class="btn text-white btn-floating fs-4 m-3 rounded-circle"
                                style="background-color: #55acee;" href="https://twitter.com/Siril_Community"
                                role="button"><i class="bi-twitter"></i></a>

                            <!-- Discord-->
                            <a class="btn text-white btn-floating fs-4 m-3 rounded-circle"
                                style="background-color: #5739dd;" href="#!" role="button"><i
                                    class="bi-discord"></i></a>

                            <!-- Instagram -->
                            <a class="btn text-white btn-floating fs-4 m-3 rounded-circle"
                                style="background-color: #ac2bac;"
                                href="https://instagram.com/siril_community?igshid=NGVhN2U2NjQ0Yg==" role="button"><i
                                    class="bi-instagram"></i></a>

                            <!-- Youtube -->
                            <a class="btn text-white btn-floating fs-4 m-3 rounded-circle"
                                style="background-color: #ca0000;"
                                href="https://www.youtube.com/channel/UCWl2M-rz1ZhShveKvvoPypA" role="button"><i
                                    class="bi-youtube"></i></a>
                            <!-- Github -->
                            <a class="btn text-white btn-floating fs-4 m-3 rounded-circle"
                                style="background-color: #0b0b0b;" href="https://github.com/SirilCommunityUINRIL23"
                                role="button"><i class="bi-github"></i></a>
                        </section>
                        <!-- Section: Social media -->
                    </div>
                </div>
                <!-- Right -->
            </section>
    </section>
    <!-- Section: Social media -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2023 Copyright
    </div>
    <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>