<section class="content bg-gray">
  <div class="container">
    <div class="login-box">
      <div class="row">
        <div class="col-md-6">
          <div class="login-box-body border-right">
            <h2 class="title">Log in ke HOFIN</h2>
            <p class="title-description">Masukkan username dan password untuk login</p>
            <?php echo $notice ?>
            <?php echo form_open('pengguna/login');?>
            <div class="form-group">
              <input type="text" class="form-control form-input" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control form-input" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <button class="btn btn-block btn-red" type="submit">LOGIN</button>
            </div>
            <?php echo form_close(); ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="login-box-body">
            <?php echo $sukses ?>
            <h2 class="title">Register HOFIN</h2>
            <p class="title-description">Silahkan mengisi data dibawah ini untuk mendaftar</p>
            <?php echo form_open('pengguna/register');?>
            <label class="radio">
              <input type="radio" name="role" id="optionsRadios1" value="1" data-toggle="radio">
              Pemilik Penginapan
            </label>
            <label class="radio">
              <input type="radio" name="role" id="optionsRadios2" value="2" data-toggle="radio" checked="">
              Pencari Penginapan
            </label>
            <div class="form-group">
              <input type="text" class="form-control form-input" name="nama" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-input" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control form-input" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <button class="btn btn-block btn-red">SUBMIT</button>
            </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>