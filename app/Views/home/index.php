<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<!-- list kosan -->
<div id="content">
  <div class="container">

    <div class="search-bar mb-3">
      <div class="row">
        <div class="col">
          <?php if (session()->getFlashData('pesan')) : ?>
            <div class="alert alert-success" role="alert">
              <?= session()->getFlashData('pesan'); ?>

              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php endif; ?>
          <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Cari Kos" aria-label="Cari">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">cari</button>
          </form> -->
        </div>
      </div>
    </div>

    <div class="row">

      <?php foreach ($list as $l) : ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a href="/home/detail/<?= $l['id']; ?>">
            <div class="card">
              <img src="/img/<?= $l['img']; ?>" class="card-img-top" alt="">
              <div class="card-body">
                <p class="card-text"><?= $l['title']; ?></p>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="" data-toggle="modal" data-target="#tambahData">
          <div class="card">
            <img src="/img/tambah.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <p class="card-text">Tambah Kos</p>
            </div>
          </div>
        </a>
      </div>

    </div> <!-- end of Row -->

    <!-- Modal Box -->
    <div class="modal" id="tambahData" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="/home/save" method="POST" enctype="multipart/form-data">
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
                <label for="kosAlamat">Alamat</label>
                <input type="text" class="form-control" id="kosAlamat" name="kosAlamat" required>
              </div>
              <!-- <div class="form-group">
                <label for="kosImg">Link Foto</label>
                <input type="text" class="form-control" id="kosImg" name="kosImg" required>
              </div> -->
              <div class="form-group row">
                <label for="kosImg">Foto</label>
                <div class="col-sm-2">
                  <img src="/img/default.png" class="img-thumbnail img-preview">
                </div>
                <div class="custom-file col-sm-8">
                  <input type="file" class="custom-file-input" id="kosImg" name="kosImg" onchange="previewImg()">
                  <label class="custom-file-label" for="KosImg">Pilih Gambar..</label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- akhir list kosan -->

<?= $this->endSection(); ?>