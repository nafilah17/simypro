<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      
        <!-- /.col -->
     
     <div class="box-tools pull-right">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">FORM PROPOSAL</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('ad_proposal/simpan')?>" method="post" enctype="multipart/form-data" role="form" >
              <div class="box-body">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="idProposal" class="col-sm-4 control-label">Kode Proposal</label>
                  <div class="col-sm-8">
                   <input type="text" name='id_proposal' class="form-control" value="<?php echo $kdunik; ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="nama_kontak" class="col-sm-4 control-label">Nama Kontak</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_kontak" name="nama_kontak" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="nama_lembaga" class="col-sm-4 control-label">Nama Lembaga</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_lembaga" name="nama_lembaga" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="alamat_lembaga" class="col-sm-4 control-label">Alamat Lembaga</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="alamat_lembaga" name="alamat_lembaga" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="kecamatan" class="col-sm-4 control-label">Kecamatan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="kecamatan" name="kecamatan"  placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="kota_kab" class="col-sm-4 control-label">Kota / Kabupaten</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="kota_kab" name="kota_kab" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="kota_kab" class="col-sm-4 control-label">Wilayah</label>
                  <div class="col-sm-8">
                <select class="form-control select2" style="width: 100%;" name="wil_malang">
                  <option selected="selected">Kota Malang</option>
                  <option>Kota Malang</option>
                  <option>Malang Selatan</option>
                  <option>Malang Utara</option>
                  <option>Malang Barat</option>
                  <option>Malang Timur</option>
                  <option>Luar Kota</option>
                </select>
                </div>
                </div>

                <div class="form-group">
                  <label for="telepon" class="col-sm-4 control-label">No. Telepon</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="telepon" name="telepon" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="tgl_masuk" class="col-sm-4 control-label">Tanggal Masuk</label>
                  <div class="col-sm-8">
                    <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="tgl_masuk">
                </div>
                </div>
                </div>

                <div class="form-group">
                  <label for="bulan_masuk" class="col-sm-4 control-label">Bulan Masuk</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="bulan_masuk" name="bulan_masuk" placeholder="">
                  </div>
                </div>

              </div> <!-- pembatas col -->

                <div class="col-md-6">
                <div class="form-group">
                  <label for="id_program" class="col-sm-4 control-label">Kode Program</label>
                  <div class="col-sm-8">
                  <select class="form-control" name="id_program">
                        <option value="">-- Pilih Program --</option>
                        <?php foreach($get_category1 as $row) { ?>
                          <option value="<?php echo $row->id_program;?>"><?php echo $row->id_program;?></option>
                          <?php  }?>
                      </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="nama_program" class="col-sm-4 control-label">Nama Program</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_program" name="nama_program" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="id_bidang" class="col-sm-4 control-label">Kode Bidang</label>
                  <div class="col-sm-8">
                  <select class="form-control" name="id_bidang">
                        <option value="">-- Pilih Bidang --</option>
                        <?php foreach($get_category2 as $row) { ?>
                          <option value="<?php echo $row->id_bidang;?>"><?php echo $row->id_bidang;?></option>
                          <?php  }?>
                        </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="nama_bidang" class="col-sm-4 control-label">Nama Bidang</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_bidang" name="nama_bidang" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="id_kategori" class="col-sm-4 control-label">Kode Kategori</label>
                  <div class="col-sm-8">
                  <select class="form-control" name="id_kategori">
                        <option value="">-- Pilih Kategori --</option>
                        <?php foreach($get_category3 as $row) { ?>
                          <option value="<?php echo $row->id_kategori;?>"><?php echo $row->id_kategori;?></option>
                          <?php  }?>
                        </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="nama_kategori" class="col-sm-4 control-label">Nama Kategori</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="jml_pengajuan" class="col-sm-4 control-label">Jumlah Pengajuan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="jml_pengajuan" name="jml_pengajuan" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="bentuk_pengajuan" class="col-sm-4 control-label">Bentuk Pengajuan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="bentuk_pengajuan" name="bentuk_pengajuan" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                <label for ="tgl_survei" class="col-sm-4 control-label">Tanggal Survey</label>
                <div class="col-sm-8">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tgl_survei" class="form-control pull-right" id="reservation" name="tgl_survei">
                </div>
                </div>
              </div>

                <div class="form-group">
                  <label for="rekomendasi" class="col-sm-4 control-label">Rekomendasi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="rekomendasi" name="rekomendasi" placeholder="">
                  </div>
                </div>
              

                <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>



                 
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        </div>
            <div class="box-body no-padding">
              <div class="row">
                <div class="col-md-9 col-sm-8">
                  <div class="pad">
                    <!-- Map will be created here -->
                    
                  </div>
                </div>
                <!-- /.col -->
                
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </section>
          </div>
          <!-- /.box -->
