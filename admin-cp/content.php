<?php
// METHOD GET
$halaman = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

switch ($halaman) {
   case 'dashboard':
      include 'view/dashboard.php';
      break;

   case 'users':
      include 'view/users.php';
      break;

   default:
      echo "HALAMAN TIDAK DITEMUKAN";
      break;
}
