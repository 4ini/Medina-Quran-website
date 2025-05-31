<?php
require_once("connection.php");
session_start();

function santize($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['login'])) {
  $email = santize($_POST['email']);
  $password = santize($_POST['password']);

  

  $sql = "SELECT id FROM users WHERE email = '$email' AND password = '$password' AND active = 1";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['login_active'] = [$email, $password];
    header("Location: admin.php");
    exit();
  } else {
    $_SESSION['errors'] = "Login Error! Check Email & Password";
    header("Location: index.php");
    exit();
  }
}
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">

  <title>تسجيل دخول</title>
</head>

<body>
  <div class="container text-center d-flex align-items-center min-vh-100">

    <div class="card mx-auto bg-info py-5" style="width: 25rem;">
      <h1>تسجيل دخول</h1>
      <a class="btn btn-warning" href="../index.html">الصفحة الرئيسية</a>
      <?php if (isset($_SESSION['errors'])) : ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <?php
          $message = $_SESSION['errors'];
          unset($_SESSION['errors']);
          echo $message;
          ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>
      
      <div class="card-body">
       
        <form action="" method="post">
          <div class="mb-3">
            <label for="email" class="form-label">اسم الحساب</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">كلمة المرور</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>

          <button type="submit" class="btn btn-primary" name="login">تسجيل دخول</button>
        </form>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>