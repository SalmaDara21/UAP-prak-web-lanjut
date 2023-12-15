<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>
    <form action="<?= base_url('/laporan/store') ?>" method="POST" enctype="multipart/form-data" >
                                            
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nama Menu</span>
            <input class="form-control" name="nama_menu"  id="nama_menu" type="text"  />
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Quantity</span>
            <input class="form-control" name="quantity" id="quantity" type="number"  />
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total</span>
            <input class="form-control" name="total" id="total" type="number"  />
        </div>
        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
            <button class="btn btn-primary" name="submit" >Submit</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>