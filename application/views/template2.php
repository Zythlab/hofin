<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HOFIN | Tempat kamu cari homestay di area malang</title>
  <meta name="description" content="Tempat cari katering makanan terdekat dan termurah"/>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
  <meta name="viewport" content="width=1366, initial-scale=1.0, maximum-scale=1.0">

  <!-- Loading Bootstrap -->
  <link href="<?php echo base_url() ?>assets/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Loading Flat UI -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <link href="<?php echo base_url() ?>assets/dist/fonts/essential/flaticon.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/dist/css/flat-ui.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/dist/css/custom.css" rel="stylesheet">
</head>
<body>
  <div class="bg-transparent">
    <nav class="navbar navbar-color-white navbar-white navbar-transparent" role="navigation">
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
            <li>
            <a href="https://github.com/Zythlab" class="main-menu">CONTACT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <?php echo $content ?>
  <footer class="dark-footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-7">
          <h3 class="footer-title">Subscribe</h3>
          <p>Do you like this website? Want to get more stuff like this?<br/>
            Subscribe to Zythlab to stay tuned on great designs and web development.<br/>
            Go to: <a href="https://github.com/Zythlab" target="_blank">Zythlab Github</a>
          </p>
        </div> <!-- /col-xs-7 -->
      </div>
    </div>
  </footer>
  <section id="credit">
    <div class="container">
      <div class="pull-right">
        <h6 class="credit">Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Zythlab</h6>
      </div>
    </div>
  </section>
  <script src="<?php echo base_url() ?>assets/dist/js/vendor/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/dist/js/flat-ui.min.js"></script>
  <script src="<?php echo base_url() ?>assets/docs/assets/js/application.js"></script>
</script>
</body>
</html>