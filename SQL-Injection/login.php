<?php
$dbconn = new PDO('sqlite:mydatabase.db'); //Connect to the db

//Chech the form
if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    $username = $_POST['uname']; //Get values
    $password = $_POST['pass'];
    
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password';";//are they valid
    
    $result = $dbconn->query($query);
    $result = $result->fetchAll();

    foreach($result as $key => $item)
    {
        echo $item['username'];
    }

    if($result->rowCount() > 0)
    {
        /*header('Location: flag.php');//succesful login
        exit();*/
        $error = 'Bro you did it!';
    }
    else
    {
        echo $username;
        echo $password;
        echo $query;
        var_dump ($result->rowCount());
        $error = 'Kullanıcı adı ya da Şifre Hatalı üzgünüm bro!';//failed login
    }

 }

 ?>

 <!DOCTYPE html>
<html>
<head>
    <title>Usomzette</title>
</head>
<body>
    <h1>Login Page</h1>
    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="uname"><br><br>
        <label>Password:</label>
        <input type="password" name="pass"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

<?php
// Close the db connection
$dbconn = null;
?>

