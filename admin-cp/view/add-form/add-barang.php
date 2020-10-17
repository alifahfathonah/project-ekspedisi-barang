<h3>Tambah Data Barang</h3>
<form action="?page=act-barang" method="POST" enctype="multipart/form-data">
   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="barang">Nama Barang</label>
            <input type="text" class="form-control" id="barang" name="barang">
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="jenis">Jenis</label>
            <select class="form-control" id="jenis" name="jenis" class="form-control">
               <option value="Makanan">Makanan</option>
               <option value="Elekronik">Elekronik</option>
               <option value="Pecah Belah">Pecah Belah</option>
               <option value="Cairan">Cairan</option>
               <option value="Fashion">Fashion</option>
            </select>
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="berat">Berat</label>
            <input type="text" class="form-control" id="berat" name="berat">
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
         </div>
      </div>
   </div>

   <div class="row justify-content-center">
      <button type="submit" class="btn btn-primary" name="save-barang" style="width:50%">Simpan</button> &nbsp;
      <a href="?page=barang" class="btn btn-danger">Batal</a>
   </div>
</form>