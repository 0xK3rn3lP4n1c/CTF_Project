<!DOCTYPE html>
<html>
<head>
    <title>Kayıt Ol</title>
    <link rel="stylesheet" href="dist/style.css">
</head>
<body class="body-main">
<div class="login">
	<h1>Kayıt Ol</h1>
    <form method="post" action="register_process.php">
    	<input type="text" name="uname" placeholder="Kullanıcı Adı" required="required" />
        <input type="password" name="pass" placeholder="Parola" required="required" />
        <input type="submit" name="register" value="Kayıt Ol">
    </form>
    <a href="login.php"> Giriş Yap</a>
    </div>
</body>
</html>


