<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">

      <h3 class="mt-2 mb-2">Detail Kos</h3>

      <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="<?= $detail['img']; ?>" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><b><?= $detail['title']; ?></b></h5>
              <p class="card-text"><b>No. Telp : </b><?= $detail['telp']; ?></p>
              <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->

              <a href="" data-toggle="modal" data-target="#editData" class="btn btn-warning">Edit</a>
              <a href="" class="btn btn-danger">Hapus</a>
              <br>
              <a href="/">Kembali Ke Halaman Utama</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Box -->
      <div class="modal" id="editData" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/home/save" method="POST">
              <div class="modal-body">
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
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Edit Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Akhir Modal -->

    </div>
  </div>
</div>

<?= $this->endSection(); ?>