<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);

//echo '<script> alert("Thank You Connecting With FMS");</script>';
header('Refresh: 2; URL = login.php');
session_destroy();

?>