<?php
//include this file
//create connection to db

$host = 'localhost';
$user = 'root';
$password = '';//root if it's in mamp, empty in xamp
$dbName = 'cars';

//new mysqli object
// $mysqli = new mysqli($host, $user, $pass, $dbName);

$mysqli = new PDO("mysql:host=$host; dbName=$dbName", $user, $password);
// $db = new PDO("mysql:host=$host; dbName=$dbName", $user, $password)


// $sql = "SELECT * FROM articles";

// //$sql = "SELECT * FROM articles WHERE id='$id' AND title='$title' AND textArticle='$article' AND image='$image' AND date='date' AND views='$views' AND comments='$comments'";

// $resultArts = $mysqli->query($sql);

//use utf8


// $mysqli->set_charset('utf8');
//check if connection to server is seccesful


// if ($mysqli->connect_error){
//     //debuging purposes only more info about the Error
//     echo $mysqli->connect_error;
//     var_dump($mysqli);
//     //stop the program if we have en error
//     die("Connection Failed");
// }

global $mysqli;
function getAllArticles() {
    global $mysqli;
    // global $sql;
    // $resArts = $mysqli->query($sql);
    $articles = $mysqli->query("SELECT * FROM articles");
    return $articles;
}

// function getAllArticles(){
//     global $db;
//     // global $sql;
//     // $resArts = $mysqli->query($sql);
//     $articles = $db->query("SELECT * FROM articles")
//     return $articles;
// }


?>