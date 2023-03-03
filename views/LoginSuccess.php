<!-- LoginSuccess.php -->

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>Flag:</h1>
    <p><?php echo $jwt; ?></p>
    <p><?php echo $login->uname; ?></p>
    <p><?php echo $login->pass; ?></p>
</body>
</html>
