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
              <a href="<?php echo base_url('Penginapan/dashboard')?>" class="main-menu">HOME</a>
            </li>
            <li>
              <a href="/contact" class="main-menu">CONTACT <i class="fa fa-angle-down"></i></a>
              <ul class="sublist">
                <li><a href="#" class="sub-menu">MASTER</a></li>
                <li><a href="#" class="sub-menu">ADMIN</a></li>
              </ul>
            </li>
            <li>
              <a href="/contact" class="main-menu">SERVICES</a>
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
          <p>Do you like this freebie? Want to get more stuff like this?<br/>
            Subscribe to designmodo news and updates to stay tuned on great designs.<br/>
            Go to: <a href="http://designmodo.com/flat-free" target="_blank">designmodo.com/flat-free</a>
          </p>
        </div> <!-- /col-xs-7 -->
      </div>
    </div>
  </footer>
  <section id="credit">
    <h6 class="credit">Made with love by Zyth</h6>
  </section>
  <script src="<?php echo base_url() ?>assets/dist/js/vendor/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/dist/js/flat-ui.min.js"></script>
  <script src="<?php echo base_url() ?>assets/docs/assets/js/application.js"></script>
</script>
</body>
</html>