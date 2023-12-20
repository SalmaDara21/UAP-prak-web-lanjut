<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<form action="<?= base_url('/menu/' . $menu['id']) ?>" method="POST" enctype="multipart/form-data" >

<?= csrf_field() ?>

<input type="hidden" name="_method" value="PUT">
<img src="<?= $menu['foto'] ?? '<default-foto>' ?>"  width="60" height="80" class="rounded">
<input type="file" name="foto" id="foto">

<div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nama</span>
            <input class="form-control" name="nama"  id="nama" type="text" value= "<?= $menu['nama']?>" />
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Harga</span>
            <input class="form-control" name="harga" id="harga" type="number" value= "<?= $menu['harga']?>" />
        </div>
        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
            <button class="btn btn-primary" name="submit" >Submit</button>
        </div>
        </form>
<?= $this->endSection() ?>