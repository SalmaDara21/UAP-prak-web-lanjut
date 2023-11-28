<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<form action="<?= base_url('/inventaris/' . $inventaris['id']) ?>" method="POST" enctype="multipart/form-data" >
<input type="hidden" name="_method" value="PUT">
<?= csrf_field() ?>                                           
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nama</span>
            <input class="form-control" name="nama"  id="nama" type="text" value= "<?= $inventaris['nama']?>" />
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Barang</span>
            <input class="form-control" name="barang" id="barang" type="text" value= "<?= $inventaris['barang']?>" />
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Stok</span>
            <input class="form-control" name="stok" id="stok" type="number"  value= "<?= $inventaris['stok']?>" />
        </div>
        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
            <button class="btn btn-primary" name="submit" >Submit</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>