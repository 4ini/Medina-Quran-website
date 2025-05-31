<html>
<head>
    <title>Contact us form using php mysql</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
</head>
<body style="padding:50px;">
    <div class="container">
        <h3 style="text-align: center;"> : للتواصل مع الدعم الفني يرجى تعبئة البيانات </h3>
        <form method="POST" action="process.php" >
            <div class="form-group">
                <label for="firstname">الأسم الأول</label>
                <input type="text" name="firstname" id="firstname"  class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lastname">الأسم الأخير</label>
                <input type="text" name="lastname" id="lastname"  class="form-control"  required>
            </div>
            <div class="form-group">
                <label for="phone">رقم الهاتف</label>
                <input type="tel" name="phone" id="phone"  class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">البريد الألكتبروني</label>
                <input type="email" name="email" id="email"  class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">الرسالة / الشكوى</label>
                <input type="text" name="message" id="message"  class="form-control" required>
            </div>
            <div class="form-group">
        <button class="btn btn-success" type="submit">ارسال</button>
        <button class="btn btn-danger" type="reset">اعادة </button>
    </div>
        </form>
    </div>
</body>
</html>