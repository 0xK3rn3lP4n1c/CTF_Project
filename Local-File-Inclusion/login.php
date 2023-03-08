<?php
session_start();

if(isset($_POST['login'])){

    $input_uname = $_POST['uname'];
    $input_pass = $_POST['pass'];

    $host = "app-9a83fd38-dc77-44fd-875c-63a045f64310-do-user-10970795-0.b.db.ondigitalocean.com";
    $port = "25060";
    $dbname = "webapp";
    $user = "webapp";
    $password = "AVNS_fOVbJKwQANokDYupn2v";
    $sslMode = "require";

    $dbconn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password sslmode=$sslMode");
    if (!$dbconn) {
        echo "db connection failure: " . preg_last_error();
    }

    $query = "SELECT * FROM users WHERE uname = $1";
    $result = pg_query_params($dbconn, $query, array($input_uname));
    if (!$result) {
        echo "Kullanıcı sorgusu hatası: " . pg_last_error($dbconn);
    } else {
        $row = pg_fetch_assoc($result);
        if (password_verify($input_pass, $row['pass'])) {
            $_SESSION['uname'] = $input_uname;
            header("Location: home.php");
            exit();
        } else {
            echo "Kullanıcı adı veya şifre hatalı!";
        }
    }

    // Veritabanı bağlantısını kapat
    pg_close($dbconn);    
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Giriş Yapın</title>
    <link rel="stylesheet" href="dist/style.css">
</head>
<body class="body-main">
    <div class="login">
	<h1>Giriş Yap</h1>
    <form method="post">
    	<input type="text" name="uname" placeholder="Kullanıcı Adı" required="required" />
        <input type="password" name="pass" placeholder="Parola" required="required" />
        <input type="submit" name="login" value="Giriş Yap">
    </form>
    <p class="para">Henüz Kayıt Olmadınız Mı? <a href="register.php"> Kayıt Ol</a></p>
    </div>
</body>
</html>