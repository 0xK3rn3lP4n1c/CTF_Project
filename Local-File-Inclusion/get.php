<?php
if(isset($_GET['file'])) {
    // istenen dosya adını alın
    $file = $_GET['file'];

    // dosya var mı diye kontrol et
    if(file_exists($file)) {
        // dosya başlığı ayarla
        $content = file_get_contents($file);
        echo $content;
        require($file);
        exit;
    }
}
?>
