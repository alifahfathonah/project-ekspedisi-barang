<?php
if (isset($_POST['save-users'])) {

   $email        = $_POST['email'];
   $password     = $_POST['password'];
   $namaDepan    = $_POST['namaDepan'];
   $namaBelakang = $_POST['namaBelakang'];
   $status       = $_POST['status'] == 'on' ? 'Aktif' : 'Tidak Aktif';
   $level        = $_POST['level'];

   //ade123@gmail@com
   $getUsername = explode('@', $email);
   // MENGAMBIL USERNAME DARI EMAIl
   // 0 -> ade123
   // 1-> gmail.com
   // 2-> com
   $username = $getUsername[0];

   $sqlUsers = "INSERT INTO `users`(`email`, `username`, `password`, `status`, `level`, `created_at`) VALUES ('$email','$username','$password','$status','$level', CURRENT_TIMESTAMP())";
   $queryUsers = mysqli_query($konek, $sqlUsers) or die(mysqli_error($konek));

   $idUser = mysqli_insert_id($konek);
   if ($queryUsers) {
      $sqlProfil = "INSERT INTO `profil`(`nama_depan`, `nama_belakang`,`id_user`) VALUES ('$namaDepan','$namaBelakang','$idUser')";
      $queryProfil = mysqli_query($konek, $sqlProfil) or die(mysqli_error($konek));

      if ($queryProfil) {
         notif("Berhasil insert data users", 'success');
         header("Location: ?page=users");
      }
   }
} else {
   echo "503 Access Forbidden";
}

if (isset($_POST['update-users'])) {
   $iduser        = $_POST['iduser'];
   $email        = $_POST['email'];
   $password     = $_POST['password'];
   $namaDepan    = $_POST['namaDepan'];
   $namaBelakang = $_POST['namaBelakang'];
   $status       = $_POST['status'] == 'on' ? 'Aktif' : 'Tidak Aktif';
   $level        = $_POST['level'];

   $getUsername = explode('@', $email); //MENGAMBIL USERNAME DARI EMAIl
   // 0 -> ade123
   // 1-> gmail.com
   // 2-> com
   $username = $getUsername[0];

   $sqluser = "UPDATE `users` SET `email`='$email',`username`='$username',`password`='$password',`status`='$status',`level`='$level',`updated_at`=CURRENT_TIMESTAMP() WHERE id_user='$iduser'";
   $queryUsers = mysqli_query($konek, $sqluser) or die(mysqli_errno($konek));

   if ($queryUsers) {
      $sqlProfil =
         "UPDATE `profil` SET `nama_depan`='$namaDepan',`nama_belakang`='$namaBelakang' WHERE id_user='$iduser'";
      $queryProfil = mysqli_query($konek, $sqlProfil) or die(mysqli_error($konek));
      if ($queryProfil) {
         notif("Berhasil Update data users", 'success');
         header("Location: ?page=users");
      }
   }
}


if (isset($_GET['aksi'])) {
   if ($_GET['aksi'] == 'delete') {
      $iduser = $_GET['id'];

      $sql = "DELETE FROM `users` WHERE id_user='$iduser'";
      $query = mysqli_query($konek, $sql) or die(mysqli_errno($konek));
      if ($query) {
         notif("Berhasil hapus data users", 'success');
         header("Location: ?page=users");
      }
   }
}
