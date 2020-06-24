<?php

    namespace model\DAL;

    class DAL{

        private static $instance;

        public static function getConnection(){
           
            $hostname = "toolfast_site.mysql.dbaas.com.br";        
            $dbname = 'toolfast_site';
            $user = 'toolfast_site';
            $password = 'T00l2019F@st';

            if(!isset(self::$instance)){
                self::$instance = new \PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8", $user, $password);
            }

            return self::$instance;
        }

    }
