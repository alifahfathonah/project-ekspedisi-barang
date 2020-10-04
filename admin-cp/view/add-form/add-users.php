<h3>Tambah Data Users</h3>
<form action="?page=act-users" method="POST">
   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            <small id="emailHelp" class="form-text text-muted">Masukkan Format email yang benar.</small>
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="namaDepan">Nama Depan</label>
            <input type="text" class="form-control" id="namaDepan" name="namaDepan">
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="namaBelakang">Nama Belakang</label>
            <input type="text" class="form-control" id="namaBelakang" name="namaBelakang">
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="status">Status</label>
            <div class="form-group form-check">
               <input type="checkbox" class="form-check-input" id="status" name="status" checked>
               <label class="form-check-label" for="status">Aktif</label>
            </div>
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="level">Level</label>
            <select name="level" id="level" class="form-control">
               <option value="customer">Customer</option>
               <option value="kurir">Kurir</option>
               <option value="admin">Admin</option>
            </select>
         </div>
      </div>
   </div>
   <center>
      <button type="submit" class="btn btn-primary" name="save-users" style="width:50%">Simpan</button>
      <a href="?page=users" class="btn btn-danger">Batal</a>
   </center>
</form>