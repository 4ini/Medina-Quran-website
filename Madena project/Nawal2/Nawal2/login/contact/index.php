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
<body style=" background-image: url('bg6.jpg')";>
<br>
<br>
<br>
<br>
<br>
    <div class="main">
        <div class="logo">
            <img src="images/bg5.png">
            <h2>مركز المدينة لتحفيظ القرآن الكريم</h2>
        </div>
        <div class="book">
            <p>  اهلا بك في قسم الدعم الفني يرجى ملئ الاستبيان للملاحظات والمقترحات : </p>
            <form action="index.php" method="post">
                <input type="textarea" placeholder="الملاحظات والمقترحات" name="message" required/>
                <input type="tel" placeholder="رقم التواصل للتأكد من حل المشكلة ( اختياري )" name="phone"/>
                <input type="submit" value="ارسال" name="send"/><br>
                
            </form>
            <a type="button" href="login.php" class="btn btn-secondary">اذا كنت تمتلك حساب الادمن يرجى الضغط هنا</a>
            <?php

// الاتصال بالسيرفر او قاعدة
$host               = "localhost";
$user               = "root";
$password      = "";
$dbName       = "nawal";

$conn = mysqli_connect($host, $user, $password,$dbName);

// ارسال المعلومات المُدخله بواسطة المريض الى قاعدة البيانات

if(isset($_POST['send']) && $_POST['send']){

    $pphone           = $_POST['phone'];
    $pmessage           = $_POST['message'];
    $query = "INSERT INTO data(phone,message) VALUE('$pphone','$pmessage')";
    if($result = mysqli_query($conn,$query)){
    echo "<p style='color:green'>" . "تم الارسال بنجاح , سيتم التواصل قريبا .. شكرا لك" . "</p>";
}
else{
    echo "<p style='color:red'>" . "عفواً حدث خطأ ما .. حاول مجددا " . "</p>";
}}


?>


</div>
</div>
</body>
</html>