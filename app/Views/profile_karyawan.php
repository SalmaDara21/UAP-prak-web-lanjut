<?= $this->extend('layouts/app_admin') ?>

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
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Sanara Cafe</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <div style="color:white">karyawan</div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="<?= base_url('/karyawan-profile') ?>" class="nav-item nav-link active">Profile</a>
                        <a href="<?= base_url('/karyawan-pesanan') ?>" class="nav-item nav-link">Pesanan</a>
                        <a href="<?= base_url('/karyawan-riwayat') ?>" class="nav-item nav-link">Riwayat</a>
                        <a href="<?= base_url('logout') ?>" class="nav-item nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </nav>

        </div>
        <!-- Navbar & Hero End -->
         
        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container my-5 py-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">Profile</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="card mb-3" style="max-width: 540px; margin-left: auto; margin-right: auto">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="<?=  user()->user_image; ?>" class="img-fluid rounded-start" alt="<?= user()->username; ?>">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><h4><?= user()->username; ?></h4></li>

                                <?php if (user()->fullname) : ?>
                                <li class="list-group-item"><?= user()->fullname; ?></li>
                                <?php endif; ?>

                                <li class="list-group-item"><?= user()->email; ?></li>


                                <li class="list-group-item">
                                <a href="<?= base_url('karyawan-profile/edit-profile-karyawan') ?>" class="btn btn-warning">Edit</a>
                                </li>

                            </ul>
                            </div>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Menu End -->


       
    </div>

<?= $this->endSection() ?>