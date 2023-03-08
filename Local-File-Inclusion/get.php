<?php
if(isset($_GET['file'])) {
    // istenen dosya adını alın
    $file = $_GET['file'];
 
    // dosya yolu
    $path = "/home/kaan/Desktop/CTF/lfi/" . $file;
 
    // dosya var mı diye kontrol et
    if(file_exists($path)) {
        // dosya başlığı ayarla
        $content = file_get_contents($path);
        echo $content;
        require($path);
        exit;
    }
}
?>
