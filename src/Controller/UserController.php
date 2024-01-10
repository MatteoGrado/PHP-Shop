<?php

    namespace App\src\Controller;

    use App\src\Models\DB;

    class UserController {
        public function Controller() {
            session_start();
            $db = new DB("localhost", "Admin", "Sumafelo03!", "php_shop");
            if (isset($_POST['submit'])) {
                if ($this->login($_POST['username'], $_POST['password'])) {
                    echo "Success!";
                } else {
                    echo "Failed to Login!";
                }
            }
        }
        public function register($username, $password) {
            $db = new DB("localhost", "Admin", "Sumafelo03!", "php_shop");
            $isql = "INSERT INTO `users` (`id`, `username`, `password`) VALUES (NULL, :username, :password)";
            $stmt = $db->con->prepare($isql);
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt->execute([':username' => $username, ':password' => $password]);
        }
        public function login($username, $password) {
            $db = new DB("localhost", "Admin", "Sumafelo03!", "php_shop");
            $ssql = "SELECT `username`, `password` FROM `users` WHERE `username` = :username";
            $stmt = $db->con->prepare($ssql);
            $stmt->execute([':username' => $username]);
            $userDataDB = $stmt->fetch(\PDO::FETCH_ASSOC);
            if(!$userDataDB) {
                die("Falscher Benutzername!");
            }
            $userDataDB = $stmt->fetch(\PDO::FETCH_ASSOC);
            if(password_verify($password, $userDataDB['password'])) {
                die("Passwort falsch!");
            }
            echo "Success";
            return true;
        }
    }