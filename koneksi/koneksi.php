<?php
$server = 'localhost';
$user   = 'root';
<<<<<<< HEAD
$pass   = 'zxcv';
$db     = 'db_ekpedisif4';
=======
$pass   = '';
$db     = 'db_ekspedisif4';
>>>>>>> 783ffd254933175e781a1d8f418bc244dd3cf4bd

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
