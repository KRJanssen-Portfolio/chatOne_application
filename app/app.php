<?php
/**
 * Created by PhpStorm.
 * User: KeanuenSabine
 * Date: 25-6-2016
 * Time: 20:00
 */

require_once('config.php');
require_once('app-manager.php');

//add something to the database
if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
    if ( isset($_POST['insert']) ) {
        $name =  $_POST['name'];
        $message = $_POST['message'];

        if ( !validate($name, $message) ) {
            redirect('../public/index.php', 'Item niet of niet goed ingevuld');
        }

        $input['name'] = $name;
        $input['message'] = $message;


        if ( add($db, $input) ) {
            redirect('../public/index.php', 'GELUKT ;)');
        }

        echo 'Iets is fout gegaan met de database connectie, neem contact op met de administrator';
        die;
    }
}