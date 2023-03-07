<?php
session_start();
if(!isset($_SESSION['uname'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="dist/style.css">
</head>
<body>
<div class="sidebar">
    <h1>Hoş Geldin <?php echo $_SESSION['uname']; ?> </h1>
    <div id="sidebar">
        <img src="dist/img/avatar.png" alt="Avatar">
        <p>Kullanıcı Adı: <?php echo $_SESSION['uname']; ?></p>
        <form method="post" enctype="multipart/form-data" action="upload.php">
            <input type="file" name="file">
            <input type="submit" name="submit" value="Yükle">
        </form>
    </div>
    <div id="main">
        <h2>Dosyalar</h2>
        <ul>
            <li><a href="get.php?file=userLogs.txt">userLogs.txt</a></li>
            <!-- Burada diğer dosyalar listelenir. -->
        </ul>
    </div>
    <a href="logout.php">Çıkış Yap</a>
</div>

</body>
</html>


