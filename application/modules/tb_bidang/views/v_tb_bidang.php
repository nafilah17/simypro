<style>
  .text{
  width :950px;
  height :300px;
  margin : 30px 30px 30px 30px;
  padding : 20px 20px 20px 20px;
  overflow-y : auto;
  overflow-x : scroll;
   }
  </style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      
      <!-- isi konten -->
    <div class="col-md-12">
    <div class="box box-info">
        
    <div class="box-header with-border">
    <h3 class="box-title">Tabel Bidang</h3>
    <?php echo $this->session->flashdata('notif'); ?>
    </div>

    <div class="box-body">
                   
      <div class="col-sm-8">
      <div class="dataTables_length" id="example1_length">
      <label>Show<select name="example1_length" aria-controls="example1" class="form-control input-sm">
      <option value="10">10</option><option value="25">25</option>
      <option value="50">50</option><option value="100">100</option>
      </select>
      </label>
      </div>
      </div>

      <div class="col-sm-4">
      <div id="example1_filter" class="dataTables_filter">
      <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
      </label>
      </div>
      </div> 
      </div> 
      <div class="col-sm-12" align="center">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah Data</button> 
      </div> 
      <br>
      <div class="text" >                    
      <table id="example1"  class="table table-bordered table-striped" > 
        <tr>
          <th>No</th>
          <th>Kode Bidang</th>
          <th>Nama Bidang</th>
          <th>Deskripsi</th>
          <th colspan="2">Action</th>
        </tr>
        <tr>
          <?php 
           $no=1;
            if(isset($bidang)){
             foreach ($bidang as $bid){
          ?>            
            <td><?php echo $no++ ?></td>
            <td><?php echo $bid->id_bidang ?></td>
            <td><?php echo $bid->nama_bidang ?></td>
            <td><?php echo $bid->deskripsi ?></td>
            <td><a href="<?php echo site_url('tb_bidang/hapus/'.$bid->id_bidang)?>" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus data ini?')"><i class="fa fa-trash"></i></a></td>
            <td><a class="btn btn-info" href="javascript:;"
                  
                  data-id_bidang="<?php echo $bid->id_bidang ?>"
                  data-nama_bidang="<?php echo $bid->nama_bidang ?>"
                  data-deskripsi="<?php echo $bid->deskripsi ?>"
                  data-toggle="modal" data-target="#edit-data">
                  <i class="fa fa-pencil"></i></a></td>
        </tr>
          <?php }}?>
      </table>
    </div>
    <div class="box box-default">
    <div class="box-footer">

         

          <!-- modal tambah -->
    <div class="modal fade" id="tambah">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Default 1</h4>
          </div>
          <form class="form-horizontal"  action="<?php echo base_url('tb_bidang/tambah')?>" method="post" enctype="multipart/form-data" role="form">
          <div class="modal-body">
            <div class="box-body">
              <div class="form-group">
                <label for="id_bidang" class="col-sm-4 control-label">Kode Bidang</label>
                  <div class="col-sm-8">
                    <input type="text" name="id_bidang" class="form-control" id="id_bidang" value="<?php echo $kdunik ?>" readonly>
                  </div>
              </div>
              <div class="form-group">
                <label for="nama_bidang" class="col-sm-4 control-label">Nama Bidang</label>
                  <div class="col-sm-8">
                    <input type="text" name="nama_bidang" class="form-control" id="nama_bidang" required>
                  </div>
              </div>
              <div class="form-group">
                <label for="deskripsi" class="col-sm-4 control-label">Deskripsi</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" name="deskripsi" required></textarea>
                  </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
            <!-- /.modal-content -->
      </div>
          <!-- /.modal-dialog -->
    </div>
        <!-- /.modal -->
</div>

         
<!--  value="<?php echo $bid->nama_bidang;?>" 
  value="<?php echo $bid->nama_bidang;?>"
  value="<?php echo $bid->deskripsi;?>"
-->
 
  <!-- modal Edit -->
   <div class="modal fade" id="edit-data">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Default 1</h4>
          </div>
          <form class="form-horizontal"  action="<?php echo base_url('tb_bidang/ubah')?>" method="post" enctype="multipart/form-data" role="form">
          <div class="modal-body">
            <div class="box-body">
              <div class="form-group">
                <label for="id_bidang" class="col-sm-4 control-label">Kode Bidang</label>
                  <div class="col-sm-8">
                    <input type="text" id="id_bidang" name="id_bidang" class="form-control"  readonly>
                  </div>
              </div>
              <div class="form-group">
                <label for="nama_bidang" class="col-sm-4 control-label">Nama Bidang</label>
                  <div class="col-sm-8">
                    <input type="text" id="nama_bidang" name="nama_bidang" class="form-control" required>
                  </div>
              </div>
              <div class="form-group">
                <label for="deskripsi" class="col-sm-4 control-label">Deskripsi</label>
                  <div class="col-sm-8">
                    <textarea id="deskripsi" name="deskripsi" class="form-control" rows="3" required></textarea>
                  </div>
              </div>
            </div>
          </div>

          <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
        </div>
            <!-- /.modal-content -->
      </div>
          <!-- /.modal-dialog -->
    </div>
        <!-- /.modal -->
  </section>
    <!-- /.content -->
</div>

