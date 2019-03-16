<?php
include 'classUsers.php';

if($_SERVER['REQUEST_METHOD'] =='POST'){

$email = $_POST['email'];
$password = $_POST['password'];

$User1 = new User($email, $password);

echo $User1;

$sql = "INSERT INTO users (email, password)
VALUES ('$email','$password');";

$mysqli = new mysqli('localhost','root'/*user*/,''/*pass*/,'cars'/*DB*/);
echo "<br>".$sql;
$result = $mysqli->query($sql);//NEW Standart

if($result->num_rows >0 ){
    $row = $result->fetch_assoc();

    //login is ok
    setcookie('user', $email, time() + 10*365*24*60*60);//10years.
    setcookie('id_user',  $row['id'], time() + 10*365*24*60*60);//10years.

    header ('location carSales000.php');
} else {
    //bad
    $error = '<h1>wrong</h1>';
}
header("location: signIn.php");

} else if($_SERVER['REQUEST_METHOD'] =='GET'){
    //GET
}

?>