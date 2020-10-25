<?php
//FUNGSI TANPA PARAMETER
function prosesPenjumlahan()
{
   $jumlah = 10 + 3;
   return $jumlah . "<br>";
}

echo prosesPenjumlahan();

echo "<hr>";
//FUNGSI DENGAN PARAMETER
function kalkulator($proses, $nilai1 = 0, $nilai2 = 0)
{
   if ($proses == "+") {
      $jumlah = ($nilai1 + $nilai2);
   } elseif ($proses == "-") {
      $jumlah = ($nilai1 - $nilai2);
   } elseif ($proses == "*") {
      $jumlah = ($nilai1 * $nilai2);
   } elseif ($proses == "/") {
      $jumlah = ($nilai1 / $nilai2);
   }
   return $jumlah;
}

echo kalkulator("+");

include '../koneksi/koneksi.php';
function menampilkanSemuaData($namaTabel)
{
   global $konek;
   $x = [];
   $sql = "SELECT * FROM " . $namaTabel;
   $query = mysqli_query($konek, $sql);
   while ($data = mysqli_fetch_assoc($query)) {
      $x[] = $data;
   }
   return $x;
}


var_dump(menampilkanSemuaData("users"));

echo "<hr>";

function getDataById($id, $namaPrimary, $namatable)
{
   global $konek;
   $sql = "SELECT * FROM $namatable WHERE $namaPrimary='$id'";
   $query = mysqli_query($konek, $sql);
   $data = mysqli_fetch_assoc($query);
   return $data;
}

var_dump(getDataById(4, "id_user", "users"));


// IF KHUSUS

$cek = (2021 % 4 == 0) ? 'Tahun Kabisat' : 'BUkan tahun Kabisat';
echo $cek;
echo "<hr>";
$data = ["Budi", "Ani", "Joko"];

echo $data[2];
foreach ($data as $x) {
   echo $x;
}
