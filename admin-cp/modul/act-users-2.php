<?php
if (isset($_POST['save-users'])) {
   $pecahEmail = explode('@', $_POST['email']);
   $data = [
      'username'     => $pecahEmail[0],
      'namaDepan'    => $_POST['namaDepan'],
      'namaBelakang' => $_POST['namaBelakang'],
      'password'     => $_POST['password'],
      'email'        => $_POST['email'],
      'level'        => $_POST['level'],
      'status'       => $_POST['status'] == 'on' ? 'Aktif' : 'Tidak Aktif'
   ];

   $insertData = insertUsers($data); //benar true / false salah
   if ($insertData) {
      notif("Berhasil Menambahkan data users", 'success');
      header("Location: ?page=users-2");
   }
}

if (isset($_POST['update-users'])) {
   $pecahEmail = explode('@', $_POST['email']);
   $data = [
      'iduser'       => $_POST['iduser'],
      'username'     => $pecahEmail[0],
      'namaDepan'    => $_POST['namaDepan'],
      'namaBelakang' => $_POST['namaBelakang'],
      'password'     => $_POST['password'],
      'email'        => $_POST['email'],
      'level'        => $_POST['level'],
      'status'       => $_POST['status'] == 'on' ? 'Aktif' : 'Tidak Aktif'
   ];

   $updateData = updateUsers($data);
   if ($updateData) {
      notif("Berhasil mengubah data users", 'success');
      header("Location: ?page=users-2");
   }
}


if (isset($_GET['delete'])) {
   if ($_GET['delete'] == 'one') {
      $idUser = $_GET['id'];

      $delete = deleteUsers($idUser);
      if ($delete) {
         notif("Berhasil Menghapus data users", 'success');
         header("Location: ?page=users-2");
      }
   }
}
