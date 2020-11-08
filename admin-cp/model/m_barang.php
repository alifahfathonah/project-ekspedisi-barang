<?php
function getBarang($jenis = null)
{
    global $konek;
    $x = [];
    if ($jenis == null) {
        $sql = "SELECT * FROM tb_barang";
    } else {
        $sql = "SELECT * FROM tb_barang where jenis_barang='$jenis'";
    }
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

function updateBarang($data)
{
    global $konek;
    $sql = "UPDATE tb_barang SET nama_barang='$data[barang]', jenis_barang='$data[jenis]', berat='$data[berat]', foto='$data[foto]' WHERE id_barang='$data[idBarang]'";
    $query = mysqli_query($konek, $sql) or die(mysqli_errno($konek));
    return $query;
}

function deleteBarang($id)
{
    global $konek;
    $sql = "DELETE FROM tb_barang WHERE id_barang='$id'";
    $query = mysqli_query($konek, $sql) or die(mysqli_errno($konek));
    return $query;
}
