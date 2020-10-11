<?php
function getUsers()
{
   global $konek;
   $x = [];
   $sql = "SELECT * FROM `users` inner join profil on users.id_user=profil.id_user";
   $query = mysqli_query($konek, $sql);
   while ($data = mysqli_fetch_assoc($query)) {
      $x[] = $data;
   }
   return $x;
}

function getUsersById($id)
{
   global $konek;
   $sql = "SELECT * FROM `users` inner join profil on users.id_user=profil.id_user WHERE users.id_user='$id'";
   $query = mysqli_query($konek, $sql);
   $data = mysqli_fetch_assoc($query);
   return $data;
}


function insertUsers($data)
{
   //INSERT USERS
   global $konek;
   $sqlUsers = "INSERT INTO `users`(`email`, `username`, `password`, `status`, `level`, `created_at`) VALUES ('$data[email]', '$data[username]', '$data[password]', '$data[status]','$data[level]', CURRENT_TIMESTAMP())";

   $insertUsers = mysqli_query($konek, $sqlUsers); //id = 1
   $id_user = mysqli_insert_id($konek); //id=1

   if ($insertUsers) {
      $sqlProfil = "INSERT INTO `profil`(`nama_depan`, `nama_belakang`, `id_user`) VALUES ('$data[namaDepan]','$data[namaBelakang]','$id_user')";

      $insertProfil = mysqli_query($konek, $sqlProfil);

      return $insertProfil;
   }
}

function updateusers($data)
{
   global $konek;
   if ($data['password'] == null) {
      $sqlUsers = "UPDATE users SET email='$data[email]',username='$data[username]',status='$data[status]',level='$data[level]',updated_at=CURRENT_TIMESTAMP() WHERE id_user='$data[iduser]'";
   } else {
      $sqlUsers = "UPDATE users SET email='$data[email]',pasword='$data[pasword]',namadepan='$data[namadepan]',namaBelakang='$data[namaBelakang]',status='$data[status]',updated_at=CURRENT_TIMESTAMP() WHERE id_user='$data[idusers]'";
   }

   $updateUsers = mysqli_query($konek, $sqlUsers) or die(mysqli_errno($konek));

   if ($updateUsers) {
      $sqlProfil = "UPDATE profil SET nama_depan='$data[namaDepan]',nama_belakang='$data[namaBelakang]' WHERE id_user='$data[iduser]'";

      $updateProfil = mysqli_query($konek, $sqlProfil)
         or die(mysqli_errno($konek));
      return $updateProfil;
   }
}

function deleteUsers($id)
{
   global $konek;
   $sql = "DELETE FROM users WHERE id_user='$id'";
   $query = mysqli_query($konek, $sql) or die(mysqli_errno($konek));
   return $query;
}
