<?= $this->extend('layout/template-login'); ?>
<?= $this->section('content'); ?>

  <div class="register">
    <h3>Login</h3>
    <form method="POST">
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

      <div class="forgot-password-link">
        <h6><a href="#">lupa password?</a></h6>
      </div>

      <input type="submit" name="submit" id="" value="Login">

      <div class="login-link">
        <h6> belum punya akun? <span><a href="register">Register</a></span></h6>
      </div>
    </form>
  </div>
  </div>

<?= $this->endSection(); ?>
