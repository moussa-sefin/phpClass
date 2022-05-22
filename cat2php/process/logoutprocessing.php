<?php
session_start();
unset($_SESSION['stdid']);
session_destroy();
header("Location:../login.php");

?>