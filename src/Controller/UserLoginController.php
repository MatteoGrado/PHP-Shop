<?php

    namespace App\src\Controller;

    use App\src\Models\DB;

    class UserLoginController {
        protected function login() {
            $db = new DB("localhost", "admin", "Sumafelo03!", "php_shop");
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $stmt = $db->con->prepare("SELECT * FROM users");
            }
        }
    }