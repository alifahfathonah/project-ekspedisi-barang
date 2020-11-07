<?php
if (isset($_POST['update-tracking'])) {
   $data = [
      'noResi'    => $_POST['noResi'],
      'posisi' => $_POST['posisi'],
      'waktu' => date("Y-m-d H:i:s"),
   ];

   $updateData = updateTracking($data); //benar true / false salah
   if ($updateData) {
      notif("Berhasil mengubah data tracking", 'success');
      header("Location: ?page=upd-tracking&id=" . $_POST['noResi'] . "");
   }
}
