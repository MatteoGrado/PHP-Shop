<?php

    use App\src\Controller\UserController;
    use App\src\Models\DB;

    include '../../src/Controller/UserController.php';
    include '../../src/Models/DB.php';

    $userController = new \App\src\Controller\UserController();
    if (isset($_POST['submit'])) {
        $userController->register();
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tech-Paradies.de/register</title>
    <link rel="stylesheet" href="../../public/assets/css/register/style.css">
</head>
<body>
    <div class="container">
        <form class="form" METHOD="POST">
            <button type="submit" class="back">Zur&uuml;ck</button>
                <h2>Registrieren</h2>
            <div class="input-container">
                <label for="first-name">Vorname:</label>
                <input type="text" id="first-name" name="first-name" required>
            </div>
            <div class="input-container">
                <label for="last-name">Nachname:</label>
                <input type="text" id="last-name" name="last-name" required>
            </div>
            <div class="input-container">
                <label for="email">E-Mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-container">
                <label for="birth">Geburtsdatum:</label>
                <input type="datetime-local" name="birth" required>
            </div>
            <div class="input-container">
                <label for="password">Passwort:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-container">
                <label for="confirm-password">Passwort Best&auml;tigen:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit">Absenden</button>
        </form>
    </div>
</body>
</html>