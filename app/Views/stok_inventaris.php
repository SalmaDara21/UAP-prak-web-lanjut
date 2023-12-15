<?= $this->extend('layouts/app_admin') ?>

<?= $this->section('content') ?>

    <div class="container-xxl bg-white p-0">
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Sanara Cafe</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <div style="color:white">admin</div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Testimoni</a>
                        <a href="service.html" class="nav-item nav-link">Keluhan</a>
                    </div>
                    <a href="<?= base_url('logout');?>" class="btn btn-primary py-2 px-4">Logout</a>
                </div>
            </nav>

        </div>
        <!-- Navbar & Hero End -->


        


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container my-5 py-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">List Cafe</h5>
                    <h1 class="mb-5">Sanara Cafe Inventory</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3 active" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Stok</small>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Inventaris</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        
                        <div id="tab-2" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                 
                                            </h5>
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-2.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                 
                                            </h5>
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-3.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                 
                                            </h5>
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-4.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                           
                                            </h5>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-5.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                 
                                            </h5>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-6.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                 
                                            </h5>
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-7.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                 
                                            </h5>
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-8.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                 
                                            </h5>
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <?php
                                    foreach($inventaris as $i){
                                ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span><?= $i['nama_inventaris']?></span>
                                            <form action="<?= base_url('/inventaris/'.$i['id'])?>" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <?= csrf_field()?>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                            </h5>
                                            <div class="d-flex justify-content-between pb-2">
                                            <form action="<?= base_url('/inventaris/update/'.$i['id'])?>"method="POST">
                                            <input type="hidden" name="_method" value="PUT">
                                            <small class="fst-italic">Jumlah Kursi : </small>
                                             <input type="text" value="<?= $i['jumlah_kursi']?>" name="jumlah_kursi"></input>
                                             <button type="submit" class="btn btn-background">Submit</button>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                            
                            <div class="container-xxl pt-1 ">
                                <div class="container text-start my-3 py-5 ">
                                    <div  class="container text-center mb-3 ">
                                        <h1 >Tambah Inventaris</h1>
                                    </div>
                                    <?php if(session()->getFlashdata('errors')):?>
                                        <div class="row">
                                        <div class="col md-5">
                                            <div class="alert alert-danger" role="alert">
                                            <?=session()->getFlashdata('errors')?>
                                            </div>
                                        </div>
                                        </div>
                                        <?php endif; ?>
                                    <form action="<?= base_url('/inventaris/store')?>" method="POST" enctype="multipart/form-data">
                                        <?= csrf_field() ?>
                                        <div class="mb-3 ms-3 me-3 mt-3">
                                            <label for="nama_inventaris" class="form-label">nama inventaris</label>
                                            <input type="text" class="form-control" name="nama_inventaris" >
                                        </div>
                                        <div class="mb-3 ms-3 me-3">
                                            <label for="jumlah_kursi" class="form-label">jumlah kursi</label>
                                            <input type="text" class="form-control" name="jumlah_kursi">
                                        </div>
                                            <button type="submit" class="btn btn-primary ms-3 me-3">Submit</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                        <div class="text-center pt-3">
                        <a href="<?=base_url('/')?>" type="button" class="btn btn-success ms-1 me-1">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
            <div class="text-center">
                    <h1 class="section-title ff-secondary text-center text-primary fw-normal">Sanara Cafe</h1>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Sanara Cafe</a>,
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Uap Praktikum Web Lanjut
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Ilmu Komputer</a>
                                <a href="">Universitas Lampung</a>
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