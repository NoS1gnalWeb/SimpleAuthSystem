<?php 


class AuthSystem extends PDO{

        public $bdd;

        public function __construct()
        {
            // 
        }


        /**
         * Connect to the database
         */
        public function Connect($host, $dbname, $login, $password){
            try{
                $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $login, $password);
                $this->bdd = $bdd;
            }catch(PDOException $e){
                die('Error '.$e->getMessage());
            }

        }   


        /**
         * Fetch
         */

         public function Fetch($table){
            
            $fetch = $this->bdd->prepare("SELECT * FROM :my_table");
            $fetch->execute(array("my_table" => $table));

            while($data = $fetch->fetch()){
                return array("Data" => $data);
            }
         }




        public function __destruct()
        {
            //
        }

    }