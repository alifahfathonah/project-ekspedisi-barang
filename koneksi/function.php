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

function randomNoResi($length = 16)
{
   $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $charactersLength = strlen($characters);
   $randomString = '';
   for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
   }
   return $randomString;
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

function time_elapsed_string($datetime, $full = false)
{
   $now = new DateTime;
   $ago = new DateTime($datetime);
   $diff = $now->diff($ago);

   $diff->w = floor($diff->d / 7);
   $diff->d -= $diff->w * 7;

   $string = array(
      'y' => 'year',
      'm' => 'month',
      'w' => 'week',
      'd' => 'day',
      'h' => 'hour',
      'i' => 'minute',
      's' => 'second',
   );
   foreach ($string as $k => &$v) {
      if ($diff->$k) {
         $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
      } else {
         unset($string[$k]);
      }
   }

   if (!$full) $string = array_slice($string, 0, 1);
   return $string ? implode(', ', $string) . ' ago' : 'just now';
}
