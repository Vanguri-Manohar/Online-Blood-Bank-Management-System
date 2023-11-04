<?php
session_start();
$un=$_SESSION['un'];
unset($un);
session_destroy();
header("Location:index1.php");
?>