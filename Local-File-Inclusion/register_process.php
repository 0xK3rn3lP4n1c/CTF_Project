<?php

if(isset($_POST['register'])){
    $uname = $_POST['uname'];
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    $host = "localhost";
    $port = "5432";
    $dbname = "webapp";
    $user = "postgres";
    $password = "postgres";

    $dbconn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
    if (!$dbconn) {
        echo "db connection failure: " . preg_last_error();
    }

    $query = "INSERT INTO users (uname, pass) VALUES ($1, $2)";
    $result = pg_query_params($dbconn, $query, array($uname, $pass));
    if (!$result) {
        echo "Kullanıcı ekleme hatası: " . pg_last_error($dbconn);
    } else {
        echo "Kullanıcı başarıyla eklendi.";
    }

// Veritabanı bağlantısını kapat
pg_close($dbconn);    
    
    header("Location: login.php");
    exit();
}
?>
