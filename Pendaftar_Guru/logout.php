<?php 
session_start();
//Haapus semua data sesi
session_destroy();
// Redirect ke halaman login
header("location: login.php");
?>