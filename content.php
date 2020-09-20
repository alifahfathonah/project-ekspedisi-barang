<?php
// METHOD GET
$halaman = isset($_GET['page']) ? $_GET['page'] : '';

switch ($halaman) {
   case '':
      include 'view/home.php';
      break;
   case 'home':
      include 'view/home.php';
      break;
   case 'contact':
      include 'view/contact-us.php';
      break;
   case 'informasi':
      include 'view/informasi.php';
      break;
   case 'layanan-kami':
      include 'view/layanan-kami.php';
      break;
   case 'ulasan-rating':
      include 'view/ulasan-rating.php';
      break;
   case 'reg':
      include 'view/reg.php';
      break;
   case 'yes':
      include 'view/yes.php';
      break;
   case 'login':
      include 'login.php';
      break;

   default:
      echo "HALAMAN TIDAK DITEMUKAN";
      break;
}
