<?php
$host = 'localhost';
$user = 'root';
$pass = '';//root if it's in mamp, empty in xamp
$dbName = 'cars';

//new mysqli object
$mysqli = new mysqli($host, $user, $pass, $dbName);

//use utf8
$mysqli->set_charset('utf8');
//check if connection to server is seccesful
if ($mysqli->connect_error){
    //debuging purposes only more info about the Error
    echo $mysqli->connect_error;
    var_dump($mysqli);
    //stop the program if we have en error
    die("Connection Failed");
}

?>