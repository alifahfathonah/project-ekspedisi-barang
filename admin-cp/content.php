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
   case 'add-users':
      include 'view/add-form/add-users.php';
      break;
   case 'upd-users':
      include 'view/upd-form/upd-users.php';
      break;


      //AKSI FORM
   case 'act-users':
      include 'modul/act-users.php';
      break;

   default:
      echo "HALAMAN TIDAK DITEMUKAN";
      break;
}
