<?php

    use App\src\Controller\UserController;
    use App\src\Models\DB;

    include '../../src/Controller/UserController.php';
    include '../../src/Models/DB.php';
    $userController = new \App\src\Controller\UserController();
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userController->Controller();
        $userController->login($username, $password);
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tech-Paradies.de/login</title>
    <link rel="stylesheet" href="../../public/assets/css/login/style.css">
</head>
<body>
    <div class="login-container">
        <form class="login-form" method="POST">
            <h2>Login</h2>
            <div class="input-container">
                <label for="username">Benutzer:</label>
                <input type="text" id="username" name="username" required>
            </div>
        <div class="input-container">
            <label for="password">Passwort:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="input-container">
            <label for="confirm-password">Passwort Bestätigen:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
        </div>
        <div class="remember-me">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember" id="rememberme">Remember me</label>
        </div>
        <div class="forgot-password">
            <a href="#">Passwort vergessen?</a>
        </div>
        <button type="submit" name='submit'>Login</button>
        <a class="register" href="../register/register.php">Noch kein Konto?</a>
   </form>
</div>
</body>
</html>