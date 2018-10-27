<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      
        <!-- /.box-header -->
         <div class="col-md-6">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Program</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('ad_program/simpan')?>" method="post" enctype="multipart/form-data" role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="bidang" class="col-sm-4 control-label">Bidang</label>
                  <div class="col-sm-8">
                     <select class="form-control" name="nama_bidang" required>
                        <option value="">-- Pilih Program --</option>
                        <?php foreach($get_bidang as $row) { ?>
                          <option value="<?php echo $row->nama_bidang;?>"><?php echo $row->nama_bidang;?></option>
                          <?php  }?>
                      </select>
                  </div>
                </div>
                <div class="form-group">
                <label for="id_program" class="col-sm-4 control-label">Kode Program</label>
                  <div class="col-sm-8">
                    <input type="text" name="id_program" class="form-control" id="id_program" value="<?php echo $kdunik ?>" readonly>
                  </div>
              </div>
                <div class="form-group">
                  <label for="nama_program" class="col-sm-4 control-label">Nama Program</label>
                  <div class="col-sm-8">
                    <input type="text" name="nama_program" class="form-control" id="nama_program" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="deskripsi" class="col-sm-4 control-label">Deskripsi</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" name="deskripsi" required></textarea>
                   </div>
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>



      <div class="row">
        <!-- Left col -->
        
            </div>
            <!-- /.box-header -->
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

          </section>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
