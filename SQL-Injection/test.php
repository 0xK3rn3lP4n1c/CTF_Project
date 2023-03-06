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
