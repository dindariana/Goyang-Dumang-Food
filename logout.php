<?php
session_start();
unset($_SESSION ["username"]);
unset($_SESSION["password"]);
session_destroy();

echo "<script>alert('Anda yakin akan keluar ?');
        window.location='login.php';
    </script>";
?>