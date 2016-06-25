<?php
/**
 * Created by PhpStorm.
 * User: KeanuenSabine
 * Date: 25-6-2016
 * Time: 19:29
 */
require_once('config.php');

// These functions are necessary to add data to the database
function add ($db, $input) {

    $name = $input['name'];
    $message = $input['message'];
    $sql = "INSERT INTO `chat_app`.`messages` (`id`, `name`, `message`) VALUES (NULL, '$name', '$message')";

    if (!$db->query($sql)) {
        return false;
    }
    return true;
}
function validate($input) {
    //checken of die niet leeg is.
    //kijken of hij niet meer dan 255 chars heeft.







//    $input = trim($input);
//    $bannedWords = ['kut', 'lul', 'fuck', 'terring'];
//    $checkInput = explode('', $input);
//    if () {
//
//    }





    if ( !empty($input) &&strlen($input) < 265 ) {
        return true;
    }
    return false;
}
function redirect($url, $message) {
    $url = $url . '?message=' . $message;
    header('location:' . $url);
    die;
}


// T
function getAllItems($db) {
    $query = $db->query('SELECT * FROM messages'); // voert querie uit
    return $query->fetchAll(PDO::FETCH_ASSOC); // data (PDO::) in welke vorm je de data wilt ontvangen FETCH_ASSOC: laat de data in asociative array ontvangen
}