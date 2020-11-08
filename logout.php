<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   session_start();
   session_destroy();
   setcookie('login', '', time() - 1);
   header("Location: index.php");
   # code...
} else {
   header("Location: index.php");
}
