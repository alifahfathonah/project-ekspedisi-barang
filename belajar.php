<?php

$nama    = "Budi"; //STRING
$umur    = 23; //INTEGER
$ipk     = 3.4; //FLOAT DECIMAL
$pilihan = true; //BOOLEAN
echo $nama; //tampil budi

$hasil = 7 + 4 * 2 / (3 - 5);
echo $hasil;

$data = ["budi", 23, 3.4, true]; //ARRAY NUMERIC
echo $data[2];

$data2 = [
   "username" => "budi",
   "nama"    => "budi",
   "umur"    => 23,
   "ipk"     => 3.4,
   "pilihan" => true
]; //ARRAY ASSOCIATIVE

echo $data2['username '];
