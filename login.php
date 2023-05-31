/*login-page*/
<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>khashayar.ir</title>
</head>
<body>
<div class='main'>
        <form action="panel.php" method="post">
            <label>نام کاربری:</label>
            <input type="text" name="username">
            <label>ایمیل:</label>
            <input type="email" name="email">
            <label>رمز عبور:</label>
            <input type="password" name="password">
            <button  class='btn' type="submit" name="btn"><b>ورود</b></button>
            <button class='btn' type="submit"><b>ثبت نام</b></button>
        </form>
</div>
</body>
</html>
