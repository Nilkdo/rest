<?php
    class db{
        // Properties
        private $dbhost = 'sql.freedb.tech';
        private $dbuser = 'freedb_juan02';
        private $dbpass = 'J877u#GdzN2$MJ!';
        private $dbname = 'freedb_parcail';

        // Connect
        public function connect(){
            $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
    }
