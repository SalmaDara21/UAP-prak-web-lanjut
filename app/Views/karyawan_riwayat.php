
<!DOCTYPE html>
<!-- Developed By Ichwan Almaza Ilmu Komputer 2014 -->
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard Karyawan</title>

    <meta name="csrf-token" content="TBvNGUkkWdfIMvxCWTSXdL8FdAQMGJHhNrqNlXQg">
    <link href="https://e-kkn.unila.ac.id/css/app.css" rel="stylesheet">
    <link href="https://e-kkn.unila.ac.id/css/style.css" rel="stylesheet">
    <link href="https://e-kkn.unila.ac.id/css/animate.css" rel="stylesheet">
    <link href="https://e-kkn.unila.ac.id/css/sweetalert.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


</head>

<body>
    <script type="text/javascript" src="https://e-kkn.unila.ac.id/js/app.js"></script>
    <div id="wrapper">

        <!-- sidebar  -->
        <nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                <img alt="image" class="img-circle" height="50" width="50" src="/assets/img/testimonial-3.jpg" />
                 </span>
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Bejo</strong>
                    </span> <span class="text-muted text-xs block">Option <b class="caret"></b></span> </span> </a>
                                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                                    </div>
                <div class="logo-element">
                    cafe
                </div>
            </li>
                        <li >
                <a href="<?= base_url('/karyawan-pesanan') ?>"><i class="fa-regular fa-note-sticky"></i> <span class="nav-label">Pesanan</span></a>
            </li>
            <li >
                <a href="<?= base_url('/karyawan-menu') ?>"><i class="fa-solid fa-mug-saucer"></i> <span class="nav-label">Menu</span></a>
            </li>
            <li class="active">
                <a href="<?= base_url('/karyawan-riwayat') ?>"><i class="fa-solid fa-clock-rotate-left"></i> <span class="nav-label">Riwayat Pesanan</span></a>
            </li>
    </div>
</nav>

  
  
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <!-- header -->
            <div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa-solid fa-bars"></i> </a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <span class="m-r-sm text-muted welcome-message">Dashboard Karyawan</span>
            </li>
            <li>
                <a href="#">
                    <i></i> Log out
                </a>
            </li>
        </ul>

    </nav>
</div>

            <!-- Page Header -->
            
            <div class="row">
                <div class="col-lg-12">

                    <!-- dashboard -->
                    <div class="wrapper wrapper-content animated fadeIn">
	<div class="row">
		<div class="col-lg-12">
			
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Data Menu</h5>
					<div class="ibox-tools">
					</div>
				</div>
				<div class="ibox-content table-responsive">
                <table style="width: 100%">
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
	<div class="row">
		<div class="wrapper wrapper-content">
			<div class="row animated fadeIn">
				<div class="col-lg-12">
					<div class="ibox float-e-margins">

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

                </div>
            </div>

        </div>

    </div>
    
</body>
</html>
