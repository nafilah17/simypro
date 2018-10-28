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
  <h3 class="box-title">Tabel Proposal</h3>
  <?php echo $this->session->flashdata('notif'); ?>
  </div>
        
  <div class="box-body">

    <div class="col-sm-8">
    <div class="dataTables_length" id="example1_length">
    <label>show<select name="example1_length" aria-controls="example1" class="form-control input-sm">
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
    <br>
    <br>
    </div>

<!-- tabel -->
    <div class="text">                      
    <table id="example1" class="table table-bordered table-striped">
    <tr>
      <th>No</th>
      <th>Kode Proposal</th>
      <th>Nama kontak</th>
      <th>Nama Lembaga</th>
      <th>Alamat Lembaga</th>
      <th>Kecamatan</th>
      <th>Kota / Kab</th>
      <th>Wilayah</th>
      <th>No. Telepon</th>
      <th>Tanggal Masuk</th>
      <th>Bulan Masuk</th>
      <th>Kode Program</th>
      <th>Nama Program</th>
      <th>Kode Bidang</th>
      <th>Nama Bidang</th>
      <th>Kode Kategori</th>
      <th>Nama Kategori</th>
      <th>Jumlah Pengajuan</th>
      <th>Bentuk Pengajuan</th>
      <th>Tanggal Survey</th>
      <th>Rekomendasi</th>
      <th colspan="2">Action</th> 
    </tr>
    <tr>
      <?php
        $no=1;
          if(isset($proposal)){
          foreach($proposal as $pro){ 
      ?>
        <td><?php echo $no++ ?></td>
        <td><?php echo $pro->id_proposal ?></td>
        <td><?php echo $pro->nama_kontak ?></td>
        <td><?php echo $pro->nama_lembaga ?></td>
        <td><?php echo $pro->alamat_lembaga ?></td>
        <td><?php echo $pro->kecamatan ?></td>
        <td><?php echo $pro->kota_kab ?></td>
        <td><?php echo $pro->wil_malang ?></td>
        <td><?php echo $pro->telepon ?></td>
        <td><?php echo $pro->tgl_masuk ?></td>
        <td><?php echo $pro->bulan_masuk ?></td>
        <td><?php echo $pro->id_program ?></td>
        <td><?php echo $pro->nama_program ?></td>
        <td><?php echo $pro->id_bidang ?></td>
        <td><?php echo $pro->nama_bidang ?></td>
        <td><?php echo $pro->id_kategori ?></td>
        <td><?php echo $pro->nama_kategori ?></td>
        <td><?php echo $pro->jml_pengajuan ?></td>
        <td><?php echo $pro->bentuk_pengajuan ?></td>
        <td><?php echo $pro->tgl_survei ?></td>
        <td><?php echo $pro->rekomendasi ?></td>
        <td><a href="<?php echo site_url('tb_proposal/hapus/'.$pro->id_proposal)?>" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus data  ini ?')"><i class="fa fa-trash" ></i></a>
         <td><a href="javascript:;"
                  data-id_proposal="<?php echo $pro->id_proposal ?>"
                  data-nama_kontak="<?php echo $pro->nama_kontak ?>"
                  data-nama_lembaga="<?php echo $pro->nama_lembaga ?>"
                  data-alamat_lembaga="<?php echo $pro->alamat_lembaga ?>"
                  data-kecamatan="<?php echo $pro->kecamatan ?>"
                  data-kota_kab="<?php echo $pro->kota_kab ?>"
                  data-wil_malang="<?php echo $pro->wil_malang ?>"
                  data-telepon="<?php echo $pro->telepon ?>"
                  data-tgl_masuk="<?php echo $pro->tgl_masuk ?>"
                  data-bulan_masuk="<?php echo $pro->bulan_masuk ?>"
                  data-id_program="<?php echo $pro->id_program ?>"
                  data-nama_program="<?php echo $pro->nama_program ?>"
                  data-id_bidang="<?php echo $pro->id_bidang ?>"
                  data-nama_bidang="<?php echo $pro->nama_bidang ?>"
                  data-id_kategori="<?php echo $pro->id_kategori ?>"
                  data-nama_kategori="<?php echo $pro->nama_kategori ?>"
                  data-jml_pengajuan="<?php echo $pro->jml_pengajuan ?>"
                  data-bentuk_pengajuan="<?php echo $pro->bentuk_pengajuan ?>"
                  data-id_proposal="<?php echo $pro->id_proposal ?>"
                  data-tgl_survei="<?php echo $pro->tgl_survei?>"
                  data-rekomendasi="<?php echo $pro->rekomendasi ?>"                 
                  data-toggle="modal" data-target="#edit-data">
                  <button data-toggle="modal" data-target="#ubah" class="btn btn-info"><i class="fa fa-pencil"></i></button></a></td>
    </tr>
      <?php }} ?>
    </table>
     <a class="btn btn-primary btn-sm" type="button" href="<?php echo base_url('tb_proposal/export') ?>" >Export ke Excel</a>
  </div>
  <div class="box box-default">
  <div class="box-footer">
  
 <!-- modal tambah-->                 
