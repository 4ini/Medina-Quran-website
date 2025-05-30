<?php
require 'admin.php';
include("connect.php");

// الاتصال بالسيرفر او قاعدة
$host               = "localhost";
$user               = "root";
$password      = "";
$dbName       = "reg";

$conn = mysqli_connect($host, $user, $password,$dbName);

// ارسال المعلومات المُدخله بواسطة الطالبة الى قاعدة البيانات


    error_reporting(1);
$id = $_GET['id'];
$conn -> query ("INSERT INTO accepted2  SELECT `id`, `Name`, `Age`, `Country`, `Phone`, `Address`, `QuranKnow`, `Level`, `transp`, `Notes`,utc_date() FROM `regdata2`  where id='$id' ");
$conn -> query ("DELETE FROM regdata2 where id='$id' ");

?>

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=admin.php">