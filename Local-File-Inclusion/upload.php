<?php
session_start();

if(isset($_POST['submit'])){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Dosya tipi kontrolü yapılır. İsterseniz başka kontroller de yapabilirsiniz.
    if($imageFileType != "png") {
        echo "Sadece png dosyaları yüklenebilir. ";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Dosya yüklenemedi.";
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "Dosya başarıyla yüklendi.";
        } else {
            echo "Dosya yüklenirken bir hata oluştu.";
        }
    }
}
?>
