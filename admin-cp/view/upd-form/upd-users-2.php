<?php
$data = getUsersById($_GET['id']);
?>
<h3>Ubah Data Users 2</h3>
<form action="?page=act-users-2" method="POST">
   <input type="text" class="form-control" name="iduser" value="<?= $data['id_user'] ?>" hidden>
   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="<?= $data['email'] ?>">
            <small id="emailHelp" class="form-text text-muted">Masukkan Format email yang benar.</small>
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            <small id="emailHelp" class="form-text text-muted">Kosongkan jika tidak ingin mengubah password.</small>
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="namaDepan">Nama Depan</label>
            <input type="text" class="form-control" id="namaDepan" name="namaDepan" value="<?= $data['nama_depan'] ?>">
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="namaBelakang">Nama Belakang</label>
            <input type="text" class="form-control" id="namaBelakang" name="namaBelakang" value="<?= $data['nama_belakang'] ?>">
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="status">Status</label>
            <div class="form-group form-check">
               <input type="checkbox" class="form-check-input" id="status" name="status" <?= $data['status'] == 'Aktif' ? 'checked' : '' ?>>
               <label class="form-check-label" for="status">Aktif</label>
            </div>
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="level">Level</label>
            <select name="level" id="level" class="form-control">
               <option value="kurir" <?= $data['level'] == 'kurir' ? 'selected' : '' ?>>Kurir</option>
               <option value="admin" <?= $data['level'] == 'admin' ? 'selected' : '' ?>>Admin</option>
               <option value="customer" <?= $data['level'] == 'customer' ? 'selected' : '' ?>>Customer</option>
            </select>
         </div>
      </div>
   </div>
   <div class="row justify-content-center">
      <button type="submit" class="btn btn-primary" name="update-users" style="width:50%">Simpan</button> &nbsp;
      <a href="?page=users" class="btn btn-danger">Batal</a>
   </div>
</form>