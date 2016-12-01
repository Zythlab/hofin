<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> HOFIN | Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/vendor.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/app.css">
</head>

<body>
    <div class="main-wrapper">
        <div class="app" id="app">
            <header class="header">
                <div class="header-block header-block-collapse hidden-lg-up"> <button class="collapse-btn" id="sidebar-collapse-btn">
                   <i class="fa fa-bars"></i>
               </button> </div>
               <div class="header-block header-block-buttons">
               <a href="<?php echo base_url() ?>" class="btn btn-oval btn-sm rounded-s header-btn"> <i class="fa fa-home"></i> lihat halaman awal </a>
            </div>
            <div class="header-block header-block-nav">
                <ul class="nav-profile">
                    <li class="profile dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="name">John Doe</span> 
                        </a>
                        <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="<?php echo base_url('pengguna/logout') ?>"> <i class="fa fa-power-off icon"></i> Logout </a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <aside class="sidebar">
            <div class="sidebar-container">
                <div class="sidebar-header">
                    <div class="brand">
                        DASHBOARD </div>
                    </div>
                    <nav class="menu">
                        <ul class="nav metismenu" id="sidebar-menu">
                            <li>
                                <a href="index.html"> <i class="fa fa-home"></i> Dashboard </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <div class="sidebar-overlay" id="sidebar-overlay"></div>
            <article class="content static-tables-page">
                <div class="title-block">
                    <h1 class="title">
                      Penginapan Anda
                  </h1>
                  <div class="pull-right">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-media">Tambah Data</button>
                </div>
            </div>
            <section class="section">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="card-title-block">
                                    <section class="example">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nama Penginapan</th>
                                                    <th>Alamat</th>
                                                    <th>Daerah</th>
                                                    <th>Harga</th>
                                                    <th>Deskripsi</th>
                                                    <th>Kategori</th>
                                                    <th>Rating</th>
                                                    <th>Foto</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($penginapan as $penginapan){ ?>
                                                <tr>
                                                    <td><?php echo $penginapan->nama_penginapan ?></td>
                                                    <td><?php echo $penginapan->alamat ?></td>
                                                    <td><?php echo $penginapan->daerah ?></td>
                                                    <td><?php echo $penginapan->harga ?></td>
                                                    <td><?php echo $penginapan->deskripsi ?></td>
                                                    <td><?php echo $penginapan->kategori ?></td>
                                                    <td><?php echo $penginapan->rating ?></td>
                                                    <td><?php echo $penginapan->foto ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                        data-target="#modal-media<?php echo $penginapan->id_penginapan ?>">Ubah
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#confirm-modal<?= $penginapan->id_penginapan ?>">Hapus
                                                </button>
                                                <div class="modal fade" id="confirm-modal<?= $penginapan->id_penginapan ?>">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                             <span aria-hidden="true">&times;</span>
                                                         </button>
                                                         <h4 class="modal-title"><i class="fa fa-warning"></i> Alert</h4> </div>
                                                         <div class="modal-body">
                                                            <p>Apakah anda yakin ingin menghapus data ini?</p>
                                                        </div>
                                                        <div class="modal-footer"> <a href="<?php echo base_url('penginapan/hapus/') ?><?= $penginapan->id_penginapan?>" class="btn btn-primary">Ya</a> <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button> </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <div class="modal fade" id="modal-media<?php echo $penginapan->id_penginapan ?>">
                                                <div class="modal-dialog modal-lg">
                                                    <?php echo form_open_multipart('penginapan/ubah');?>
                                                    <div class="modal-content">
                                                        <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                         <span aria-hidden="true">&times;</span>
                                                         <span class="sr-only">Close</span>
                                                     </button>
                                                     <h4 class="modal-title">Ubah Penginapan</h4> </div>
                                                     <div class="modal-body">
                                                         <div class="row">
                                                             <input type="hidden" name="id_penginapan" value="<?= $penginapan->id_penginapan?>">
                                                             <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Nama Penginapan</label>
                                                                    <input class="form-control" type="text" name="nama" value="<?= $penginapan->nama_penginapan ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Harga</label>
                                                                    <input class="form-control" type="text" name="harga" value="<?= $penginapan->harga ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Alamat</label>
                                                                    <textarea class="form-control" name="alamat"><?= $penginapan->alamat ?></textarea> 
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="file-input">
                                                                        <img id="pic" src="<?php echo base_url('assets');?>/img/section/fruits.jpg" class="img-responsive" style="max-width: 400px"/>
                                                                    </label>
                                                                    <input type="file" id="file-input-edit" name="foto" class="form-control" size="20"/>
                                                                    <script type="text/javascript">
                                                                        function readURL(input) {
                                                                            if (input.files && input.files[0]) {
                                                                                var reader = new FileReader();

                                                                                reader.onload = function (e) {
                                                                                    $('#pic').attr('src', e.target.result);
                                                                                }

                                                                                reader.readAsDataURL(input.files[0]);
                                                                            }
                                                                        }

                                                                        $("#file-input-edit").change(function(){
                                                                            readURL(this);
                                                                        });
                                                                    </script>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Daerah</label>
                                                                    <select class="form-control" name="daerah">
                                                                        <?php if ($penginapan->daerah == "Kab. Singosari") { ?>
                                                                        <option value="Kab. Singosari" selected>Kab. Singosari</option>
                                                                        <option value="Kab. Jabung">Kab. Jabung</option>
                                                                        <?php } else if($penginapan->daerah == "Kab. Jabung") { ?>
                                                                        <option value="Kab. Singosari" >Kab. Singosari</option>
                                                                        <option value="Kab. Jabung" selected>Kab. Jabung</option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Kategori</label>
                                                                    <select class="form-control" name="kategori">
                                                                        <?php if ($penginapan->kategori == "Homestay") { ?>
                                                                        <option value="Homestay" selected>Homestay</option>
                                                                        <option value="Kontrakan">Kontrakan</option>
                                                                        <?php } else if($penginapan->kategori == "Kontrakan") { ?>
                                                                        <option value="Homestay" >Homestay</option>
                                                                        <option value="Kontrakan" selected>Kontrakan</option>
                                                                        <?php } ?> 
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Deskripsi</label>
                                                                    <textarea class="form-control" name="deskripsi"><?= $penginapan->deskripsi ?></textarea> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer"> 
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                                                        <button type="submit" class="btn btn-primary">Simpan</button> 
                                                    </div>
                                                </div>
                                                <?php echo form_close(); ?>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
</article>
<footer class="footer">
    <div class="footer-block author">
        <ul>
            <li> created by <a href="https://github.com/modularcode">Zythlab</a> </li>
        </ul>
    </div>
</footer>
<div class="modal fade" id="modal-media">
    <div class="modal-dialog modal-lg">
        <?php echo form_open_multipart('penginapan/tambah');?>
        <div class="modal-content">
            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             <span class="sr-only">Close</span>
         </button>
         <h4 class="modal-title">Tambah Penginapan</h4> </div>
         <div class="modal-body">
             <div class="row">
                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Nama Penginapan</label>
                        <input class="form-control" type="text" name="nama">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Harga</label>
                        <input class="form-control" type="text" name="harga">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Alamat</label>
                        <textarea class="form-control" name="alamat"></textarea> 
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Foto
                        </label>
                        <input type="file" id="file-input" name="foto" class="form-control" size="20"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Daerah</label>
                        <select class="form-control" name="daerah">
                            <option value="Kab. Singosari">Kab. Singosari</option>
                            <option value="Kab. Jabung">Kab. Jabung</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Kategori</label>
                        <select class="form-control" name="kategori">
                            <option value="Homestay">Homestay</option>
                            <option value="Kontrakan">Kontrakan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi"></textarea> 
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer"> 
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
            <button type="submit" class="btn btn-primary">Simpan</button> 
        </div>
    </div>
    <?php echo form_close(); ?>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- /.modal -->
</div>
</div>
<script src="<?php echo base_url() ?>assets/dist/js/vendor.js"></script>
<script src="<?php echo base_url() ?>assets/dist/js/app.js"></script>
</body>

</html>