<?php
// info
function getInfo()
{
    global $konek;
    $sql = "SELECT * FROM `tb_info` WHERE id_info=1";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_assoc($query);
    return $data;
}


function getMenu($judul = null)
{
    global $konek;
    if ($judul == null) {
        $sql = "SELECT * FROM `tb_menu` ";
    } else {
        $sql = "SELECT * FROM `tb_menu` WHERE judul = '$judul'";
    }
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_assoc($query);
    return $data;
}
