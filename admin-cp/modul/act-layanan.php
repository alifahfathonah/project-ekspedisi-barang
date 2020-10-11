<?php
if (isset($_POST['save-layanan'])) {
   $data = [
      'layanan'    => $_POST['layanan'],
      'keterangan' => $_POST['keterangan'],
      'icon'       => $_POST['icon'],
      'status'       => $_POST['status'] == 'on' ? 'Y' : 'N'
   ];

   $insertData = insertLayanan($data); //benar true / false salah
   if ($insertData) {
      notif("Berhasil Menambahkan data layanan", 'success');
      header("Location: ?page=datalayanan");
   }
}

if (isset($_POST['update-layanan'])) {
   $data = [
      'idlayanan'  => $_POST['idlayanan'],
      'layanan'    => $_POST['layanan'],
      'keterangan' => $_POST['keterangan'],
      'icon'       => $_POST['icon'],
      'status'     => $_POST['status']
   ];

   $insertData = updateLayanan($data); //benar true / false salah
   if ($insertData) {
      notif("Berhasil Menambahkan data layanan", 'success');
      header("Location: ?page=datalayanan");
   }
}

if (isset($_GET['delete'])) {
   if ($_GET['delete'] == 'one') {
      $idLayanan = $_GET['id'];

      $delete = deleteLayanan($idLayanan);
      if ($delete) {
         notif("Berhasil Menghapus data Layanan", 'success');
         header("Location: ?page=datalayanan");
      }
   }
}
