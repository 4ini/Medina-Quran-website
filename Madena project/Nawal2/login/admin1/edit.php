<?php
include_once 'connect.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE regdata set id='" . $_POST['id'] . "', Name='" . $_POST['Name'] . "', Age='" . $_POST['Age'] . "', Country='" . $_POST['Country'] . "', Phone='" . $_POST['Phone'] . "' , Address='" . $_POST['Address'] . "' , QuranKnow='" . $_POST['QuranKnow'] . "' , Level='" . $_POST['Level'] . "' , transp='" . $_POST['transp'] . "' , Notes='" . $_POST['Notes'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "<div class='alert alert-success'>
تم التعديل بنجاح
</div>";
}
$result = mysqli_query($conn,"SELECT * FROM regdata WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> صفحة تعديل البيانات</title>
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
        margin-top:50px;
    }
    h1{
      text-align: center;
    }
    </style>
</head>
<body>
<div class="container">
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;" >
<h1>تعديل البيانات : </h1>
<a class="btn btn-primary" href="../index.html">الصفحة الرئيسية</a>
<a class="btn btn-primary" href="./admin.php">صفحة التحكم</a>
</div>
<h3><label >رقم الطلب : </label></h3>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id" class="form-control input-lg"  value="<?php echo $row['id']; ?>">

<h3><label >الإسم :</label></h3>
<input type="text" name="Name" class="form-control input-lg" class="txtField" value="<?php echo $row['Name']; ?>">

<h3><label >العمر :</label></h3>
<input type="text" name="Age" class="form-control input-lg" class="txtField" value="<?php echo $row['Age']; ?>">

<h3><label >الجنسية :</label></h3>
<input type="text" name="Country" class="form-control input-lg" class="txtField" value="<?php echo $row['Country']; ?>">

<h3><label >رقم الهاتف :</label></h3>
<input type="text" name="Phone" class="form-control input-lg" class="txtField" value="<?php echo $row['Phone']; ?>">

<h3><label >المنطقة السكنية :</label></h3>
<input type="text" name="Address" class="form-control input-lg" class="txtField" value="<?php echo $row['Address']; ?>">

<h3><label >حفظ القرآن :</label></h3>
<input type="text" name="QuranKnow" class="form-control input-lg" class="txtField" value="<?php echo $row['QuranKnow']; ?>">


<h3><label >مستوى الحفظ :</label></h3>
<select name="Level" class="form-control input-lg">
                <option  value="مستوى الطالبة">مستوى الطالبة</option>
				<option value="مستجدة"
        <?php if($row["Level"]=='مستجدة') {
          echo "selected";
        } ?>
        >
          مستجدة</option>

				<option value="حافظة"
        <?php if($row["Level"]=='حافظة') {
          echo "selected";
        } ?>
        >حافظة</option>

				<option value="خاتمة"
        <?php if($row["Level"]=='خاتمة') {
          echo "selected";
        } ?>
        >خاتمة</option>
				</select>

        
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <h3><label >المواصلات :</label></h3>
        <select name="transp" class="form-control input-lg" >
        
				<option value="تحتاج الى مواصلات"
        <?php if($row["transp"]=='تحتاج الى مواصلات') {
          echo "selected";
        } ?>
        >تحتاج الى مواصلات</option>
				<option value="لا تحتاج الى مواصلات"
        <?php if($row["transp"]=='لاتحتاج الى مواصلات') {
          echo "selected";
        } ?>
        >لا تحتاج الى مواصلات</option>
				</select>


<h3><label >الملاحظات :</label></h3>
<input type="text" name="Notes" class="form-control input-lg" class="txtField" value="<?php echo $row['Notes']; ?>">
<br>

<input class="btn btn-primary" type="submit" name="submit" value="حفظ التغيير" class="buttom">

</form>
</body>
</html>