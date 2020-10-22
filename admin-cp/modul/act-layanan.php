<?php
if (isset($_POST['save-layanan'])) {
   $data = [
      'layanan'    => $_POST['layanan'],
      'keterangan' => $_POST['keterangan'],
      'link' => $_POST['link'],
      'status'       => $_POST['status'] == 'on' ? 'Y' : 'N'
   ];

   $namaFoto          = $_FILES['icon']['name'];
   $fileFotoSementara = $_FILES['icon']['tmp_name'];
   $ukuranFoto        = $_FILES['icon']['size'];

   $ambilEkstensi = explode(".", $namaFoto); //jpg, png
   $ekstensi = strtolower(end($ambilEkstensi));

   $namaFotoUpload = time() . '-' . $namaFoto;

   $dataUpload = [
      "ekstensiBoleh"       => ['png', 'jpg', 'gif'],
      "ukuranBoleh"         => 1048576,
      "namaFoto"            => $namaFoto,
      "fileSementara"       => $fileFotoSementara,
      "ukuranFile"          => $ukuranFoto,
      "ekstensiFile"        => $ekstensi,
      "namaFilePasDiUpload" => $namaFotoUpload,
      "folderUpload"        => "../images/layanan/"
   ];

   $upload = uploadFile($dataUpload);

   if ($upload <> "noFileUpload") {
      if ($upload <> "notAllowedExtention") {
         if ($upload <> "notAllowedMaxFiles") {
            $data['icon'] = $namaFotoUpload;

            $insertLayanan = insertLayanan($data);
            if ($insertLayanan) {
               notif("Berhasil menambahkan data layanan", 'success');
               header("Location: ?page=datalayanan");
            }
         } else {
            notif("Ukuran Foto tidak boleh melebihi 1 Mb", 'warning');
            header("Location: ?page=datalayanan");
         }
      } else {
         notif("Format " . $ekstensi . " TIDAK SESUAI", 'warning');
         header("Location: ?page=datalayanan");
      }
   } else {
      $data['icon'] = null;
      $insertLayanan = insertLayanan($data);
      if ($insertLayanan) {
         notif("Berhasil menambahkan  data layanan", 'success');
         header("Location: ?page=datalayanan");
      }
   }
}


if (isset($_POST['update-layanan'])) {
   $data = [
      'idlayanan'  => $_POST['idlayanan'],
      'layanan'    => $_POST['layanan'],
      'keterangan' => $_POST['keterangan'],
      'link' => $_POST['link'],
      'status'     => $_POST['status'] == 'on' ? 'Y' : 'N'
   ];

   $namaFoto          = $_FILES['icon']['name'];
   $fileFotoSementara = $_FILES['icon']['tmp_name'];
   $ukuranFoto        = $_FILES['icon']['size'];

   $ambilEkstensi = explode(".", $namaFoto); //jpg, png
   $ekstensi = strtolower(end($ambilEkstensi));

   $namaFotoUpload = time() . '-' . $namaFoto;

   $dataUpload = [
      "ekstensiBoleh"       => ['png', 'jpg', 'gif'],
      "ukuranBoleh"         => 1048576,
      "namaFoto"            => $namaFoto,
      "fileSementara"       => $fileFotoSementara,
      "ukuranFile"          => $ukuranFoto,
      "ekstensiFile"        => $ekstensi,
      "namaFilePasDiUpload" => $namaFotoUpload,
      "folderUpload"        => "../images/layanan/"
   ];

   $upload = uploadFile($dataUpload);

   if ($upload <> "noFileUpload") {
      if ($upload <> "notAllowedExtention") {
         if ($upload <> "notAllowedMaxFiles") {
            $idLayanan = $_POST['idlayanan'];
            $dataLayanan = getLayananById($idLayanan);
            $hapusFotodiFolder = unlink('../images/layanan/' . $dataLayanan['icon']);
            if ($hapusFotodiFolder) {
               $data['icon'] = $namaFotoUpload;

               $updateLayanan = updateLayanan($data);
               if ($updateLayanan) {
                  notif("Berhasil mengubah data layanan", 'success');
                  header("Location: ?page=datalayanan");
               }
            }
         } else {
            notif("Ukuran Foto tidak boleh melebihi 1 Mb", 'warning');
            header("Location: ?page=datalayanan");
         }
      } else {
         notif("Format " . $ekstensi . " TIDAK SESUAI", 'warning');
         header("Location: ?page=datalayanan");
      }
   } else {
      $data['icon'] = null;
      $updateLayanan = updateLayanan($data);
      if ($updateLayanan) {
         notif("Berhasil mengubah data layanan", 'success');
         header("Location: ?page=datalayanan");
      }
   }
}

if (isset($_GET['delete'])) {
   if ($_GET['delete'] == 'one') {
      $idLayanan = $_GET['id'];
      $dataLayanan = getLayananById($idLayanan);
      $hapusFotodiFolder = unlink('../images/layanan/' . $dataLayanan['icon']);
      if ($hapusFotodiFolder) {
         $delete = deleteLayanan($idLayanan);
         if ($delete) {
            notif("Berhasil Menghapus data Layanan", 'success');
            header("Location: ?page=datalayanan");
         }
      } else {
         notif("File di folder udah kehapus", "danger");
         header("Location: ?page=datalayanan");
      }
   }
}
