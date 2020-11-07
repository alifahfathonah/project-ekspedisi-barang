<?php
if (isset($_POST['save-pengiriman'])) {
   $data        =  [
      'barang' => $_POST['barang'],
      'jenis'  => $_POST['jenis'],
      'berat'  => $_POST['berat'],
      'noResi'  => $_POST['noResi'],
      'layanan'  => $_POST['layanan'],
      'asal'  => $_POST['asal'],
      'tujuan'  => $_POST['tujuan'],
      'harga'  => $_POST['harga']
   ];

   $namaFoto          = $_FILES['foto']['name'];
   $fileFotoSementara = $_FILES['foto']['tmp_name'];
   $ukuranFoto        = $_FILES['foto']['size'];

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
      "folderUpload"        => "../images/barang/"
   ];

   $upload = uploadFile($dataUpload);

   if ($upload <> "noFileUpload") {
      if ($upload <> "notAllowedExtention") {
         if ($upload <> "notAllowedMaxFiles") {
            $data['foto'] = $namaFotoUpload;

            $insertPengiriman = insertPengiriman($data);
            if ($insertPengiriman) {
               notif("Berhasil menambahkan data pengiriman", 'success');
               header("Location: ?page=pengiriman");
            }
         } else {
            notif("Ukuran Foto tidak boleh melebihi 1 Mb", 'warning');
            header("Location: ?page=pengiriman");
         }
      } else {
         notif("Format " . $ekstensi . " TIDAK SESUAI", 'warning');
         header("Location: ?page=pengiriman");
      }
   } else {
      $data['foto'] = null;
      $insertPengiriman = insertPengiriman($data);
      if ($insertPengiriman) {
         notif("Berhasil menambahkan data pengiriman", 'success');
         header("Location: ?page=pengiriman");
      }
   }
}
