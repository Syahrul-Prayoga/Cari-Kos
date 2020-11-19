<?= $this->extend('layout/template-login'); ?>
<?= $this->section('content'); ?>

<div class="register">
  <h3>Register</h3>
  <form method="POST">
    <div class="txt-field">
      <input type="text" name="nama" id="" required>
      <span></span>
      <label>Username</label>
    </div>
    <div class="txt-field">
      <input type="text" name="email" id="" required>
      <span></span>
      <label>Email</label>
    </div>
    <div class="txt-field">
      <input type="text" name="password" id="" required>
      <span></span>
      <label>Password</label>
    </div>
    <input type="submit" name="submit" id="" value="Register">

    <div class="login-link">
      <h6> sudah punya akun? <span><a href="login">Login</a></span></h6>
    </div>
  </form>
</div>
</div>

<?= $this->endSection(); ?>