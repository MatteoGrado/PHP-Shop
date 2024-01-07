<?php

    namespace App\src\Controller;

    use App\src\Models\DB;

    class UserLoginController {
        protected function login() {
            $db = new DB("localhost", "Admin", "Sumafelo03!", "php_shop");
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $db->con->prepare("SELECT * FROM users");
                $db->con->bindParam(":password", $password);
                $db->con->execute();

            }
        }
    }