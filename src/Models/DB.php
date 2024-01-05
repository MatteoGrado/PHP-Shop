<?php

    namespace App\src\Models;

    class DB {
        private $con;
        public function __construct($host, $user, $pwd, $dbName) {
            $this->connect($host, $user, $pwd, $dbName);
        }

        protected function connect($host, $user, $pwd, $dbName) {
            try {
                $this->con = new \PDO("mysql:host=" . $host . ";dbname=" . $dbName, $user, $pwd);
                $this->con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                die("Failed to cennect to DB!");
            }
        }
    }