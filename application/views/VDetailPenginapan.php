<section class="content">
  <?php foreach($penginapan as $penginapan){ ?>
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('penginapan/cariPenginapan?daerah='.$penginapan->daerah.'')?>" class="link"><?php echo $penginapan->daerah ?></a></li>
      <li><a class="link"><?php echo $penginapan->kategori ?></a></li>
      <li><a class="link"><?php echo $penginapan->nama_penginapan ?></a></li>
    </ol>
    <div class="content-body">
      <div class="row">
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
            <div class="content-amount">

            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="menu-information">
            <?php if ($this->session->userdata('nama') != $penginapan->nama ) { ?>
            <a href=""><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Suka</a>
            <?php } ?>
            <p><i class="fa fa-comment-o" aria-hidden="true"></i> 254</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } 
  $id_penginapan = $penginapan->id_penginapan; ?>
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
              <p class="menu-owner"><?= $rekomendasi->nama ?></p>
              <div class="menu-type"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <?= $rekomendasi->rating ?></div>
              <div class="menu-price">Rp. <?=$rekomendasi->harga ?>,-</div>
            </div>
          </a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<section class="comment">
  <div class="container">
    <h2 class="recomendation-heading">Komentar</h2>
    <?php foreach($komentar as $komentar) ?>
    <div class="comment-box">
      <div class="row">
        <div class="col-md-9">
          <div class="comment-img">  
            <img class="img-circle" src="<?php echo base_url('assets/img/people/default.jpg') ?>" style="max-height: 60px;max-width: 60px">
          </div>
          <div class="comment-name"><?php echo $komentar->nama ?></div>
          <div class="comment-text">
            <p class="comment-desc"><?php echo $komentar->isi_komentar ?></p>
          </div>
        </div>
      </div>
    </div>
    <?php ?>
    <div class="row">
      <div class="col-md-9">
      <?php if ($this->session->userdata('nama')) {?>
        <?php echo form_open('penginapan/setKomentar')?>
        <input type="hidden" name="id_penginapan" value="<?php echo $id_penginapan ?>">
        <div class="form-group">
          <textarea name="komentar" rows="5" class="form-control" placeholder="komentar anda ..."></textarea>
        </div>
        <div class="pull-right">
          <button class="btn btn-red">Komentar</button>
        </div>
        <?php echo form_close() ?>
        <?php } else { ?>
        <p>Silahkan <a href="<?= base_url('pengguna') ?>" class="link-blue">login</a> terlebih dahulu untuk berkomentar atau <a href="<?= base_url('pengguna') ?>" class="link-blue">daftar</a> bila anda belum mempunyai akun.</p>
        <?php } ?>
      </div>
    </div>
  </div>
</section>