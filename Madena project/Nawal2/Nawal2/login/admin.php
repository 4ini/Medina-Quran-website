<?php
require_once("connection.php");
session_start();


if (!isset($_SESSION['login_active'])) {
  header("Location: index.php");
  exit();
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>الإدارة</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="">الإدارة</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>

        <div class="d-flex">
          <a class="btn btn-outline-danger" href="logout.php">تسجيل خروج</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <br>
    <br>
    <a style="background-color:#ffae42; margin-top: 100px;"href="../index.html" name="bt" type="button" class="btn btn-lg bt bt3 btn-secondary">الصفحة الرئيسية</a>
  <a style="background-color:#2F4F4F; margin-top: 100px;"href="./impor-admin/login.php" name="bt" type="button" class="btn btn-lg bt bt3 btn-secondary">عرض قائمة الإنتظار </a>
  <a style="background-color:#A52A2A; margin-top: 100px;"href="./impor-admin/accepted.php" name="bt" type="button" class="btn btn-lg bt bt3 btn-secondary">عرض المقبولين</a>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>