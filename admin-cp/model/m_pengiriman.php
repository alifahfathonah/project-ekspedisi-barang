<?php
function insertPengiriman($data)
{
   global $konek;
   $sqlBarang  = "INSERT INTO tb_barang (nama_barang, jenis_barang, berat, foto) VALUES ('$data[barang]', '$data[jenis]', '$data[berat]','$data[foto]')";

   $insertBarang = mysqli_query($konek, $sqlBarang); //id = 1
   $id_barang = mysqli_insert_id($konek); //id=1

   if ($insertBarang) {
      $sqlPengiriman = "INSERT INTO `pengiriman`(`no_resi`, `harga`, `asal`, `tujuan`, `id_layanan`, `id_barang`) VALUES ('$data[noResi]', '$data[harga]', '$data[asal]', '$data[tujuan]','$data[layanan]', '$id_barang')";

      $sqlTracking = "INSERT INTO tracking(posisi, waktu, no_resi) VALUES('terima permintaan dari client',CURRENT_TIMESTAMP(),'$data[noResi]')";

      $insertPengiriman = mysqli_query($konek, $sqlPengiriman);
      $insertTracking = mysqli_query($konek, $sqlTracking);

      return $insertPengiriman;
   }
}
