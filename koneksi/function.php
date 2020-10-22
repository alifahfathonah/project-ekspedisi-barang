<?php
function notif($pesan, $jenisPesan)
{
   if ($jenisPesan == 'success') {
      $_SESSION['notif'] = "<div class='alert alert-success'>$pesan</div>";
   } else if ($jenisPesan == 'warning') {
      $_SESSION['notif'] = "<div class='alert alert-warning'>$pesan</div>";
   } else if ($jenisPesan == 'danger') {
      $_SESSION['notif'] = "<div class='alert alert-danger'>$pesan</div>";
   }
}

function tampilNotif()
{
   if (isset($_SESSION['notif'])) {
      echo $_SESSION['notif'];
      unset($_SESSION['notif']);
   }
}

function restrictedPageAdmin()
{
   if (empty($_SESSION['Level'])) {
      header("Location: ../index.php");
   } else {
      if ($_SESSION['Level'] == 'customer') {
         header("Location: ../index.php");
      }
   }
}


function uploadFile($data)
{
   if ($data['namaFoto'] <> null) {
      if (in_array($data['ekstensiFile'], $data['ekstensiBoleh'])) {
         if ($data['ukuranFile'] < $data['ukuranBoleh']) {
            $upload = move_uploaded_file($data['fileSementara'], $data['folderUpload'] . '' . $data['namaFilePasDiUpload']);

            if ($upload) {
               return 'success';
            }
         } else {
            return "notAllowedMaxFiles";
         }
      } else {
         return "notAllowedExtention";
      }
   } else {
      return "noFileUpload";
   }
}
