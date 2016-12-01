<section id="banner" class="section-padding" data-type="background" data-speed="5">
  <div class="container">
    <div class="banner-text">
      <div class="banner-header">
        TEMUKAN
      </div>
      <p class="banner-body">
        HOMESTAY PARTNERMU
      </p>
      <a href="<?php echo base_url('penginapan/cariPenginapan?daerah=0')?>" class="btn btn-ghost-white banner-btn">LIHAT SEMUA PENGINAPAN</a>
    </div>
  </div>
</section>
<section id="search-box">
  <div class="form-inline">
  <?php echo form_open('penginapan/cariPenginapan'); ?>
    <div class="form-group">
      <select class="form-control select" data-toggle="select" name="daerah">
        <option value="0" selected>Pilih Daerah</option>
        <option value="Kab. Singosari">Kab. Singosari</option>
        <option value="Kab. Jabung">Kab. Jabung</option>
      </select>
    </div>
    <button type="submit" class="btn button-search btn-red">Cari</button>
  </div>
</section>
<section id="menu" class="section-padding">
  <div class="container">
    <div class="panel-title">
      <h2 class="title">Paling Populer</h2>
    </div>
    <div class="menu">
      <div class="row box-section">
      <?php foreach ($populer as $populer) {?>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="box">
            <a href="<?= base_url('penginapan/detailPenginapan/')?><?= $populer->id_penginapan?>">
              <div class="box-image">
                <img src="img/content/1.jpg" class="img-responsive">
              </div> 
              <div class="box-description">
                <h4 class="menu-title"><?= $populer->nama_penginapan ?></h4>
                <p class="menu-owner"><?= $populer->nama ?></p>
                <div class="menu-type"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <?= $populer->rating ?></div>
                <div class="menu-price">Rp. <?=$populer->harga ?>,-</div>
              </div>
            </a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>