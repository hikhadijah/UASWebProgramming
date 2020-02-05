<!DOCTYPE html>
<html>
  <head>
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>

    <br>
    <br>
    <br>
    <br>
    <br>
 
    <div class="container">
        <div class="col-lg-5 ml-auto" data-aos="" data-aos-delay="500">
          <form class="form-signin" action="<?php echo base_url("Login/aksi_login"); ?>" method="post">
            <h2 class="form-signin-heading">Login Admin</h2>
            <?php echo $this->session->flashdata('msg');?>
            <div>
              <label for="username" class="sr-only">Username</label>
              <input type="text" id="username" name="username" class="form-control mt-3" placeholder="Username" required autofocus>
            </div>
            <div>
              <label for="password" class="sr-only">Password</label>
              <input type="password" id="password" name="password" class="form-control mt-3" placeholder="Password" required>
            </div>
            <div>
            <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Sign in</button>
            </div>
          </form>

          <!-- <p>Belum punya akun? <a href="<?php echo base_url("login/registrasi"); ?>">Registrasi</a></p> -->
          <p class="mt-3">Login Sebagai Mahasiswa <a href="<?= site_url("loginmhs"); ?>">Disini</a></p>
        </div>
        </div> 
        <!-- /container -->

  </body>
</html>