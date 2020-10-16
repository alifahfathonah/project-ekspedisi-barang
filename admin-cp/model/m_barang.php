<?php
function getBarang()
{
    global $konek;
    $x = [];
    $sql = "SELECT * FROM tb_barang";
    $query = mysqli_query($konek, $sql);
    while ($data = mysqli_fetch_assoc($query)) {
        $x[] = $data;
    }
    return $x;
}

function deleteBarang($id)
{
    global $konek;
    $sql = "DELETE FROM tb_barang WHERE id_barang='$id'";
    $query = mysqli_query($konek, $sql) or die(mysqli_errno($konek));
    return $query;
}
