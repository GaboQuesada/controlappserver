<?php

class Connect {

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    function __construct() {



        $this->servername = "sql135.main-hosting.eu." ;
        $this->username = "u832798027_prog4";
        $this->password = "jaja1010";
        $this->dbname = "u832798027_prog4";
    }

    public function conect() {

        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->conn;
        } catch (PDOException $e) {

            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function test() {

        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo 'exito';
        } catch (PDOException $e) {

            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function close() {
        $this->conn = null;
    }

}
