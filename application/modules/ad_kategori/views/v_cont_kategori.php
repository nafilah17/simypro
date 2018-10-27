
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      
      <!-- isi konten -->
        <div class="col-md-6">
        <div class="box box-info">
        
        <div class="box-header with-border">
          <h3 class="box-title">Form Tambah Kategori Penerima Manfaat</h3>
        </div>
        <!-- /.box-header -->
        <form class="form-horizontal" action="<?php echo base_url('ad_kategori/simpan')?>" method="post" enctype="multipart/form-data" role="form">
        <div class="box-body">
        <div class="form-group">
          <label for="id_kategori" class="col-sm-4 control-label">Kode Kategori</label>
          <div class="col-sm-8">
            <input type="text" name="id_kategori" class="form-control" id="id_kategori" value="<?php echo $kdunik; ?>" readonly>
          </div>
        </div>
        <div class="form-group">
          <label for="nama_kategori" class="col-sm-4 control-label">Nama Kategori</label>
          <div class="col-sm-8">
            <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" required>
          </div>
        </div>
        <div class="form-group">
          <label for="deskripsi" class="col-sm-4 control-label">Deskripsi</label>
          <div class="col-sm-8">
            <textarea class="form-control" rows="3" name="deskripsi" required></textarea>
          </div>
        </div>
        </div>
              <div class="box-footer">
              <button type="submit" class="btn btn-default">Cancel</button>
              <button type="submit" class="btn btn-info pull-right">Simpan</button>
         </div>
              <!-- /.form-group -->
          
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
            <!-- /.box-body -->
          </section>
          </div>
          <!-- /.box -->
          
