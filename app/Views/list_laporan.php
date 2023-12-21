<?= $this->extend('layouts/app_admin') ?>

<?= $this->section('content') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sanara Cafe</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

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
                        <a href="<?= base_url('/admin_testimoni');?>" class="nav-item nav-link">Testimoni</a>
                        <a href="<?= base_url('/user_list');?>" class="nav-item nav-link">Kelola Karyawan</a>
                    <!-- </div>
                    <a href="#" class="btn btn-primary py-2 px-4">Logout</a>
                </div> -->
                <a href="<?= base_url('logout') ?>" class="nav-item nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </nav>

        </div>
        <!-- Navbar & Hero End -->

<body>
<br><br>
<div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Laporan</h5>
                    <h1 class="mb-5">Laporan Penjualan</h1>
                    
                </div>
                <br>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-3x fa-cart-plus text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Laporan Penjualan</small>
                                    <h6 class="mt-n1 mb-0">Sanara Cafe</h6>
                                </div>
                            </a>
                        </li>
                    
                    </ul>
                    <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <a class="media-print" onclick="window.print()">Cetak Laporan<i class="fa fa-print"></i> </a>
                                <div class="col-lg-6">
                                <!-- <div class= "main"> -->
                                <table class="table">
                                <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Meja</th>
                                <th>Pesanan</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach($pesanan as $pesanans) : ?>
                                <tr>
                                    <td><?= $pesanans['nama'] ?></td>
                                    <td><?= $pesanans['meja'] ?></td>
                                    <td><?= $pesanans['pesanan'] ?></td>
                                    <td><?= $pesanans['jumlah'] ?></td>
                                    <td><?= $pesanans['harga'] ?></td>
                                    <td><?= $pesanans['status'] ?></td>
                                    <td>
                                        <a href="#" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
        
</body>
</html>

<?= $this->endSection() ?>