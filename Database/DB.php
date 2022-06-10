<?php

class DB
{
    static public function connexion()
    {
        $db = new PDO("mysql:host=localhost;dbname=ecooper", "root", "");

        $db->exec('set names utf8');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        
        return $db;
    }
    //Static methods can be called directly - without creating an instance of the class first.
}