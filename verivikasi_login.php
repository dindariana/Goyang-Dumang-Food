<?php
include('connect.php');
session_start();
unset($_SESSION ["username"]);
unset($_SESSION["password"]);
session_destroy();

echo "<script>alert('selamat datang');
        window.location='login.php';
    </script>";
?>