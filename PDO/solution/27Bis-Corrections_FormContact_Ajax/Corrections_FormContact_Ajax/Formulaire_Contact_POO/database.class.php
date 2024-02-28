<?php

class Database {

    private static $dbName = 'contact' ;
    private static $dbHost = 'localhost:3306' ;
    private static $dbUsername = 'root';
    private static $dbUserPassword = '';
    private static $connexion = null;
    
    public function __construct() { 
        die("Fonction d'initialisation pas permise !!!");        
    }
    
    
    public static function connect() { 
        if ( null == self::$connexion ) { 
            try { 
                self::$connexion = new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);  
            } 
            catch(PDOException $e) { 
                die($e->getMessage()); 
            }
        } 
        return self::$connexion;
    }
    
    public static function disconnect()
    {
        self::$connexion = null;
    }
}

?>