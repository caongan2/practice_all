<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <table>
            <tr>
                <td>User name:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass"></td>
            </tr>
        </table>
        <input type="submit" value="Sign in">
    </fieldset>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $user = $_POST["username"];
    $pass = $_POST["pass"];

    if ($user == "admin" && $pass == "password") {
        echo "<h2>Wellcome</h2>";
    } else {
        echo "<h2>Login error</h2>";
    }
}
