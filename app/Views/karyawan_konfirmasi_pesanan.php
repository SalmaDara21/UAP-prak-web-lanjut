<?= $this->extend('layouts/app_admin') ?>
<?= $this->section('content') ?>

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
                        <a href="<?= base_url('/karyawan-profile') ?>" class="nav-item nav-link">Profile</a>
                        <a href="<?= base_url('/karyawan-pesanan') ?>" class="nav-item nav-link active">Pesanan</a>
                        <a href="<?= base_url('/karyawan-riwayat') ?>" class="nav-item nav-link">Riwayat</a>
                        <a href="<?= base_url('logout') ?>" class="nav-item nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </nav>

        </div>
        <!-- Navbar & Hero End -->

        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container my-5 py-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">Konfirmasi Pesanan</h1>
                </div>
                <div class="tab-class wow fadeInUp" data-wow-delay="0.1s">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">

                            <form action="<?= base_url('/karyawan-pesanan/' . $pesanan['0']['id']) ?>') ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="PUT">
                        </div>

                        <div>
                            <span >Nama</span>
                            <input name="nama" type="text" value= "<?= ($pesanan['0']['nama'])?>" disabled />
                        </div>

                        <div>
                            <span >Meja</span>
                            <input name="meja" type="text" value= "<?= ($pesanan['0']['meja'])?>" disabled />
                        </div>

                        <div>
                            <span >Pesanan</span>
                            <input name="pesanan" type="text" value= "<?= ($pesanan['0']['pesanan'])?>" disabled />
                        </div>

                        <div>
                            <span >Jumlah</span>
                            <input name="jumlah" type="text" value= "<?= ($pesanan['0']['jumlah'])?>" disabled />
                        </div>

                        <div>
                            <span >Harga</span>
                            <input name="harga" type="text" value= "<?= ($pesanan['0']['harga'])?>" disabled />
                        </div>

                        <div>
                            <label>Status</label>
                            <select name="status" id='status'>
                                <option value="proses" disabled selected><?= ($pesanan['0']['status'])?></option>
                                <option value="selesai">selesai</option>
                            </select>
                        </div>
                            <br>
                            <br>
                            <button type="submit" >Simpan</button>
                            </form>
                    </div>
                </div>
            </div>          
        </div>
        <!-- Menu End -->

    

<?= $this->endSection() ?>