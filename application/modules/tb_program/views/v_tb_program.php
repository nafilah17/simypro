<style>
  .text{
  width :950px;
  height :300px;
  margin : 30px 30px 30px 30px;
  padding : 20px 20px 20px 20px;
  overflow-y : auto;
  overflow-x : auto;
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
          <h3 class="box-title">Tabel Program</h3>
          <?php echo $this->session->flashdata('notif'); ?>
        </div>
        <!-- /.box-header -->
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
          </div></div> 
          </div>

          <div class="col-sm-12" align="center">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah Data</button> 
          </div> 
          <br>
          <div class="text">                      
          <table id="example1" class="table table-bordered table-striped"> 
          <tr>
            <th>No</th>
            <th>Nama Bidang</th>
            <th>Kode Program</th>
            <th>Nama Program</th>
            <th>Deskripsi</th>
            <th colspan="2">Action</th>
          </tr>
          <tr>
            <?php 
            $no=1;
             if(isset($program)){
               foreach ($program as $pr){
            ?>            
            <td><?php echo $no++ ?></td>
            <td><?php echo $pr->nama_bidang?></td>
            <td><?php echo $pr->id_program ?></td>
            <td><?php echo $pr->nama_program ?></td>
            <td><?php echo $pr->deskripsi ?></td>
            <td><a href="<?php echo site_url('tb_program/hapus/'.$pr->id_program)?>" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus data  ini ?')"><i class="fa fa-trash" ></i></a>
             <td><a href="javascript:;"
                  data-nama_bidang="<?php echo $pr->nama_bidang ?>"
                  data-id_program="<?php echo $pr->id_program ?>"
                  data-nama_program="<?php echo $pr->nama_program ?>"
                  data-deskripsi="<?php echo $pr->deskripsi ?>"
                  data-toggle="modal" data-target="#edit-data">
                  <button data-toggle="modal" data-target="#ubah" class="btn btn-info"><i class="fa fa-pencil"></i></button></a></td>
          </tr>
            <?php }}?>
            </table>
            </div>
            <div class="box box-default">
            <div class="box-footer">                
              <!-- /.form-group -->


         <!-- modal tambah -->
    <div class="modal fade" id="tambah">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Default 1</h4>
          </div>
          <form class="form-horizontal"  action="<?php echo base_url('tb_program/tambah')?>" method="post" enctype="multipart/form-data" role="form">
          <div class="modal-body">
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

           
  <!-- modal Edit -->
   <div class="modal fade" id="edit-data">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Default 1</h4>
          </div>
          <form class="form-horizontal"  action="<?php echo base_url('tb_program/ubah')?>" method="post" enctype="multipart/form-data" role="form">
          <div class="modal-body">
            <div class="box-body">
               <div class="form-group">
                <label for="no" class="col-sm-4 control-label">No</label>
                  <div class="col-sm-8">
                    <input type="text" name="no" value="<?php echo $pr->no;?>" class="form-control"  readonly>
                  </div>
              </div>
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
                    <input name="id_program" value="<?php echo $pr->id_program;?>" class="form-control" type="text" readonly>
                  </div>
              </div>
              <div class="form-group">
                <label for="nama_program" class="col-sm-4 control-label">Nama Program</label>
                  <div class="col-sm-8">
                    <input type="text" name="nama_program" class="form-control" value="<?php echo $pr->nama_program;?>" required>
                  </div>
              </div>
              <div class="form-group">
                <label for="deskripsi" class="col-sm-4 control-label">Deskripsi</label>
                  <div class="col-sm-8">
                    <textarea name="deskripsi" class="form-control" rows="3" required><?php echo $pr->deskripsi;?></textarea>
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

<script>
    $(document).ready(function(){
      // untuk edit
      $('#edit-data').on('show.bs.modal', function (event){
        var div = $(event.relatedTarget) // tombol dimana modal ditampilkan
        var modal = $(this)

        // isi nilai pada field
        modal.find('#no').attr("value",div.data('no'));
        modal.find('#nama_bidang').attr("value",div.data('nama_bidang'));
        modal.find('#id_program').attr("value",div.data('id_program'));
        modal.find('#nama_program').attr("value",div.data('nama_program'));
        modal.find('#deskripsi').attr("value",div.data('deskripsi'));              
      });
    });
  </script>