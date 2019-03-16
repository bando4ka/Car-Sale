<?php

class Article {
    //private public protected
    var $id;
    var $title;
    var $textArticle;
    var $image;
    var $date;
    var $views;
    var $comments;
    // private $email;
    // private $password;
    var $author_id;
    var $category_id;
   
    const BR = "<br />";
    
    //public function __construct($district, $city, $caryear, $carmonth, $make, $model, $bodyStyle, $transmission, $exteriorColor, $numberOfDoors, $engineCylinder, $driveType, $fuelType, $checkbox1, $checkbox2, $checkbox3, $checkbox4, $condition1, $mileage, $hand, $engineVolume, $enginePower, $image1, $image2, $image3, $image4, $image5, $firstname, $lastname, $phone, $email, $password)  { 
    public function __construct($id, $title, $textArticle, $image, $date, $views, $comments, $author_id, $category_id)  { 
        $this->id=$id;  
        $this->title=$title;      
        $this->textArticle=$textArticle;  
        $this->image=$image;      
        $this->date=$date;  
        $this->views=$views;  
        $this->comments=$comments;  
        $this->author_id=$author_id;  
        $this->category_id=$category_id;  
    }    
    
// function getDistrict(){  return $this->district; }
// function getCity(){  return $this->city; }
// function getYear(){  return $this->caryear; }
// function getMonth(){  return $this->carmonth; }
// function getMake(){  return $this->make; }
// function getModel(){  return $this->model; }
// function getBodyStyle(){  return $this->bodyStyle; }
// function getTransmission(){  return $this->transmission; }
// function getExteriorColor(){  return $this->exteriorColor; }
// function getNumberOfDoors(){  return $this->numberOfDoors; }
// function getEngineCylinder(){  return $this->engineCylinder; }
// function getDriveType(){  return $this->driveType; }
// function getFuelType(){  return $this->fuelType; }
// function getCheckbox1(){  return $this->checkbox1; }
// function getCheckbox2(){  return $this->checkbox2; }
// function getCheckbox3(){  return $this->checkbox3; }
// function getCheckbox4(){  return $this->checkbox4; }
// function getCondition1(){  return $this->condition1; }
// function getMileage(){  return $this->mileage; }
// function getHand(){  return $this->hand; }
// function getEngineVolume(){  return $this->engineVolume; }
// function getEnginePower(){  return $this->enginePower; }
// function getImage1(){  return $this->image1; }
// function getImage2(){  return $this->image2; }
// function getImage3(){  return $this->image3; }
// function getImage4(){  return $this->image4; }
// function getImage5(){  return $this->image5; }
// function getFirstname(){  return $this->firstname; }
// function getLastname(){  return $this->lastname; }
// function getPhone(){  return $this->phone; }
// // function getEmail(){  return $this->email; }
// // function getPassword(){  return $this->password; }
// //id_user
// function getIdUser(){  return $this->id_user; }
// function getOpentime(){  return $this->opentime; }

// function setDistrict($value){  $this->district = $value; }
// function setCity($value){   $this->city = $value; }
// function setYear($value){   $this->caryear = $value; }
// function setMonth($value){   $this->carmonth = $value; }
// function setMake($value){   $this->make = $value; }
// function setModel($value){   $this->model = $value; }
// function setBodyStyle($value){   $this->bodyStyle = $value; }
// function setTransmission($value){   $this->transmission = $value; }
// function setExteriorColor($value){   $this->exteriorColor = $value; }
// function setNumberOfDoors($value){   $this->numberOfDoors = $value; }
// function setEngineCylinder($value){   $this->engineCylinder = $value; }
// function setDriveType($value){   $this->driveType = $value; }
// function setFuelType($value){   $this->fuelType = $value; }
// function setCheckbox1($value){   $this->checkbox1 = $value; }
// function setCheckbox2($value){   $this->checkbox2 = $value; }
// function setCheckbox3($value){   $this->checkbox3 = $value; }
// function setCheckbox4($value){   $this->checkbox4 = $value; }
// function setCondition1($value){   $this->condition1 = $value; }
// function setMileage($value){   $this->mileage = $value; }
// function setHand($value){   $this->hand = $value; }
// function setEngineVolume($value){   $this->engineVolume = $value; }
// function setEnginePower($value){   $this->enginePower = $value; }
// function setImage1($value){   $this->image1 = $value; }
// function setImage2($value){   $this->image2 = $value; }
// function setImage3($value){   $this->image3 = $value; }
// function setImage4($value){   $this->image4 = $value; }
// function setImage5($value){   $this->image5 = $value; }
// function setFirstname($value){   $this->firstname = $value; }
// function setLastname($value){   $this->lastname = $value; }
// function setPhone($value){   $this->phone = $value; }
// // function setEmail($value){   $this->email = $value; }
// // function setPassword($value){   $this->password = $value; }

// function setIdUser($value){   $this->id_user = $value; }

// // function setId($value){  $this->ID = $value; }
// // function setName($value){ $this->name = $value; }
// // function setClass($value){ $this->class = $value; }
// // function setImage($value){ $this->image = $value; }

// // function __tostring(){
// //     return "<div style='float: left: margin-right:40px;'>".
// //                     "<font size='6px' style='color:Blue;'>{$this->ID}</font>".self::BR.
// //                     "<font size='6px' style='color:Blue;'>{$this->name}</font>".self::BR.
// //                     "<font size='5px'> Class: {$this->class}</font>".self::BR.
// //                     "<font size='5px'> {$this->opentime}</font>".self::BR.
// //                     "<font size='5px'> {$this->image}</font>".self::BR.
// //                     "<img src='{$this->image}' width='200px'>".self::BR.
// //                     "</div>";
// // } 

// function __tostring(){
//     return "<div style='float: left: margin-right:40px;'>".
//                     "<font size='4px' style='color:Grey;'>District: {$this->district}</font>".self::BR.
//                     "<font size='4px' style='color:Grey;'>City: {$this->city}</font>".self::BR.
//                     "<font size='4px' style='color:Grey;'>Year: {$this->caryear}</font>".self::BR.
//                     "<font size='4px' style='color:Grey;'>Month: {$this->carmonth}</font>".self::BR.
//                     "<font size='4px' style='color:Grey;'>Make: {$this->make}</font>".self::BR.
//                     "<font size='4px' style='color:Grey;'>Model: {$this->model}</font>".self::BR.
//                     "<font size='6px' style='color:Grey;'>Body Style: {$this->bodyStyle}</font>".self::BR.
//                     "<font size='6px' style='color:Grey;'>Transmission: {$this->transmission}</font>".self::BR.
//                     "<font size='6px' style='color:Grey;'>Exterior Color: {$this->exteriorColor}</font>".self::BR.
//                     "<font size='6px' style='color:Grey;'>Number Of Doors: {$this->numberOfDoors}</font>".self::BR.
//                     "<font size='6px' style='color:Grey;'>Engine Cylinder: {$this->engineCylinder}</font>".self::BR.
//                     "<font size='6px' style='color:Grey;'>Drive Type: {$this->driveType}</font>".self::BR.
//                     "<font size='6px' style='color:Grey;'>Fuel Type: {$this->fuelType}</font>".self::BR.
//                     "<font size='6px' style='color:Grey;'>Intertainment: {$this->checkbox1}</font>".self::BR.
//                     "<font size='6px' style='color:Grey;'>{$this->checkbox2}</font>".self::BR.
//                     "<font size='6px' style='color:Grey;'>{$this->checkbox3}</font>".self::BR.
//                     "<font size='6px' style='color:Grey;'>{$this->checkbox4}</font>".self::BR.
//                     "<font size='6px' style='color:Grey;'>Condition: {$this->condition1}</font>".self::BR.
//                     "<font size='6px' style='color:Grey;'>Mileage: {$this->mileage}</font>".self::BR.
//                     "<font size='6px' style='color:Grey;'>Hand: {$this->hand}</font>".self::BR.
//                     "<font size='6px' style='color:Grey;'>Engine Volume: {$this->engineVolume}</font>".self::BR.
//                     "<font size='6px' style='color:Grey;'>Engine Power: {$this->enginePower}</font>".self::BR.
//                     "<img src='{$this->image1}' width='200px'>".self::BR.
//                     "<img src='{$this->image2}' width='200px'>".self::BR.
//                     "<img src='{$this->image3}' width='200px'>".self::BR.
//                     "<img src='{$this->image4}' width='200px'>".self::BR.
//                     "<img src='{$this->image5}' width='200px'>".self::BR.
//                     "<font size='6px' style='color:Grey;'>First Name: {$this->firstname}</font>".self::BR.
//                     "<font size='6px' style='color:Grey;'>Last Name: {$this->lastname}</font>".self::BR.
//                     "<font size='6px' style='color:Grey;'>Telephone Number: {$this->phone}</font>".self::BR.
//                     // "<font size='6px' style='color:Grey;'>E-Mail: {$this->email}</font>".self::BR.
//                     // "<font size='6px' style='color:Grey;'>Password: {$this->password}</font>".self::BR.
//                     "<font size='6px' style='color:Grey;'>Email, Password: {$this->id_user}</font>".self::BR.
//                     "<font size='6px' style='color:Grey;'>Date of Registration: {$this->opentime}</font>".self::BR.
//                     "</div>";
// } 
}

?>