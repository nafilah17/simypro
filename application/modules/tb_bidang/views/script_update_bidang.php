<script>
    $(document).ready(function(){
      // untuk edit
      $('#edit-data').on('show.bs.modal', function (event){
        var div = $(event.relatedTarget); // tombol dimana modal ditampilkan
        var modal = $(this);

        console.log(div);

        // isi nilai pada field
        //modal.find('#no').attr("value",div.data('no'));
        modal.find('#id_bidang').attr("value",div.data('id_bidang'));
        modal.find('#nama_bidang').attr("value",div.data('nama_bidang'));
        modal.find('#deskripsi').html(div.data('deskripsi'));              
      });
    });
</script>