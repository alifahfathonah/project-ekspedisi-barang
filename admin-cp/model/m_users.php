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
