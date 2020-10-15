<?php
$server = 'localhost';
$user   = 'root';
$pass   = 'zxcv';
$db     = 'db_ekpedisif4';
$konek = mysqli_connect($server, $user, $pass, $db) or die("Terjadi kesalahan");

// CEK COOKIES
if (isset($_COOKIE['login'])) {
   if (empty($_SESSION['IdUser'])) {
      $IdUser = $_COOKIE['login'];
      $sql = "SELECT * FROM users WHERE id_user = '$IdUser'";
      $query     = mysqli_query($konek, $sql);
      $dataUsers = mysqli_fetch_assoc($query);

      $_SESSION['IdUser']   = $dataUsers['id_user'];
      $_SESSION['Email']    = $dataUsers['email'];
      $_SESSION['Username'] = $dataUsers['username'];
      $_SESSION['Status']   = $dataUsers['status'];
      $_SESSION['Level']    = $dataUsers['level'];
      $_SESSION['LoginAt']  = $dataUsers['login_at'];
   }
}
