<?php
/**
 * Created by PhpStorm.
 * User: KeanuenSabine
 * Date: 20-6-2016
 * Time: 09:30
 */

//1. constante aanmaken
define('DBNAME', 'chat_app');
define('DBUSER', 'root');
define('DBHOST',  'localhost');
define('DBPASS', '');

//2. PDO verbinding maken met database
//- geef eerst de database type
//- dan de database naam

try {
    $db = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME, DBUSER, DBPASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo $e->getMessage();
}