<?php

    namespace App\src\Controller;

    use App\WebShop\src\Models\DB;

    class UserLogin {
        public function login() {
            session_start();
            $db = new DB("localhost", "Admin", "Sumafelo03!", "php-lms");
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $hash = password_hash($password, PASSWORD_DEFAULT);

                $db->con->prepare("SELECT * FROM users");
                $db->con->bindParam(":username", $username);
                $db->con->execute();

                $count = $db->con->fetchAll();
                if($count = 1) {
                    $row = $db->con->fetchColumn();
                    if(password_verify($password, $hash)){
                        echo "Logedin!";
                    } else {
                        echo "Der Login ist fehlgeschlagen";
                    }
                }
            }
        }
    }