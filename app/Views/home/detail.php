<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">

      <!-- <h3 class="mt-2 mb-2">Detail Kos</h3> -->

      <div class="card mb-3 mt-3">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="/img/<?= $detail['img']; ?>" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><b><?= $detail['title']; ?></b></h5>
              <p class="card-text"><b>No. Telp : </b><?= $detail['telp']; ?></p>
              <p class="card-text"><b>Alamat : </b><?= $detail['alamat']; ?></p>
              <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->

              <a href="" data-toggle="modal" data-target="#editData" class="btn btn-warning mr-1">Edit</a>

              <form action="/home/delete/<?= $detail['id']; ?>" method="POST" class="d-inline">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin');"> Hapus</button>
              </form>

              <br>
              <a href="/" class=" btn btn-dark mt-2">Kembali Ke Halaman Utama</a>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="maps">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7979.261525720137!2d123.13014011508997!3d0.5555587211549191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x327ed54ffb21696f%3A0x9d84ac2a463f5ed3!2sKampus%20Baru%20Universitas%20Negeri%20Gorontalo!5e0!3m2!1sid!2sid!4v1604055339058!5m2!1sid!2sid" width="" height="" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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

            <form action="/home/update/<?= $detail['id']; ?>" method="POST" enctype="multipart/form-data">
              <?= csrf_field(); ?>
              <input type="hidden" name="imgLama" value="<?= $detail['img']; ?>">
              <div class="modal-body">
                <div class="form-group">
                  <label for="kosTitle">Nama Kos</label>
                  <input type="text" class="form-control" id="kosTitle" aria-describedby="emailHelp" name="kosTitle" autofocus required value="<?= $detail['title']; ?>">
                </div>
                <div class="form-group">
                  <label for="kosTelp">Nomor Telp.</label>
                  <input type="text" class="form-control" id="kosTelp" name="kosTelp" required value="<?= $detail['telp']; ?>">
                </div>
                <div class="form-group">
                  <label for="kosAlamat">Alamat</label>
                  <input type="text" class="form-control" id="kosAlamat" name="kosAlamat" required value="<?= $detail['alamat']; ?>">
                </div>
                <div class="form-group row">
                  <label for="kosImg">Foto</label>
                  <div class="col-sm-2">
                    <img src="/img/<?= $detail['img']; ?>" class="img-thumbnail img-preview">
                  </div>
                  <div class="custom-file col-sm-8">
                    <input type="file" class="custom-file-input" id="kosImg" name="kosImg" onchange="previewImg()">
                    <label class="custom-file-label" for="KosImg"><?= $detail['img']; ?></label>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Edit Kos</button>
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