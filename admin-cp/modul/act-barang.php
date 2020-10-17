<?php
if (isset($_POST['save-barang'])) {
    $data        =  [
        'barang' => $_POST['barang'],
        'jenis'  => $_POST['jenis'],
        'berat'  => $_POST['berat']
    ];

    $ekstensiBoleh = ['png', 'jpg', 'gif'];
    $ukuranBoleh = 1048576;

    $namaFoto = $_FILES['foto']['name'];
    $fileFotoSementara = $_FILES['foto']['tmp_name'];
    $ukuranFoto = $_FILES['foto']['size'];

    $ambilEkstensi = explode(".", $namaFoto); //jpg, png
    $ekstensi = strtolower(end($ambilEkstensi));

    $namaFotoUpload = time() . '-' . $namaFoto;
    if ($namaFoto <> null) {
        if (in_array($ekstensi, $ekstensiBoleh)) {
            if ($ukuranFoto < $ukuranBoleh) {
                $data['foto'] = $namaFotoUpload;
                $upload = move_uploaded_file($fileFotoSementara, '../images/' . $namaFotoUpload);

                if ($upload) {
                    $insertBarang = insertBarang($data);
                    if ($insertBarang) {
                        notif("Berhasil menambahkan barang", 'success');
                        header("Location: ?page=barang");
                    }
                }
            } else {
                notif("Ukuran Foto tidak boleh melebihi 1 Mb", 'warning');
                header("Location: ?page=barang");
            }
        } else {
            notif("Format " . $ekstensi . " TIDAK SESUAI", 'warning');
            header("Location: ?page=barang");
        }
    } else {
        $data['foto'] = null;
        $insertBarang = insertBarang($data);
        if ($insertBarang) {
            notif("Berhasil menambahkan barang", 'success');
            header("Location: ?page=barang");
        }
    }
}



if (isset($_GET['delete'])) {
    if ($_GET['delete'] == 'one') {
        $idBarang = $_GET['id'];
        $dataBarang = getBarangById($idBarang);
        $hapusFotodiFolder = unlink('../images/' . $dataBarang['foto']);
        if ($hapusFotodiFolder) {
            $delete = deleteBarang($idBarang);
            if ($delete) {
                notif("Berhasil menghapus data barang", "success");
                header("Location: ?page=barang");
            }
        } else {
            notif("File di folder udah kehapus", "danger");
            header("Location: ?page=barang");
        }
    }
}
