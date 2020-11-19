<?php
session_start();
require 'koneksi/koneksi.php';
require 'koneksi/function.php';
require 'admin-cp/model/m_layanan.php';
require 'modul/m_infodanmenu.php';
?>
<!doctype html>
<html lang="en">

<head>
    <?php include 'kepala.php'; ?>
</head>

<body>

    <?php
    $p = isset($_GET['page']) ? $_GET['page'] : '';
    if ($p == 'layanan-kami' or $p == 'yes' or $p == 'reg') {
        include 'header-kuning.php';
    } else {
        include 'header.php';
    }
    ?>

    <?php include 'content.php'; ?>

    <?php
    if ($p == 'layanan-kami') {
        include 'footer-kuning.php';
    } else {
        include 'footer.php';
    }
    ?>

    <?php include 'kaki.php'; ?>

</body>

</html>