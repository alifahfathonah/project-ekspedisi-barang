<?php
$data = getBarangById($_GET['id']);
?>

<h3>Ubah Data Barang</h3>
<form action="?page=act-barang" method="POST" enctype="multipart/form-data">
   <input type="text" hidden id="idBarang" name="idBarang" value="<?= $data['id_barang'] ?>">
   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="barang">Nama Barang</label>
            <input type="text" class="form-control" id="barang" name="barang" value="<?= $data['nama_barang'] ?>">
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="jenis">Jenis</label>
            <select class="form-control" id="jenis" name="jenis" class="form-control">
               <option value="Makanan" <?= $data['jenis_barang'] == 'Makanan' ? 'selected' : '' ?>>Makanan</option>
               <option value="Elekronik" <?= $data['jenis_barang'] == 'Elektronik' ? 'selected' : '' ?>>Elekronik</option>
               <option value="Pecah Belah" <?= $data['jenis_barang'] == 'Pecah Belah' ? 'selected' : '' ?>>Pecah Belah</option>
               <option value="Cairan" <?= $data['jenis_barang'] == 'Cairan' ? 'selected' : '' ?>>Cairan</option>
               <option value="Fashion" <?= $data['jenis_barang'] == 'Fashion' ? 'selected' : '' ?>>Fashion</option>
            </select>
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="berat">Berat</label>
            <input type="text" class="form-control" id="berat" name="berat" value="<?= $data['berat'] ?>">
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col">

      </div>
      <div class="col text-center">
         <div class="form-group">
            <label for="foto">Foto</label>
            <img src="../images/barang/<?= $data['foto'] ?>" alt="" width="35%">
         </div>
      </div>
   </div>

   <div class="row justify-content-center">
      <button type="submit" class="btn btn-primary" name="update-barang" style="width:50%">Simpan</button> &nbsp;
      <a href="?page=barang" class="btn btn-danger">Batal</a>
   </div>
</form>