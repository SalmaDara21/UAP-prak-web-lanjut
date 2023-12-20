<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>SANARA CAFE</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="#" class="nav-item nav-link">Home</a>
                        <a href="<?= base_url('profile') ?>" class="nav-item nav-link">Profile</a>
                        <a href="#" class="nav-item nav-link">About</a>
                        <a href="<?= base_url('testimoni');?>" class="nav-item nav-link">Service</a>
                        <a href="<?= base_url('menu-awal');?>" class="nav-item nav-link active">Menu</a>
                        <a href="<?= base_url('logout');?>" class="nav-item nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                    <a href="" class="btn btn-primary py-2 px-4">Book A Table</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Menu</h1>
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                        </ol>
                    </nav> -->
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
            <form action="<?= base_url('/menu-awal/pesan')?>" method="POST">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Menu</h5>
                    <h1 class="mb-5">Our Signature</h1>
                    <button class="btn btn-primary py-2 px-4" type="submit">Order Menu</button>
                </div>
                <br>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Drink</small>
                                    <h6 class="mt-n1 mb-0">Sanara Cafe</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Food</small>
                                    <h6 class="mt-n1 mb-0">Sanara Cafe</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Dessert</small>
                                    <h6 class="mt-n1 mb-0">Sanara Cafe</h6>
                                </div>
                            </a>
                        </li>
                    
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <?php 
                                    for($i=0;$i<8;$i++){
                                ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?=$menu[$i]['foto']?>.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?=$menu[$i]['nama']?></span>
                                                <span class="text-primary"><?=$menu[$i]['harga']?>.000</span>
                                            </h5>
                                            <div class="d-flex justify-content-between">
                                                <small class="fst-italic"><?=$menu[$i]['deskripsi']?></small>
                                                <h6 class="text-primary ms-auto mt-1">Tambahkan ke List Order! -></h6>
                                                <input class="number-input" type="number" min="0" value="0" name="<?=$menu[$i]['id']?>"></input>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <?php 
                                    for($i=8;$i<16;$i++){
                                ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?=$menu[$i]['foto']?>.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?=$menu[$i]['nama']?></span>
                                                <span class="text-primary"><?=$menu[$i]['harga']?>.000</span>
                                            </h5>
                                            <div class="d-flex justify-content-between">
                                                <small class="fst-italic"><?=$menu[$i]['deskripsi']?></small>
                                                <h6 class="text-primary ms-auto mt-1">Tambahkan ke List Order! -></h6>
                                                <input class="number-input" type="number" min="0" value="0" name="<?=$menu[$i]['id']?>"></input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <?php 
                                    for($i=16;$i<24;$i++){
                                ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?=$menu[$i]['foto']?>.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?=$menu[$i]['nama']?></span>
                                                <span class="text-primary"><?=$menu[$i]['harga']?>.000</span>
                                            </h5>
                                            <div class="d-flex justify-content-between">
                                                <small class="fst-italic"><?=$menu[$i]['deskripsi']?></small>
                                                <h6 class="text-primary ms-auto mt-1">Tambahkan ke List Order! -></h6>
                                                <input class="number-input" type="number" min="0" value="0" name="<?=$menu[$i]['id']?>"></input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
        <!-- Menu End -->
        <h5 class="text-primary mt-1 ms-5">Klik Tombol ORDER MENU setelah memilih ya!</h5>
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Reservation</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+628123456</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>sanara@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


<?= $this->endSection() ?>