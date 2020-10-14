<?php
function getLayanan()
{
   global $konek;
   $x = [];
   $sql = "SELECT * FROM tb_layanan";
   $query = mysqli_query($konek, $sql);
   while ($data = mysqli_fetch_assoc($query)) {
      $x[] = $data;
   }
   return $x;
}

function getLayananById($id)
{
   global $konek;
   $sql = "SELECT * FROM `tb_layanan` WHERE id_layanan='$id'";
   $query = mysqli_query($konek, $sql);
   $data = mysqli_fetch_assoc($query);
   return $data;
}

function insertLayanan($data)
{
   global $konek;
   $sqllay = "INSERT INTO `tb_layanan`(`layanan`, `keterangan`, `icon`, `status`) VALUES ('$data[layanan]', '$data[keterangan]', '$data[icon]', '$data[status]')";
   $insertlay = mysqli_query($konek, $sqllay);
   return $insertlay;
}

function deleteLayanan($id)
{
   global $konek;
   $sql = "DELETE FROM `tb_layanan` WHERE id_layanan='$id'";
   $query = mysqli_query($konek, $sql) or die(mysqli_errno($konek));
   return $query;
}

function updatelayanan($data)
{
   global $konek;
   $sqllayanan = "UPDATE tb_layanan SET layanan='$data[layanan]',keterangan='$data[keterangan]',icon='$data[icon]',status='$data[status]' WHERE id_layanan='$data[idlayanan]'";

   $updatelayanan = mysqli_query($konek, $sqllayanan) or die(mysqli_errno($konek));

   return $updatelayanan;
}
