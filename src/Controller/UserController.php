<?php

    namespace App\src\Controller;

    use App\src\Models\DB;

    class UserController {
        public function Controller() {
            $db = new DB("localhost", "Admin", "Sumafelo03!", "php_shop");
            if (isset($_POST['submit'])) {
                session_start();
                if ($this->login($_POST['username'], $_POST['password'])) {
                    //session set user_id for remember-me
                } else {
                    echo "Failed to Login!";
                }
            }
        }
        public function register($username, $password) {
            $db = new DB("localhost", "Admin", "Sumafelo03!", "php_shop");
            $isql = "INSERT INTO `users` (`id`, 'firstname', 'lastname', 'born', `username`, 'email', `password`)VALUES (NULL, :username, :password)";
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
            if(!empty($userDataDB) && password_verify($password, $userDataDB['password'])) {
                die("Passwort falsch!");
            }
            return true;
        }
    }