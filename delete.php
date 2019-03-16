<?php

if($_SERVER['REQUEST_METHOD'] =='GET'){
    //1)SQL
     
    $id = $_GET['id'];
    $sql = "DELETE FROM cars WHERE ID = $id";
    $mysqli = new mysqli('localhost','root'/*user*/,''/*pass*/,'cars'/*DB*/); 
    $result = $mysqli->query($sql);
//go to another page: student-list.php
    header('location: carSales000.php');
    
}

?>