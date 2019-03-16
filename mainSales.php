<?php
include_once('classCars.php');

if($_SERVER['REQUEST_METHOD'] =='POST'){

$district = $_POST['district'];
$city = $_POST['city'];
$caryear = $_POST['caryear'];
$carmonth = $_POST['carmonth'];
$make = $_POST['make'];
$model = $_POST['model'];
$bodyStyle = $_POST['bodyStyle'];
$transmission = $_POST['transmission'];
$exteriorColor = $_POST['exteriorColor'];
$numberOfDoors = $_POST['numberOfDoors'];
$engineCylinder = $_POST['engineCylinder'];
$driveType = $_POST['driveType'];
$fuelType = $_POST['fuelType'];
// $checkbox1 = $_POST['checkbox1'];
// $checkbox2 = $_POST['checkbox2'];
// $checkbox3 = $_POST['checkbox3'];
// $checkbox4 = $_POST['checkbox4'];
$condition1 = $_POST['condition1'];
$mileage = $_POST['mileage'];
$hand = $_POST['hand'];
$engineVolume = $_POST['engineVolume'];
$enginePower = $_POST['enginePower'];
$image1 = $_POST['image1'];
$image2 = $_POST['image2'];
$image3 = $_POST['image3'];
$image4 = $_POST['image4'];
$image5 = $_POST['image5'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];

$PrivateCar1 = new PrivateCar($district, $city, $caryear, $carmonth, $make, $model, $bodyStyle, $transmission, $exteriorColor, $numberOfDoors, $engineCylinder, $driveType, $fuelType, $condition1, $mileage, $hand, $engineVolume, $enginePower, $image1, $image2, $image3, $image4, $image5, $firstname, $lastname, $phone, $email, $password);
$PrivateCar1->setImage1($_POST['image1']);
$PrivateCar1->setImage2($_POST['image2']);
$PrivateCar1->setImage3($_POST['image3']);
$PrivateCar1->setImage4($_POST['image4']);
$PrivateCar1->setImage5($_POST['image5']);

echo $PrivateCar1;
$opentime = $PrivateCar1->getOpentime();


$sql = "INSERT INTO cars (district, city, caryear, carmonth, make, model, bodyStyle, transmission, exteriorColor, numberOfDoors, engineCylinder, driveType, fuelType, condition1, mileage, hand, engineVolume, enginePower, image1, image2, image3, image4, image5, firstname, lastname, phone, email, password, date)
VALUES ('$district', '$city', '$caryear','$carmonth','$make','$model','$bodyStyle','$transmission','$exteriorColor','$numberOfDoors','$engineCylinder','$driveType','$fuelType','$condition1','$mileage','$hand','$engineVolume', '$enginePower',  '$image1', '$image2', '$image3', '$image4', '$image5', '$firstname', '$lastname', '$phone', '$email','$password', '$opentime');";

// $result = $mysqli->query("INSERT INTO users (cars.id, cars.district, cars.city, cars.caryear, cars.carmonth, cars.make, cars.model, cars.bodyStyle, cars.transmission, cars.exteriorColor, cars.numberOfDoors, cars.engineCylinder, cars.driveType, cars.fuelType, cars.checkbox1, cars.checkbox2, cars.checkbox3, cars.checkbox4, cars.condition1, cars.mileage, cars.hand, cars.engineVolume, cars.enginePower, cars.image1, cars.image2, cars.image3, cars.image4, cars.image5, cars.firstname, cars.lastname, cars.phone, users.user_id, date)
//             VALUES ('$email', '$password');");

// $result = $mysqli->query("INSERT INTO cars (district, city, caryear, carmonth, make, model, bodyStyle, transmission, exteriorColor, numberOfDoors, engineCylinder, driveType, fuelType, condition1, mileage, hand, engineVolume, enginePower, image1, image2, image3, image4, image5, firstname, lastname, phone, date)
// SELECT email, password FROM users");



// $result = $mysqli->query("INSERT INTO users (cars.id, cars.district, cars.city, cars.caryear, cars.carmonth, cars.make, cars.model, cars.bodyStyle, cars.transmission, cars.exteriorColor, cars.numberOfDoors, cars.engineCylinder, cars.driveType, cars.fuelType, cars.checkbox1, cars.checkbox2, cars.checkbox3, cars.checkbox4, cars.condition1, cars.mileage, cars.hand, cars.engineVolume, cars.enginePower, cars.image1, cars.image2, cars.image3, cars.image4, cars.image5, cars.firstname, cars.lastname, cars.phone, users.user_id, date)
// VALUES ('$district', '$city', '$caryear','$carmonth','$make','$model','$bodyStyle','$transmission','$exteriorColor','$numberOfDoors','$engineCylinder','$driveType','$fuelType','$checkbox1','$checkbox2','$checkbox3','$checkbox4','$condition1','$mileage','$hand','$engineVolume', '$enginePower',  '$image1', '$image2', '$image3', '$image4', '$image5',  '$firstname', '$lastname', '$phone', '$user_id', '$opentime')
// FROM ((cars  
// INNER JOIN users 
// ON articles.user_id = users.user_id)");//נריץ את השאילתה



$mysqli = new mysqli('localhost','root'/*user*/,''/*pass*/,'cars'/*DB*/);
echo "<br>".$sql;
$mysqli->query($sql);//NEW Standart

header("location: carSales000.php");




} else if($_SERVER['REQUEST_METHOD'] =='GET'){
    //GET

}



?>