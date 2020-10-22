<?php
session_start();
require '../koneksi/koneksi.php';
require '../koneksi/function.php';
require 'model/m_users.php';
require 'model/m_layanan.php';
require 'model/m_barang.php';
ob_start();

restrictedPageAdmin();
?>
<!doctype html>
<html lang="en">

<head>
   <?php include 'kepala.php'; ?>
</head>

<body>
   <?php include 'header.php'; ?>
   <div class="row container-fluid">
      <div class="col-md-3">
         <?php include 'menu.php'; ?>
      </div>

      <div class="col-md-9">
         <?php include 'content.php'; ?>
      </div>
   </div>

   <?php include 'kaki.php'; ?>
</body>

</html>