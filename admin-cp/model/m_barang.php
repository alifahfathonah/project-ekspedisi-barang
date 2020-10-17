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
function getBarangById($id)
{
    global $konek;
    $sql = "SELECT * FROM tb_barang WHERE id_barang='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_assoc($query);
    return $data;
}

function insertBarang($data)
{
    global $konek;
    $sql = "INSERT INTO tb_barang (nama_barang, jenis_barang, berat, foto) VALUES ('$data[barang]', '$data[jenis]', '$data[berat]','$data[foto]')";
    $query = mysqli_query($konek, $sql);
    return $query;
}

function deleteBarang($id)
{
    global $konek;
    $sql = "DELETE FROM tb_barang WHERE id_barang='$id'";
    $query = mysqli_query($konek, $sql) or die(mysqli_errno($konek));
    return $query;
}
