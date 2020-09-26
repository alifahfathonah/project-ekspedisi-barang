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
            echo "<script>alert('Berhasil Login')</script>";
         } else {
            echo "<script>alert('Akun tidak aktif. Silakan hubungi admin')</script>";
         }
      } else {
         echo "<script>alert('Password tidak valid')</script>";
      }
   } else {
      echo "<script>alert('Email tidak valid')</script>";
   }
} else {
   echo "<script>alert('Email atau password harap diisi terlebih dahulu')</script>";
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
