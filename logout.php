<?php
include 'include.php';
session_destroy();
unset($_SESSION['fbuser']);
header("Location: index.php");
exit;
?>