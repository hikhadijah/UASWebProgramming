<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
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
          <form class="form-signin" action="<?php echo base_url("Loginmhs/aksi_register"); ?>" method="post">
            <h2 class="form-signin-heading">Buat Akun Mahasiswa</h2>
            <?php echo $this->session->flashdata('msg');?>
            <div>
              <input type="number"name="npm" class="form-control" placeholder="NPM">
            </div>
            <div>
              <input type="password" name="password1" class="form-control mt-3" placeholder="Password">
            </div>
            <div>
              <input type="password" name="password2" class="form-control mt-3" placeholder="Masukkan ulang password">
            </div>
            <div>
              <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Sign Up</button>
            </div>
          </form>

          <p class="mt-2">Sudah Punya Akun? <a href="<?php echo base_url("loginmhs"); ?>">Log In</a></p>
        </div>
        </div> 

      <!-- /container -->
  </body>
</html>