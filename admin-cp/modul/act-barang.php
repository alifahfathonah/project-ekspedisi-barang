<?php
if (isset($_POST['save-barang'])) {
    $data        =  [
        'barang' => $_POST['barang'],
        'jenis'  => $_POST['jenis'],
        'berat'  => $_POST['berat']
    ];

    $namaFoto          = $_FILES['foto']['name'];
    $fileFotoSementara = $_FILES['foto']['tmp_name'];
    $ukuranFoto        = $_FILES['foto']['size'];

    $ambilEkstensi = explode(".", $namaFoto); //jpg, png
    $ekstensi = strtolower(end($ambilEkstensi));

    $namaFotoUpload = time() . '-' . $namaFoto;

    $dataUpload = [
        "ekstensiBoleh"       => ['png', 'jpg', 'gif'],
        "ukuranBoleh"         => 1048576,
        "namaFoto"            => $namaFoto,
        "fileSementara"       => $fileFotoSementara,
        "ukuranFile"          => $ukuranFoto,
        "ekstensiFile"        => $ekstensi,
        "namaFilePasDiUpload" => $namaFotoUpload,
        "folderUpload"        => "../images/barang/"
    ];

    $upload = uploadFile($dataUpload);

    if ($upload <> "noFileUpload") {
        if ($upload <> "notAllowedExtention") {
            if ($upload <> "notAllowedMaxFiles") {
                $data['foto'] = $namaFotoUpload;

                $insertBarang = insertBarang($data);
                if ($insertBarang) {
                    notif("Berhasil menambahkan barang", 'success');
                    header("Location: ?page=barang");
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

if (isset($_POST['update-barang'])) {
    $data        =  [
        'idBarang' => $_POST['idBarang'],
        'barang' => $_POST['barang'],
        'jenis'  => $_POST['jenis'],
        'berat'  => $_POST['berat']
    ];

    $namaFoto          = $_FILES['foto']['name'];
    $fileFotoSementara = $_FILES['foto']['tmp_name'];
    $ukuranFoto        = $_FILES['foto']['size'];

    $ambilEkstensi = explode(".", $namaFoto); //jpg, png
    $ekstensi = strtolower(end($ambilEkstensi));

    $namaFotoUpload = time() . '-' . $namaFoto;

    $dataUpload = [
        "ekstensiBoleh"       => ['png', 'jpg', 'gif'],
        "ukuranBoleh"         => 1048576,
        "namaFoto"            => $namaFoto,
        "fileSementara"       => $fileFotoSementara,
        "ukuranFile"          => $ukuranFoto,
        "ekstensiFile"        => $ekstensi,
        "namaFilePasDiUpload" => $namaFotoUpload,
        "folderUpload"        => "../images/barang/"
    ];

    $upload = uploadFile($dataUpload);

    if ($upload <> "noFileUpload") {
        if ($upload <> "notAllowedExtention") {
            if ($upload <> "notAllowedMaxFiles") {
                $idBarang = $_POST['idBarang'];
                $dataBarang = getBarangById($idBarang);
                $hapusFotodiFolder = unlink('../images/barang/' . $dataBarang['foto']);
                if ($hapusFotodiFolder) {
                    $data['foto'] = $namaFotoUpload;

                    $updateBarang = updateBarang($data);
                    if ($updateBarang) {
                        notif("Berhasil mengubah barang", 'success');
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
        $updateBarang = updateBarang($data);
        if ($insertBarang) {
            notif("Berhasil mengubah barang", 'success');
            header("Location: ?page=barang");
        }
    }
}





if (isset($_GET['delete'])) {
    if ($_GET['delete'] == 'one') {
        $idBarang = $_GET['id'];
        $dataBarang = getBarangById($idBarang);
        $hapusFotodiFolder = unlink('../images/barang/' . $dataBarang['foto']);
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
