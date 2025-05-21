<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Seaworld Ancol</title>
        <link rel="icon" href="https://mms.img.susercontent.com/e252ca544b288b4dc3ddafce5b0fb896" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">


              <a class="navbar-brand" href="#page-top">Sea World</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#loginModal">
                          Login
                        </button>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="bg-gradient-dark">
          <div class="page-header min-vh-100 d-flex align-items-center" style="background-image: url('img/GAMBARUTAMA.jpg'); background-size: cover; background-position: center;">
            <span class="mask bg-gradient-dark opacity-6 position-absolute w-100 h-100"></span>
            <div class="container position-relative z-index-1">
              <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                  <h1 class="text-white text-uppercase mb-0">Sea World Ancol</h1>
                  <div class="divider-custom divider-light d-flex justify-content-center align-items-center my-4">
                    <div class="divider-custom-line bg-white me-3" style="width: 60px; height: 1px;"></div>
                    <div class="divider-custom-icon text-white"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line bg-white ms-3" style="width: 60px; height: 1px;"></div>
                  </div>
                  <p class="lead mb-4 text-white opacity-8"><em>"Discover the secrets of the deep blue sea through immersive exhibits and exciting encounters. SeaWorld Ancol invites you to explore, learn, and fall in love with the beauty of marine life."</em></p>
                </div>
              </div>
            </div>
          </div>
        </header>

        <!-- Login Section -->
<section class="page-section" id="login">
  <!-- Modal Login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content border-0 shadow">
       <div class="modal-header">
         <h5 class="modal-title" id="loginModalLabel">Login</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
       </div>
       <div class="modal-body">
         <form id="loginForm">
           <div class="mb-3">
             <label for="email" class="form-label">Email address</label>
             <input type="email" class="form-control" id="email" placeholder="example@gmail.com" required>
             <div id="emailError" class="text-danger mt-1" style="display: none;">Email harus menggunakan @gmail.com</div>
           </div>
           <div class="mb-3">
             <label for="password" class="form-label">Password</label>
             <input type="password" class="form-control" id="password" placeholder="Masukkan password" required>
             <div id="passwordError" class="text-danger mt-1" style="display: none;">Password tidak boleh ada spasi</div>
           </div>
           <button type="submit" class="btn btn-primary w-100">Login</button>
         </form>
       </div>
     </div>
   </div>
 </div>

 </section>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Wahana Seaworld</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/wahana2.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/wahanasatu.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/wahana3.png" alt="..." />

                        </div>
                    </div>

                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5">
                      <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                          <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                              <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                          </div>
                          <img class="img-fluid" src="img/wahana3.png" alt="..." />
                      </div>
                  </div>

                  <!-- Portfolio Item 5-->
                  <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="img/wahana2.jpg" alt="..." />
                    </div>
                </div>

                <!-- Portfolio Item 6-->
                <div class="col-md-6 col-lg-4 mb-5">
                  <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                      <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                          <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                      </div>
                      <img class="img-fluid" src="img/wahanasatu.jpg" alt="..." />
                  </div>
              </div>

                </div>
            </div>
            <section class="page-section bg-primary text-white mb-0" id="about">
              <div class="container-fluid">
                  <div class="row align-items-center">
                      <!-- Image on the left -->
                      <div class="col-lg-6 p-0">
                          <img class="img-fluid w-100 h-100" src="img/keluarga.png" alt="About Image" style="object-fit: cover;">
                      </div>
                      <!-- Text on the right -->
                      <div class="col-lg-6 d-flex flex-column justify-content-center">
                          <div class="text-center px-4">
                              <h2 class="page-section-heading text-uppercase text-white">About</h2>
                              <div class="divider-custom divider-light">
                                  <div class="divider-custom-line"></div>
                                  <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                  <div class="divider-custom-line"></div>
                              </div>
                              <p class="lead">Sea World Ancol merupakan sebuah kawasan yang lengkap untuk memberikan hiburan dan pendidikan khususnya dunia laut. Dalam operasionalnya, Sea World Ancol mengemban 3 misi besar yaitu: Pendidikan, Konservasi dan Hiburan. Melalui misi ini Sea World Ancol menempatkan diri sebagai tempat hiburan berkualitas. Dalam usaha memperkenalkan kehidupan biota yang hidup di alam.SeaWorld Ancol memiliki sekitar 7.300 ekor biota air tawar yang terdiri dari 48 Jenis ikan, 1 jenis reptil sampai biota perairan laut yang terdiri dari 11.500 ekor biota yang terdiri dari 138 jenis ikan dan avertebrata serta 3 jenis reptil. Biota-biota tersebut ditampilkan dalam 28 display yang terbagi atas 9 akuarium perairan tawar dan 19 akuarium serta 4 kolam terbuka.
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </section>



        <!-- Footer-->
        <footer class="footer text-center">
          <section class="pt-4 pb-6" id="count-stats">
            <div class="container">

              </div>
              <div class="row justify-content-center text-center">
                <div class="col-md-3">
                  <h1 class="text-gradient text-info" id="state1" countTo="5234">1000+</h1>
                  <h5>Visitors</h5>
                  <p>1000+ visitors in one day especially
                    <br
                    on weekends</p>
                </div>
                <div class="col-md-3">
                  <h1 class="text-gradient text-info"><span id="state2" countTo="3400">9/10</span></h1>
                  <h5>People Approved</h5>
                  <p>According to reports, 9 out of 10 people agree that Seaworld is the best family entertainment.</p>
                </div>
                <div class="col-md-3">
                  <h1 class="text-gradient text-info"><span id="state3" countTo="24">700</span>+</h1>
                  <h5>Species Aquamarine</h5>
                  <p>Actively engage team members that finishes on time</p>
                </div>
              </div>
            </div>
          </section>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy;kayla nathania azzahra 5026231151</small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Shark Aquarium</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="img/wahana2.jpg"" alt="Wahana" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">   Di Shark Aquarium terdapat berbagai jenis ikan hiu diantaranya adalah hiu sirip hitam, hiu pari barongsai, hiu kepala martil dan masih banyak yang lainya.
                                      Di sini juga terdapat pertunjukkan live feeding shark atau pemberian makan hiu secara langsung setiap hari jam 14:30 WIB
                                      .</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Antasena Tunnel</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="img/wahanasatu.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">  Kalian bisa merasakan dikelilingi oleh biota laut pada Main Aquarium Antasena Tunnel, yaitu akuarium raksasa yang menampung hingga lima juta liter air laut serta ratusan jenis biota yang ada didalamnya.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Touch Pool</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="img/wahana3.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Di Touchpool, Anda memiliki kesempatan untuk merasakan sentuhan langsung dengan berbagai jenis binatang laut, seperti ubur-ubur, kerang, dan bintang laut. Ini adalah pengalaman yang tidak hanya menyenangkan, tetapi juga edukatif untuk semua anggota keluarga..</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
