<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>app</title>
</head>

<body>
    <h1>Log in</h1>
    <form action="login.php" method="post" name="login">
        <table>
            <tr>
                <td>Login</td>
                <td><input type="text" name="login"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>
                    <a href="registerForm.php" class="register-button">Register</a>
                </td>
                <td>
                    <input type="submit" value="login" class="login-button">

                </td>
            </tr>
        </table>
    </form>
</body>

</html>