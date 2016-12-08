<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HOFIN | Homestay Finder</title>
  <meta name="description" content="Tempat cari katering makanan terdekat dan termurah"/>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
  <meta name="viewport" content="width=1366, initial-scale=1.0, maximum-scale=1.0">

  <!-- Loading Bootstrap -->
  <link href="<?php echo base_url() ?>assets/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Loading Flat UI -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/fonts/font-awesome/css/font-awesome.min.css">
  <link href="<?php echo base_url() ?>assets/dist/fonts/essential/flaticon.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/dist/css/flat-ui.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/dist/css/custom.css" rel="stylesheet">
</head>
<body>
  <div class="bg-transparent">
    <div class="topbar">
      <div class="container">
        <div class="topbar-left">
          <div class="social">
            
          </div>
        </div>
        <div class="topbar-right pull-right">
          <div class="group-sign-in">
            <?php if(!$this->session->userdata('nama')) {?>
            <a href="<?= base_url('pengguna') ?>" class="login-top">Login</a>
            <a href="<?= base_url('pengguna') ?>">Register</a>
            <?php } else {?>
            <a>Halo, <?php echo $this->session->userdata('nama')?> | </a><a href="<?php echo base_url('pengguna/logout') ?>">logout</a>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <div class="nav-wrapper">
      <nav class="navbar navbar-static navbar-white navbar-transparent" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <div class="sr-only">Toggle navigation</div>
              <i class="icon-menu"></i>
            </button>
            <a class="navbar-brand" href="#">HOFIN</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
                <a href="<?php echo base_url('penginapan')?>" class="main-menu">HOME</a>
              </li>
              <?php if($this->session->userdata('role') == '1'){ ?>
              <li>
                <a href="<?php echo base_url('penginapan/dashboard')?>" class="main-menu">DASHBOARD</a>
              </li>
              <?php } ?>
              
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <?php echo $content ?>
  <footer class="dark-footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-7">
          <h3 class="footer-title">HOFIN</h3>
          <p>Homestay Finder | Temukan Penginapan Impianmu Kapan Saja & Dimana Saja!<br/>
            <br/>
            
          </p>
        </div> <!-- /col-xs-7 -->
      </div>
    </div>
  </footer>
  <section id="credit">
    <div class="container">
      <div class="pull-right">
        <h6 class="credit">Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by HOFIN</h6>
      </div>
    </div>
  </section>
  <script src="<?php echo base_url() ?>assets/dist/js/vendor/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/dist/js/flat-ui.min.js"></script>
  <script src="<?php echo base_url() ?>assets/docs/assets/js/application.js"></script>
  <script type="text/javascript">
    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
      if (scroll >= 200) {
        $(".navbar-white").addClass("navbar-fixed-top");
        $(".navbar-white").removeClass("navbar-static");
        $(".navbar-white").addClass("navbar-color-white");
      } else {
        $(".navbar-white").removeClass("navbar-fixed-top");
        $(".navbar-white").addClass("navbar-static");
        $(".navbar-white").removeClass("navbar-color-white");
      }
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){

    var $window = $(window); //You forgot this line in the above example

    $('section[data-type="background"]').each(function(){
      var $bgobj = $(this); // assigning the object
      $(window).scroll(function() {
        var yPos = -(($window.scrollTop()) / $bgobj.data('speed'));
      // Put together our final background position
      var coords = '50% '+ yPos + 'px';
      // Move the background
      $bgobj.css({ backgroundPosition: coords });
    });
    });
  });
</script>
</body>
</html>