<div class="modal fade" id="tambah">
  <div class="col-md-12"> <!-- bagi jadi 2 side -->
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Data Proposal</h4>
        </div>
        <form class="form-horizontal"  action="<?php echo base_url('tb_proposal/tambah')?>" method="post" enctype="multipart/form-data" role="form">
          <div class="modal-body">
            <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="id_proposal" class="col-sm-4 control-label">Kode Proposal</label>
                    <div class="col-sm-8">
                      <input type="text" name="id_proposal" class="form-control" id="id_proposal" value="<?php echo $kdunik; ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                  <label for="nama_kontak" class="col-sm-4 control-label">Nama Kontak</label>
                    <div class="col-sm-8">
                      <input type="text" name="nama_kontak" class="form-control" id="nama_kontak" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="nama_lembaga" class="col-sm-4 control-label">Nama Lembaga</label>
                    <div class="col-sm-8">
                      <input type="text" name="nama_lembaga" class="form-control" id="nama_lembaga" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="alamat_lembaga" class="col-sm-4 control-label">Alamat Lembaga</label>
                    <div class="col-sm-8">
                      <input type="text" name="alamat_lembaga" class="form-control" id="alamat_lembaga" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="kecamatan" class="col-sm-4 control-label">Kecamatan</label>
                    <div class="col-sm-8">
                      <input type="text" name="kecamatan" class="form-control" id="kecamatan" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="kota_kab" class="col-sm-4 control-label">Kota / Kabupaten</label>
                    <div class="col-sm-8">
                      <input type="text" name="kota_kab" class="form-control" id="kota_kab" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="kota_kab" class="col-sm-4 control-label">Wilayah</label>
                    <div class="col-sm-8">
                      <select class="form-control select2" style="width: 100%;" name="wil_malang" required>
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
                      <input type="text" name="telepon" class="form-control" id="telepon" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="tgl_masuk" class="col-sm-4 control-label">Tanggal Masuk</label>
                    <div class="col-sm-8">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" value="<?php echo set_value('tgl_masuk');?>" name="tgl_masuk" class="form-control pull-right" id="datepicker" required>
                      </div> <?php?>
                    </div>
                </div>
                <div class="form-group">
                  <label for="bulan_masuk" class="col-sm-4 control-label">Bulan Masuk</label>
                    <div class="col-sm-8">
                      <input type="text" name="bulan_masuk" class="form-control" id="bulan_masuk" required>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="id_program" class="col-sm-4 control-label">Kode Program</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="id_program" required>
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
                        <input type="text" name="nama_program" class="form-control" id="nama_program" placeholder="">
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="id_bidang" class="col-sm-4 control-label">Kode Bidang</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="id_bidang" required>
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
                        <input type="text" name="nama_bidang" class="form-control" id="nama_bidang" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="id_kategori" class="col-sm-4 control-label">Kode Kategori</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="id_kategori" required>
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
                          <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" required>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="jml_pengajuan" class="col-sm-4 control-label">Jumlah Pengajuan</label>
                        <div class="col-sm-8">
                        <input type="text" name="jml_pengajuan" class="form-control" id="jml_pengajuan" required>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="bentuk_pengajuan" class="col-sm-4 control-label">Bentuk Pengajuan</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="bentuk_pengajuan" id="bentuk_pengajuan" required>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="tgl_survey" class="col-sm-4 control-label">Tanggal Survey</label>
                      <div class="col-sm-8">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" value="<?php echo set_value('tgl_survei');?>" name="tgl_survei" class="form-control pull-right" id="datepicker" required>
                        </div> <?php?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="rekomendasi" class="col-sm-4 control-label">Rekomendasi</label>
                      <div class="col-sm-8">
                        <input type="text" name="rekomendasi" class="form-control" id="rekomendasi" required>
                      </div>
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
            </div >
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
        </div>
      </section>
    </div>
  

  <?php
        $no=1;
          if(isset($proposal)){
          foreach($proposal as $pro){ 
      ?>

<!-- modal edit -->                 
<div class="modal fade" id="edit-data">
  <div class="col-md-12">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Data Proposal</h4>
        </div>
          <form class="form-horizontal"  action="<?php echo base_url('tb_proposal/ubah')?>" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="no" class="col-sm-4 control-label">No</label>
                      <div class="col-sm-8">
                    <input type="text" name="no" value="<?php echo $pro->no;?>" class="form-control"  readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="id_proposal" class="col-sm-4 control-label">Kode Proposal</label>
                    <div class="col-sm-8">
                      <input type="text" name="id_proposal" class="form-control" id="id_proposal" value="<?php echo $pro->id_proposal; ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                  <label for="nama_kontak" class="col-sm-4 control-label">Nama Kontak</label>
                    <div class="col-sm-8">
                      <input type="text" name="nama_kontak" class="form-control" value="<?php echo $pro->nama_kontak;?>" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="nama_lembaga" class="col-sm-4 control-label">Nama Lembaga</label>
                    <div class="col-sm-8">
                      <input type="text" name="nama_lembaga" class="form-control" value="<?php echo $pro->nama_lembaga;?>" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="alamat_lembaga" class="col-sm-4 control-label">Alamat Lembaga</label>
                    <div class="col-sm-8">
                      <input type="text" name="alamat_lembaga" class="form-control" value="<?php echo $pro->alamat_lembaga;?>" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="kecamatan" class="col-sm-4 control-label">Kecamatan</label>
                    <div class="col-sm-8">
                      <input type="text" name="kecamatan" class="form-control" value="<?php echo $pro->kecamatan;?>" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="kota_kab" class="col-sm-4 control-label">Kota / Kabupaten</label>
                    <div class="col-sm-8">
                      <input type="text" name="kota_kab" class="form-control" value="<?php echo $pro->kota_kab;?>" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="kota_kab" class="col-sm-4 control-label">Wilayah</label>
                    <div class="col-sm-8">
                      <select class="form-control select2" style="width: 100%;" name="wil_malang" value="<?php echo $pro->wil_malang;?>" required>
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
                      <input type="text" name="telepon" class="form-control" value="<?php echo $pro->telepon;?>" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="tgl_masuk" class="col-sm-4 control-label">Tanggal Masuk</label>
                    <div class="col-sm-8">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" value="<?php echo set_value('tgl_masuk');?>" name="tgl_masuk" class="form-control pull-right" id="datepicker" required>
                      </div> <?php?>
                    </div>
                </div>
                <div class="form-group">
                  <label for="bulan_masuk" class="col-sm-4 control-label">Bulan Masuk</label>
                    <div class="col-sm-8">
                      <input type="text" name="bulan_masuk" class="form-control" value="<?php echo $pro->bulan_masuk;?>" required>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="id_program" class="col-sm-4 control-label">Kode Program</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="id_program" required>
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
                        <input type="text" name="nama_program" class="form-control" value="<?php echo $pro->nama_program;?>"" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="id_bidang" class="col-sm-4 control-label">Kode Bidang</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="id_bidang" required>
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
                        <input type="text" name="nama_bidang" class="form-control" value="<?php echo $pro->nama_bidang;?>"" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="id_kategori" class="col-sm-4 control-label">Kode Kategori</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="id_kategori" required>
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
                          <input type="text" name="nama_kategori" class="form-control" value="<?php echo $pro->nama_kategori;?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="jml_pengajuan" class="col-sm-4 control-label">Jumlah Pengajuan</label>
                        <div class="col-sm-8">
                        <input type="text" name="jml_pengajuan" class="form-control" value="<?php echo $pro->jml_pengajuan;?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="bentuk_pengajuan" class="col-sm-4 control-label">Bentuk Pengajuan</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="bentuk_pengajuan" value="<?php echo $pro->bentuk_pengajuan;?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="tgl_survey" class="col-sm-4 control-label">Tanggal Survey</label>
                      <div class="col-sm-8">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" value="<?php echo set_value('tgl_survei');?>" name="tgl_survei" class="form-control pull-right" id="datepicker" required>
                        </div> <?php?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="rekomendasi" class="col-sm-4 control-label">Rekomendasi</label>
                      <div class="col-sm-8">
                        <input type="text" name="rekomendasi" class="form-control" value="<?php echo $pro->rekomendasi;?>"" required>
                      </div>
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
      </div>
      
    <?php }}?>
       
  <script>
    $(document).ready(function(){
      // untuk edit
      $('#edit-data').on('show.bs.modal', function (event){
        var div = $(event.relatedTarget) // tombol dimana modal ditampilkan
        var modal = $(this)

        // isi nilai pada field
        modal.find('#no').attr("value",div.data('no'));
        modal.find('#id_proposal').attr("value",div.data('id_proposal'));
        modal.find('#nama_kontak').attr("value",div.data('nama_kontak'));
        modal.find('#nama_lembaga').attr("value",div.data('nama_lembaga'));
        modal.find('#kecamatan').attr("value",div.data('kecamatan'));
        modal.find('#kota_kab').attr("value",div.data('kota_kab'));
        modal.find('#wil_malang').attr("value",div.data('wil_malang'));
        modal.find('#telepon').attr("value",div.data('telepon'));
        modal.find('#tgl_masuk').attr("value",div.data('tgl_masuk'));
        modal.find('#bulan_masuk').attr("value",div.data('bulan_masuk'));
        modal.find('#id_program').attr("value",div.data('id_program'));
        modal.find('#nama_program').attr("value",div.data('nama_program'));
        modal.find('#id_bidang').attr("value",div.data('id_bidang'));
        modal.find('#nama_bidang').attr("value",div.data('nama_bidang'));
        modal.find('#id_kategori').attr("value",div.data('id_kategori'));
        modal.find('#nama_kategori').attr("value",div.data('nama_kategori'));
        modal.find('#jml_pengajuan').attr("value",div.data('jml_pengajuan'));
        modal.find('#bentuk_pengajuan').attr("value",div.data('bentuk_pengajuan'));
        modal.find('#tgl_survei').attr("value",div.data('tgl_survei'));
        modal.find('#rekomendasi').attr("value",div.data('rekomendasi'));              
      });
    });
  </script>