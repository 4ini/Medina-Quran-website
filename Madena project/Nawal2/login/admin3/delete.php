<?php
include("connect.php");
error_reporting(0);
$id = $_GET['id'];
$query = "DELETE FROM regdata3 WHERE id='$id'";
$data = mysqli_query($conn,$query);
if($data){
    echo "Done";
}
else{
    echo "failed";
}
?> 
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=admin.php">