<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <style>
        body {
            background: linear-gradient(to bottom, #E95420, #77216F);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input {
            display: block;
            margin-bottom: 20px;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }
        input[type=submit] {
            background-color: #E95420;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h1>Login</h1>
        <label>Username:</label>
        <input type="text" name="uname">

        <label>Password:</label>
        <input type="password" name="pass">

        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>