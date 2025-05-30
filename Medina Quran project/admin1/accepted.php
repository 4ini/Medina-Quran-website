<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<?php
    include "header.php";
?>


<body>
<div class="text-center">
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">طبع سجل المقبولين</button>
      </div>
      <br>
      
<table id="Dataid" class="display">
<th>رقم الطلب</th>
    <th>الأسم</th>
    <th>العمر</th>
    <th>الجنسية</th>
    <th>رقم الهاتف</th>
    <th>المنطقة السكنية</th>
    <th>الحفظ السابق ( إن وجد )</th>
    <th>مستوى الحفظ</th>
    <th>المواصلات</th>
    <th>الملاحظات</th>
    <th>وقت القبول</th>

 
</body>
<?php

    $host               = "localhost";
    $user               = "root";
    $password      = "";
    $dbName       = "reg";

    $conn = mysqli_connect($host, $user, $password,$dbName);

    // إستيراد معلومات المرضى من قاعدة البيانات

    $query = "SELECT * FROM accepted";
    $result = mysqli_query($conn,$query);

    if ($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "
            <tr>
            <td>".$row['id']."</td>
            <td>".$row['Name']."</td>
            <td>".$row['Age']."</td>
            <td>".$row['Country']."</td>
            <td>".$row['Phone']."</td>
            <td>".$row['Address']."</td>
            <td>".$row['QuranKnow']."</td>
            <td>".$row['Level']."</td>
            <td>".$row['transp']."</td>
            <td>".$row['Notes']."</td>
            <td>".$row['Date']."</td>

            </tr>
            ";
            
        }
        echo "</table>";
    }
    else{
        echo "يوجد خطا ما";
    }
    
    

?>

