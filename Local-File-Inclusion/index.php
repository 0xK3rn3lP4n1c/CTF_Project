<?php
$base_path = "/webapp"; // web uygulamasının bulunduğu dizinin yolu
$login_page = "/login.php"; // giriş sayfasının yolu

// Geçerli sayfa yolu alınır
$current_page = $_SERVER['REQUEST_URI'];
if (strpos($current_page, $base_path) === false) {
    // Sayfa yolunda uygulamanın bulunduğu dizinin yolu yoksa, sayfa yolunu güncelle
    $current_page = $base_path . $current_page;
}

// Login sayfasına yönlendirme
if (basename($current_page) !== 'login.php' && !isset($_SESSION['uname'])) {
    header('Location: ' . $login_page);
    exit();
}
?>
