<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>
    <form action="<?= base_url('/inventaris/store') ?>" method="POST" enctype="multipart/form-data" >
                                            
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nama</span>
            <input class="form-control" name="nama"  id="nama" type="text"  />
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Barang</span>
            <input class="form-control" name="barang" id="barang" type="text"  />
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Stok</span>
            <input class="form-control" name="stok" id="stok" type="number"  />
        </div>
        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
            <button class="btn btn-primary" name="submit" >Submit</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>