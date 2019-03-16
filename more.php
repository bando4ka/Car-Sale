<?php

if($_SERVER['REQUEST_METHOD'] =='POST'){
    //1)SQL
    // $mysqli = new mysqli('localhost','root'/*user*/,''/*pass*/,'cars'/*DB*/);    
    
    // $id = $_POST['id'];
    // $district = $_POST['district'];
    // $city = $_POST['city'];
    // $caryear = $_POST['caryear'];
    // $carmonth = $_POST['carmonth'];
    // $make = $_POST['make'];
    // $model = $_POST['model'];
    // $bodyStyle = $_POST['bodyStyle'];
    // $transmission = $_POST['transmission'];
    // $exteriorColor = $_POST['exteriorColor'];
    // $numberOfDoors = $_POST['numberOfDoors'];
    // $engineCylinder = $_POST['engineCylinder'];
    // $driveType = $_POST['driveType'];
    // $fuelType = $_POST['fuelType'];
    // $checkbox1 = $_POST['checkbox1'];
    // $checkbox2 = $_POST['checkbox2'];
    // $checkbox3 = $_POST['checkbox3'];
    // $checkbox4 = $_POST['checkbox4'];
    // $condition1 = $_POST['condition1'];
    // $mileage = $_POST['mileage'];
    // $hand = $_POST['hand'];
    // $engineVolume = $_POST['engineVolume'];
    // $enginePower = $_POST['enginePower'];
    // $image1 = $_POST['image1'];
    // $image2 = $_POST['image2'];
    // $image3 = $_POST['image3'];
    // $image4 = $_POST['image4'];
    // $image5 = $_POST['image5'];
    // $firstname = $_POST['firstname'];
    // $lastname = $_POST['lastname'];
    // $phone = $_POST['phone'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // print_r ($_POST);

    // $sql = "UPDATE cars 
    //         SET district = '$district', city='$city', caryear='$caryear', carmonth='$carmonth', make = '$make', model='$model',bodyStyle='$bodyStyle', transmission='$transmission', exteriorColor='$exteriorColor', numberOfDoors='$numberOfDoors', engineCylinder='$engineCylinder', driveType='$driveType', fuelType='$fuelType', checkbox1='$checkbox1', checkbox2='$checkbox2', checkbox3='$checkbox3', checkbox4='$checkbox4', condition1='$condition1', mileage='$mileage', hand='$hand', engineVolume='$engineVolume', enginePower='$enginePower', image1='$image1', image2='$image2', image3='$image3', image4='$image4', image5='$image5', firstname='$firstname', lastname='$lastname', phone='$phone', email='$email', password='$password' 
    //         WHERE ID = $id";
    // $result = $mysqli->query($sql);
   
//go to another page: student-list.php
    //header('location: student-list.php');
} else if($_SERVER['REQUEST_METHOD'] =='GET'){  
    $id = $_GET['id'];
    $sql = "SELECT * FROM cars WHERE ID = $id";
    // echo "<h5 class='white'>". $sql."</h5>";
    // $sql = "INSERT INTO students(Firstname, LastName, PhoneNumber, email, pass)
    //     VALUES('$FirstName', '$LastName', $phoneNumber', '$email', '$pass');";
    $mysqli = new mysqli('localhost','root'/*user*/,''/*pass*/,'cars'/*DB*/);
    $result = $mysqli->query($sql);
    //"ahref='edit.php?id'>
    $row = $result->fetch_array();
    $district=$row['district'];//DB
    $city=$row['city'];
    $caryear=$row['caryear'];
    $carmonth=$row['carmonth'];
    $make=$row['make'];
    $model = $row['model'];
    $bodyStyle = $row['bodyStyle'];
    $transmission = $row['transmission'];
    $exteriorColor = $row['exteriorColor'];
    $numberOfDoors = $row['numberOfDoors'];
    $engineCylinder = $row['engineCylinder'];
    $driveType = $row['driveType'];
    $fuelType = $row['fuelType'];
    // $checkbox1 = $row['checkbox1'];
    // $checkbox2 = $row['checkbox2'];
    // $checkbox3 = $row['checkbox3'];
    // $checkbox4 = $row['checkbox4'];
    $condition1 = $row['condition1'];
    $mileage = $row['mileage'];
    $hand = $row['hand'];
    $engineVolume = $row['engineVolume'];
    $enginePower = $row['enginePower'];
    $image1 = $row['image1'];
    $image2 = $row['image2'];
    $image3 = $row['image3'];
    $image4 = $row['image4'];
    $image5 = $row['image5'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $phone = $row['phone'];
    $email = $row['email'];
    $password = $row['password'];
    // $id_user = $row['id_user'];
    // $File=$row['Image'];

// echo $firstname;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--קידוד אותיות מטבלה -->
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/style_more.css">
</head>
<!-- <body class="back" dir="rtl"> -->
<body>

<?php
include 'header.php';

?>
<article class="container">

<div class="white"><h2><b>Details <?php echo $make." ".$model.", ads #".$id?></b><h2></div>
<br/><br/>

<!-- form>input:text*6 -->
<!-- <input type="submit" value="Send Form"> -->
<form method="GET" class="card" action="">
<!-- <h2 class="white text-center">Sign Up</h2> -->
<input type="hidden" value="<?php echo $id;?>"class="" name="id">
<!-- <php echo $image1?></br> -->
<?php $img = $row['image1'];//DB
    echo "<img src='$img' width='200px' height='150px' class='rounded'>";//echo $row['Image'];?>
District: <?php echo $district?><br/>
City: <?php echo $city?><br/><br/>
<label class="label"><h5>Basic Vehicle Information</h5></label>
<label class="label"><h6>Required Information</h6></label><hr/>
Make: <?php echo $make?><br>
Model: <?php echo $model?><br>
Year: <?php echo $caryear?><br>
Month: <?php echo $carmonth?><br>
Body Style: <?php echo $bodyStyle?><br>
Transmission: <?php echo $transmission?><br/><br/>
<label class="label"><h6>Optional Information</h6></label><hr/>
Exterior Color: <?php echo $exteriorColor?><br>
Number Of Doors: <?php echo $numberOfDoors?><br>
Engine Cylinder: <?php echo $engineCylinder?><br>
Drive Type: <?php echo $driveType?><br/>
Fuel Type: <?php echo $fuelType?><br/>
<!-- Entertainment: </br>
<php echo $checkbox1?></br>
<php echo $checkbox2?></br>
<php echo $checkbox3?></br>
<php echo $checkbox4?></br> -->
Condition: <?php echo $condition1?><br/>
Mileage: <?php echo $mileage?> km<br/>
Hand: <?php echo $hand?><br/>
Engine Volume: <?php echo $engineVolume?> litr<br/>
Engine Power: <?php echo $enginePower?> h.p.<br/><br/>
<label class="label"><h5>Personal Information</h5></label><hr/>
First Name: <?php echo $firstname?><br/>
Phone Number: <?php echo $phone?><br/>
Images:

<!-- <php $img = $row['image1'];//DB
    echo "<img id='slide-image1' src='$img' width='200px' height='150px'>";?>
<img id="slide-image1" src="img/Car1.jpg" alt="logo"> -->
<div id="carphotos" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carphotos" data-slide-to="0" class="active"></li>
        <li data-target="#carphotos" data-slide-to="1"></li>
        <li data-target="#carphotos" data-slide-to="2"></li>
        <li data-target="#carphotos" data-slide-to="3"></li>
        <li data-target="#carphotos" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner center" role="listbox">
        <div class="carousel-item active">
        <?php $img = $row['image1'];//DB
                     echo "<img src='$img' width='400px' height='300px' class='rounded'>";//echo $row['Image'];?>
        </div>
        <div class="carousel-item">
        <?php $img = $row['image2'];//DB
                     echo "<img src='$img' width='400px' height='300px' class='rounded'>";//echo $row['Image'];?>
        </div>
        <div class="carousel-item">
        <?php $img = $row['image3'];//DB
                     echo "<img src='$img' width='400px' height='300px' class='rounded'>";//echo $row['Image'];?>
        </div>
        <div class="carousel-item">
        <?php $img = $row['image4'];//DB
                     echo "<img src='$img' width='400px' height='300px' class='rounded'>";//echo $row['Image'];?>
        </div>
        <div class="carousel-item">
        <?php $img = $row['image5'];//DB
                     echo "<img src='$img' width='400px' height='300px' class='rounded'>";//echo $row['Image'];?>
        </div>
    </div>
    <a class="carousel-control-prev secondary" href="#carphotos" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next secondary" href="#carphotos" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>



</form>

</article>
<!-- <script src="js/regionCities.js"></script>
<script src="js/makeModels0.js"></script>
<script src="js/imageCard.js"></script>  -->

<!-- b4-carousel -->

<?php
include_once ('footer.php');
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>