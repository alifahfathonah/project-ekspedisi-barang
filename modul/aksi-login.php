<?php
$email    = $_POST['email'];
$password = $_POST['password'];

$sql       = "SELECT * FROM users WHERE email = '$email'";
$query     = mysqli_query($konek, $sql);
$dataUsers = mysqli_fetch_assoc($query); //mengambil data users berdasarkan email

if (!empty($email) or !empty($password)) {
   if ($dataUsers !== null) {
      if ($password == $dataUsers['password']) {
         if ($dataUsers['status'] == 'Aktif') {
            notif("Berhasil Login", "success");
            $_SESSION['IdUser']   = $dataUsers['id_user'];
            $_SESSION['Email']    = $dataUsers['email'];
            $_SESSION['Username'] = $dataUsers['username'];
            $_SESSION['Status']   = $dataUsers['status'];
            $_SESSION['Level']    = $dataUsers['level'];
            $_SESSION['LoginAt']  = $dataUsers['login_at'];

            header("Location: index.php");
         } else {
            notif("Akun tidak aktif. Silakan hubungi admin", "warning");
            header("Location: ?page=login");
         }
      } else {
         notif("Password tidak valid", "danger");
         header("Location: ?page=login");
      }
   } else {
      notif("Email tidak valid", "danger");
      header("Location: ?page=login");
   }
} else {
   notif("Email tidak valid", "danger");
}


// $cekEmail    = ($email    == 'admin@gmail.com'); //HASILNYA TRUE / FALSE
// $cekPassword = ($password == '123'); //HASILNYA TRUE / FALSE
// $cekStatus   = 'Aktif';

// if ($email !== 'admin@gmail.com' && $password !== '123') {
//    echo "Email dan password salah";
// } else if ($email !== 'admin@gmail.com') {
//    echo "email Salah";
// } else if ($password !== '123') {
//    echo 'password Salah';
// } else if ($cekStatus !== 'Aktif') {
//    echo 'status tidak aktif';
// } else {
//    echo "Login Berhasil";
// }
