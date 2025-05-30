<?php
include_once 'connect.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE regdata2 set id='" . $_POST['id'] . "', Name='" . $_POST['Name'] . "', Age='" . $_POST['Age'] . "', Country='" . $_POST['Country'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM regdata2 WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;500&display=swap" rel="stylesheet">
<style>
    *{
        font-family: 'Tajawal', sans-serif;
    }</style>
</head>
<body>
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div class="container">
  <h2>تعديل البيانات</h2>
  <form action="">
    <div class="form-group">
      <label for="id">رقم الطلب :</label>
      <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
      <input type="text"  class="form-control" name="id"  value="<?php echo $row['id']; ?>">
    </div>
    <div class="form-group">
      <label for="Name">الإسم:</label>
      <input type="text" name="Name"  class="form-control" class="txtField" value="<?php echo $row['Name']; ?>">
    </div>
    <div class="form-group">
    <label >العمر :</label>
<input type="text" name="Age"  class="form-control" class="txtField" value="<?php echo $row['Age']; ?>">
<br>
    </div>
    <div class="form-group">
    <label for="Country">الجنسية :</label>
<input type="text" name="Country"  class="form-control" class="txtField" value="<?php echo $row['Country']; ?>">
<br>
    </div>

    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
