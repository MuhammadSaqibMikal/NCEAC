<?php
ob_start();
session_start();
require_once 'dbconnect.php';
if (!isset($_SESSION["fbuser"])) {
    header("Location: index.php");
    exit();
}
$user=$_SESSION['fbuser'];
$query1=mysql_query("select * from emp where Emp_Id='$user'");
$rec1=mysql_fetch_array($query1);
$empid=$rec1[0];
$empname = $rec1[1];
$empdesination = $rec1[3];
$empdepartment = $rec1[4];
$emptype = $rec1[5];
?>