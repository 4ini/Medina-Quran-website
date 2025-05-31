<?php
include("config.php");

extract($_POST);
$query = "INSERT INTO `contact-data`(`firstname`, `lastname`, `phone`, `email`, `messages`) VALUES ('".$firstname."','".$lastname."',".$phone.",'".$email."','".$message."')";
$result = $mysqli->query($query);
if(!$result){
    echo "Couldn't enter data ".$mysqli->err;
}
echo "Thank You For Contacting Us ";
$mysqli->close();
?>