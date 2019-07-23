<?php  
  require_once('../../config/database.php');
  require_once('../../classes/class_ppid.php');
  $db = Database::getInstance();
  $ppid = new ppid($db);

  if(isset($_REQUEST['id'])){

    $id = intval($_REQUEST['id']);

    $tampil = $ppid->tampil_regulasi($id);
    $data = $tampil->fetch_object();

    $id = $data->id;
    $nama_regulasi =$data->nama_regulasi;
    $link = $data->link;


  }

?>


<div class="modal-content" id="modal-edit">
  <form id="form_edit_neraca_keuangan">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Ubah Data Regulasi Informasi Publik</h4>
    </div>
    <div class="modal-body">
      <div class="column-full">
          <input type="hidden" name="id" id="id" value="<?=$id;?>">
          <label for="nama_regulasi">Nama Info</label>
          <input type="text" class="form-control" name="nama_regulasi" id="nama_regulasi" value="<?=$nama_regulasi;?>">
      </div>               
      <div class="column-full">
          <label for="penulis">Link</label>
          <input type="text" class="form-control" name="link" id="link" value="<?=$link;?>">
      </div>           
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary" name="input">Ubah</button>
    </div>
  </form>
</div>

<script type="text/javascript">
  $("#form_edit_neraca_keuangan").on("submit", (function(e){

 e.preventDefault();

 $.ajax({

   url :'controller/proses_edit_regulasi.php',

   type :'POST',

   data : new FormData (this),

   contentType : false,

   cache : false,

   processData : false,

   success : function(data){


        alert('data berhasil diubah');

          window.location.href = '?halaman=ppid&ppid=regulasi';

      }
   });  
}));
</script>