





<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<center>
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
<body>
    <div class="main">
        <div class="logo">
            <img src="images/bg5.png">
            <h2>مركز المدينة لتحفيظ القرآن الكريم</h2>
        </div>
        <div class="book">
            <p style="color:red">يرجى تسجيل حساب الادمن </p>
            <form action="login.php" method="post">
                <input type="text" placeholder="أدخل الاسم" name="username"/>
                <input type="password" id="password" placeholder="أدخل الرمز السري " name="password"/>
                <input type="submit" value="تسجيل" name="send"/><br>
                
            </form>
            

<br><br>
</div>
</center>
</body>
</html>


<?php
    $connect=mysqli_connect("localhost","root","","user") or die ("Connection Failed");
    if(!empty($_POST['send']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query="select * from login where username='$username' and password='$password'";
        $result=mysqli_query($connect, $query);
         $count=mysqli_num_rows ($result);
        if($count>0)
        {
          echo "<div class='alert alert-success' role='alert'>
      sucsess
    </div>";
    header( "refresh:1;url=admin.php" );
     }
        }
       
?>
