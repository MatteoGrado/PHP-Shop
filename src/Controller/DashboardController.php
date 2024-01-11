<?php

    namespace App\src\Controller;

    use App\src\Models\DB;
    use App\src\Controller\UserController;

    class DashboardController {
        public function logout() {
            $db = new DB("localhost", "Admin", "Sumafelo03!", "php_shop");

        }
    }