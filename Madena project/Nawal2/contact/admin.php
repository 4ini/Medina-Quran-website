
<?php

    include "header.php";

?>

<table>
    <th>رقم الطلب</th>
    <th>الملاحظة / الأقتراح</th>
    <th>رقم الهاتف</th>
   

<?php

    $host               = "localhost";
    $user               = "root";
    $password      = "";
    $dbName       = "nawal";

    $conn = mysqli_connect($host, $user, $password,$dbName);

    // إستيراد معلومات المرضى من قاعدة البيانات

    $query = "SELECT * FROM data";
    $result = mysqli_query($conn,$query);

    if ($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['message'] . "</td><td>" . $row['phone'] . "</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "يوجد خطا ما";
    }
    

?>