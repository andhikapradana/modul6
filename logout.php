<?php
session_start();
if (!(isset($_SESSION[$tb_siswa]))) {
    header('location:form-login.php');
}

session_destroy();

header("location: form-login.php");
 ?>