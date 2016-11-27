<section class="content">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="#" class="link">Makan Siang</a></li>
      <li><a href="#" class="link">Ayam Goreng</a></li>
    </ol>
    <div class="content-body">
      <div class="row">
        <?php foreach($penginapan as $penginapan){ ?>
        <div class="col-md-3">
          <div class="content-img">
            <img src="img/content/2.jpg" class="img-responsive">
          </div>
        </div>
        <div class="col-md-6">
          <div class="content-detail">
            <h3 class="title"><?= $penginapan->nama_penginapan ?></h3>
            <p class="menu-owner"><?= $penginapan->nama ?></p>
            <div class="menu-type"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <?= $penginapan->rating ?></div>
            <span class="menu-price">Rp. <?= $penginapan->harga ?>,-</span>
            <p class="description"><?= $penginapan->deskripsi ?></p>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<section class="owner-recomendation">
  <div class="container">
  <h2 class="recomendation-heading">Rekomendasi Penginapan yang lain</h2>
    <div class="row">
    <?php foreach ($rekomendasi as $rekomendasi) { ?>
      <div class="col-md-3">
        <div class="box">
          <a href="#">
            <span class="box-image">
              <img src="img/content/1.jpg" class="img-responsive">
            </span> 
            <div class="box-description">
              <h4 class="menu-title"><?= $rekomendasi->nama_penginapan ?></h4>
              <p class="menu-owner">Pak Bambang</p>
              <div class="menu-type-sm"><i class="flaticon-alarm-clock-1"></i> Siang</div>
              <div class="menu-price-sm">Rp. 7.000,-</div>
            </div>
          </a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>