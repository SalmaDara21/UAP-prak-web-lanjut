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
                        <a href="<?= base_url('/karyawan-menu') ?>" class="nav-item nav-link">Home</a>
                        <a href="<?= base_url('/karyawan-pesanan') ?>" class="nav-item nav-link">Pesanan</a>
                        <a href="<?= base_url('/karyawan-riwayat') ?>" class="nav-item nav-link">Riwayat</a>
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
                    <h1 class="mb-5">Menu</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <table class="table">
                            <tr>
                                <th>Tanggal</th>
                                <th>Pesanan</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            <tr>
                                <td>01-01-2023</td>
                                <td>Americano</td>
                                <td>1</td>
                                <td>Menunggu Konfirmasi</td>
                                <td>
                                    <button>Hapus</button>
                                </td>
                            </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Menu End -->


       
    </div>

<?= $this->endSection() ?>