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
                <div style="color:white">admin</div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="<?= base_url('/admin');?>" class="nav-item nav-link">Home</a>
                        <a href="<?= base_url('/admin_testimoni');?>" class="nav-item nav-link active">Testimoni</a>
                        <a href="<?= base_url('/user_list');?>" class="nav-item nav-link">Kelola Karyawan</a>
                    <!-- </div>
                    <a href="#" class="btn btn-primary py-2 px-4">Logout</a>
                </div> -->
                <a href="<?= base_url('logout') ?>" class="nav-item nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </nav>

        </div>
        <!-- Navbar & Hero End -->

         <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container my-5 py-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">Testimoni</h1>
                </div>
            </div>
            <div id="tab-1" class="tab-pane fade show p-0 active">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Pesan</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                <?php foreach($testimoni as $testimonis) : ?>
                                <tr>
                                    <td><?= $testimonis['pesan'] ?></td>
                                    <td><?= $testimonis['username'] ?></td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                            </table>
                        </div>
        </div>
        <!-- Menu End -->                       


       
    </div>

<?= $this->endSection() ?>