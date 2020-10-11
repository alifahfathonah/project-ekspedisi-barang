<?php
function getLayananById($id)
{
   global $konek;
   $sql = "SELECT * FROM layanan WHERE id_layanan='$id'";
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
   $sql = "DELETE FROM tb_layanan WHERE id_layanan='$id'";
   $query = mysqli_query($konek, $sql) or die(mysqli_errno($konek));
   return $query;
}

function updatelayanan($data)
{
   global $konek;
   $sqllayanan = "UPDATE layanan SET layanan='$data[layanan]',keterangan='$data[keterangan]',icon='$data[icon]' WHERE id_layanan='$data[id_layanan]'";

   $updatelayanan = mysqli_query($konek, $sqllayanan) or die(mysqli_errno($konek));

   return $updatelayanan;
}
