<?php
    class Sistema{
        public $con;

        public function conexion(){
            $dbDriver = "mysql";
            $dbHost = "localhost";
            $dbUser = "invitados";
            $dbPass = "12345";
            $db = "invitados";
            /*$this->con = new mysqli($dbHost,$dbUser,$dbPass,$db);*/
            $this->con = new PDO($dbDriver.':host='.$dbHost.';dbname='.$db, $dbUser, $dbPass);
        }

        public function query($sql){
            $this->connect();
            $rs = $this->con->query($sql);
            return $rs;
        }
    }

    $sistema = new Sistema();
?>