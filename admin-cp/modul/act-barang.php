<?php
if (isset($_GET['delete'])) {
    if ($_GET['delete'] == 'one') {
        $idBarang = $_GET['id'];
        $delete = deleteBarang($idBarang);
        if ($delete) {
            notif("Berhasil menghapus data barang", "success");
            header("Location: ?page=barang");
        }
    }
}
