<h3>Tambah Data Pengiriman</h3>
<form action="?page=act-pengiriman" method="POST" enctype="multipart/form-data">
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

   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="noResi">No. Resi</label>
            <input type="text" class="form-control" readonly id="noResi" name="noResi" value="<?= randomNoResi() ?>">
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="layanan">Layanan</label>
            <select name="layanan" class="form-control">
               <?php foreach (getLayanan() as $layanan) : ?>
                  <option value="<?= $layanan['id_layanan'] ?>"><?= $layanan['layanan'] ?></option>
               <?php endforeach ?>
            </select>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="asal">Asal</label>
            <textarea name="asal" id="asal" rows="3" class="form-control"></textarea>
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="tujuan">Tujuan</label>
            <textarea name="tujuan" id="tujuan" rows="3" class="form-control"></textarea>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6">
         <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga">
         </div>
      </div>
   </div>

   <div class="row justify-content-center">
      <button type="submit" class="btn btn-primary" name="save-pengiriman" style="width:50%">Simpan</button> &nbsp;
      <a href="?page=pengiriman" class="btn btn-danger">Batal</a>
   </div>
</form>