<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST">
        <label>Username:</label>
        <input type="text" name="uname"><br>

        <label>Password:</label>
        <input type="password" name="pass"><br>

        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
