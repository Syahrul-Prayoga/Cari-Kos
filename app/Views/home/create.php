<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-8">
      <h2 class="my-3">Form Tambah Data Kos</h2>

      <?= csrf_field(); ?>
      <form action="/home/save" method="POST">
        <div class="form-group">
          <label for="kosTitle">Nama Kos</label>
          <input type="text" class="form-control" id="kosTitle" aria-describedby="emailHelp" name="kosTitle" autofocus required>
        </div>
        <div class="form-group">
          <label for="kosTelp">Nomor Telp.</label>
          <input type="text" class="form-control" id="kosTelp" name="kosTelp" required>
        </div>
        <div class="form-group">
          <label for="kosImg">Link Foto</label>
          <input type="text" class="form-control" id="kosImg" name="kosImg" required>
        </div>
        <!-- <div class="form-group">
          <label for="kosImg">Upload Foto</label>
          <input type="file" class="form-control-file" id="kosImg" name="kosImg">
        </div> -->

        <button type="submit" class="btn btn-dark">Tambah data</button>
      </form>

    </div>
  </div>
</div>

<?= $this->endSection(); ?>