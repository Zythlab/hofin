<section id="list-menu" class="content" style="padding-top: 76px">
  <div class="container">
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
  <div class="menu" style="padding-top: 30px">
    <div class="row">
      <?php foreach ($penginapan as $penginapan) {?>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="box">
            <a href="<?= base_url('penginapan/detailPenginapan/')?><?= $penginapan->id_penginapan?>">
              <div class="box-image">
                <img src="img/content/1.jpg" class="img-responsive">
              </div> 
              <div class="box-description">
                <h4 class="menu-title"><?= $penginapan->nama_penginapan ?></h4>
                <p class="menu-owner"><?= $penginapan->nama ?></p>
                <div class="menu-type"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <?= $penginapan->rating ?></div>
                <div class="menu-price">Rp. <?=$penginapan->harga ?>,-</div>
              </div>
            </a>
          </div>
        </div>
        <?php } ?>
    </div>
  </div>
</div>
</section>