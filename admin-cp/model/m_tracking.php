<?php
function getTracking()
{
   global $konek;
   $x = [];
   $sql = "SELECT * FROM tracking WHERE id_tracking IN (SELECT MAX(id_tracking) FROM tracking GROUP BY no_resi);";
   $query = mysqli_query($konek, $sql);
   while ($data = mysqli_fetch_assoc($query)) {
      $x[] = $data;
   }
   return $x;
}
function getTrackingById($noResi)
{
   global $konek;
   $x = [];
   $sql = "SELECT * FROM tracking WHERE no_resi='$noResi' order by waktu desc";
   $query = mysqli_query($konek, $sql) or die(mysqli_error($konek));
   while ($data = mysqli_fetch_assoc($query)) {
      $x[] = $data;
   }
   return $x;
}


function updateTracking($data)
{
   global $konek;
   $sql = "INSERT INTO tracking (posisi, waktu, no_resi) VALUES ('$data[posisi]', '$data[waktu]','$data[noResi]')";
   $query = mysqli_query($konek, $sql);
   return $query;
}
