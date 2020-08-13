<?php 

    class Database{

        private $host;
        private $dbname;
        private $login;
        private $password;


        public function __construct($host, $dbname, $login, $password)
        {
            $this->host = $host;
            $this->dbname = $dbname;
            $this->login = $login;
            $this->password = $password;
        }

        public function Connect(){
            try{
                $bdd = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->login, $this->password);
            }catch(PDOException $e){
                die('Error '.$e->getMessage());
            }

        }
    }