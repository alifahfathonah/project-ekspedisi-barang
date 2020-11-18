<?php
// METHOD GET
$halaman = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

if ($_SESSION['Level'] == 'admin') {
   switch ($halaman) {
      case 'dashboard':
         include 'view/dashboard.php';
         break;
      case 'logout':
         include '../logout.php';
         break;

      case 'users-2':
         include 'view/users-2.php';
         break;
      case 'add-users-2':
         include 'view/add-form/add-users-2.php';
         break;
      case 'upd-users-2':
         include 'view/upd-form/upd-users-2.php';
         break;

      case 'datalayanan':
         include 'view/datalayanan.php';
         break;
      case 'add-layanan':
         include 'view/add-form/add-layanan.php';
         break;

      case 'upd-layanan':
         include 'view/upd-form/upd-layanan.php';
         break;

      case 'barang':
         include 'view/barang.php';
         break;
      case 'add-barang':
         include 'view/add-form/add-barang.php';
         break;
      case 'upd-barang':
         include 'view/upd-form/upd-barang.php';
         break;

      case 'pengiriman':
         include 'view/pengiriman.php';
         break;
      case 'add-pengiriman':
         include 'view/add-form/add-pengiriman.php';
         break;


         //AKSI FORM
      case 'act-users':
         include 'modul/act-users.php';
         break;

      case 'act-users-2':
         include 'modul/act-users-2.php';
         break;

      case 'act-layanan':
         include 'modul/act-layanan.php';
         break;

      case 'act-barang':
         include 'modul/act-barang.php';
         break;
      case 'act-pengiriman':
         include 'modul/act-pengiriman.php';
         break;

      default:
         echo "HALAMAN TIDAK DITEMUKAN";
         break;
   }
} else {
   switch ($halaman) {
      case 'dashboard':
         include 'view/dashboard.php';
         break;
      case 'tracking':
         include 'view/tracking.php';
         break;
      case 'upd-tracking':
         include 'view/upd-form/upd-tracking.php';
         break;
      case 'logout':
         include '../logout.php';
         break;

      case 'act-tracking':
         include 'modul/act-tracking.php';
         break;
      default:
         echo "HALAMAN TIDAK DITEMUKAN";
         break;
   }
}
