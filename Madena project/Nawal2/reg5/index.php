
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Draste Students registeration</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/JannaLTRegular.css"></head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body style=" background-image: url('bg4.png'); background-repeat: no-repeat;";>
<br>
<br>


    <div class="main">
        <div class="logo">
            <img src="images/bg5.png">
            <h2>مركز المدينة لتحفيظ القرآن الكريم</h2>
            <a class="btn btn-primary" href="../index.html">الصفحة الرئيسية</a>
            <a class="btn btn-secondary" href="../index2.html">العودة لإختيار الفئة</a>  
        </div>
        <div class="book">
            <p>تسجيل أصحاب الهمم : </p>
            <form action="index.php" method="post">
                <input type="textarea" placeholder="الأسم" name="Name" required/><br>
				<input type="tel" placeholder="العمر" name="Age" required/><br>
                <input type="textarea" placeholder="الجنسية" name="Country" required/><br>
                <input type="tel" placeholder="رقم الهاتف" name="Phone" required/><br>
                <input type="textarea" placeholder="المنطقة السكنية" name="Address" required/><br>
                <input type="textarea" placeholder="الحفظ السابق ( إن وجد )" name="QuranKnow"/><br>
				<select name="Level" class="form-select" style="width:auto; margin-right:auto; margin-left:auto;">
                <option value="first">مستوى الطالبة</option>
				<option value="مستجدة">مستجدة</option>
				<option value="حافظة">حافظة</option>
				<option value="خاتمة">خاتمة</option>
</select>
                <select name="a7aqh" class="form-select" style="width:auto; margin-right:auto; margin-left:auto;" >
                <option value="second">نوع الإعاقة</option>
				<option value="بصرية">بصرية</option>
				<option value="سمعية">سمعية</option>
				<option value="حركية">حركية</option>
				</select>
                <select name="transp" class="form-select" style="width:auto; margin-right:auto; margin-left:auto;" >
                <option value="third">النقل</option>
				<option value="تحتاج الى مواصلات">تحتاج الى مواصلات</option>
				<option value="لا تحتاج الى مواصلات">لا تحتاج الى مواصلات</option>
				</select>
				<input type="textarea" placeholder="ملاحظات" name="Notes"/><br>
				

              <!--  <h5><label for="formFileMultiple" class="form-label">تحميل صورة الهوية ( الجهتين )</label></h5>
<center><input class="form-control" type="file" id="formFileMultiple" multiple /></center>
<h5><label for="formFileLg" class="form-label">الصورة الشخصية</label></h5>
<center><input class="form-control form-control-md" id="formFileLg" type="file" /></center> -->
                <input type="submit" value="حفظ" name="send"/><br>
                
            </form>
            <?php

// الاتصال بالسيرفر او قاعدة
$host               = "localhost";
$user               = "root";
$password      = "";
$dbName       = "reg";

$conn = mysqli_connect($host, $user, $password,$dbName);

// ارسال المعلومات المُدخله بواسطة الطالبة الى قاعدة البيانات

if(isset($_POST['send']) && $_POST['send']){

    $Name = $_POST['Name'];
	$Age = $_POST['Age'];
	$Country = $_POST['Country'];
    $Phone = $_POST['Phone'];
	$Address = $_POST['Address'];
	$QuranKnow = $_POST['QuranKnow'];
	$Level = $_POST['Level'];
    $a7aqh = $_POST['a7aqh'];
    $transp = $_POST['transp'];
    $Notes = $_POST['Notes'];
    $query = "INSERT INTO regdata5(Name,Age,Country,Phone,Address,QuranKnow,Level,a7aqh,transp,Notes) VALUE('$Name','$Age','$Country','$Phone','$Address','$QuranKnow','$Level','$a7aqh','$transp','$Notes')";
    if($result = mysqli_query($conn,$query)){
    echo "<p style='color:green'>" . "تم الارسال بنجاح  " . "</p>";
}
else{
    echo "<p style='color:red'>" . "عفواً حدث خطأ ما .. حاول مجددا " . "</p>";
}}

?>


</div>
</div>
</body>
</html>