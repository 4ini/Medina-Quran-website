<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="sweetalert2.all.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<?php
    include "header.php";
?>


<body>
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
    <th>حذف الطلب</th>
    <th>قبول الطلب</th>
    <th>تعديل الطلب</th>
    <form action="admin.php" method="post">
 <script>
     function DELETE(){
         alert("هل انت متأكد من الحذف؟")
     }</script>
     <script>
                 
     function Accept(ctl, events){
        debugger;
    event.preventDefault();
    var defaultAction = $(ctl).prop("href");
    swal({
        title: "Are you sure?",
        text: "You will  be able to add it back again!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "Cancel",
        closeOnConfirm: false,
        closeOnCancel: false
    },
        function (isConfirm) {
            if (isConfirm) {
                $.get(ctl);
                swal({
                    title: "success",
                    text: "Deleted",
                    confirmButtonText: "ok",
                    allowOutsideClick: "true"
                }, function () { window.location.href = 'accept.php' })

     // $("#signupform").submit();
            } else {
                swal("Cancelled", "Is safe :)", "success");

            }
        });
}
    
               </script>
</body>
<?php

    $host               = "localhost";
    $user               = "root";
    $password      = "";
    $dbName       = "reg";

    $conn = mysqli_connect($host, $user, $password,$dbName);

    // إستيراد معلومات المرضى من قاعدة البيانات

    $query = "SELECT * FROM regdata2";
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
           
            <td><a class='btn btn-danger' onclick='DELETE()' href='delete.php?id=$row[id]'> حذف</td>
            
            <td><a class='btn btn-success' href='accept.php?id=$row[id] '> قبول</a></td>

            <td><a class='btn btn-primary'  name='send2' href='edit.php?id=$row[id]'> تعديل</a></td>
            </tr>
            ";
        }
        echo "</table>";
    }
    else{
        echo "يوجد خطا ما";
    }
    
    

?>


