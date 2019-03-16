<?php

if($_SERVER['REQUEST_METHOD'] =='POST'){
    //1)SQL
    $mysqli = new mysqli('localhost','root'/*user*/,''/*pass*/,'cars'/*DB*/);    
    
    $id = $_POST['id'];
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
    $user_id = $_POST['user_id'];
    
    print_r ($_POST);

    // $sql = "UPDATE cars 
    //         SET district = '$district', city='$city', caryear='$caryear', carmonth='$carmonth', make = '$make', model='$model',bodyStyle='$bodyStyle', transmission='$transmission', exteriorColor='$exteriorColor', numberOfDoors='$numberOfDoors', engineCylinder='$engineCylinder', driveType='$driveType', fuelType='$fuelType', checkbox1='$checkbox1', checkbox2='$checkbox2', checkbox3='$checkbox3', checkbox4='$checkbox4', condition1='$condition1', mileage='$mileage', hand='$hand', engineVolume='$engineVolume', enginePower='$enginePower', image1='$image1', image2='$image2', image3='$image3', image4='$image4', image5='$image5', firstname='$firstname', lastname='$lastname', phone='$phone', email='$email', password='$password' 
    //         WHERE ID = $id";
    // $result = $mysqli->query($sql);

    $sql = "UPDATE cars 
    -- SET district = '$district', city='$city', caryear='$caryear', carmonth='$carmonth', make = '$make', model='$model',bodyStyle='$bodyStyle', transmission='$transmission', exteriorColor='$exteriorColor', numberOfDoors='$numberOfDoors', engineCylinder='$engineCylinder', driveType='$driveType', fuelType='$fuelType', checkbox1='$checkbox1', checkbox2='$checkbox2', checkbox3='$checkbox3', checkbox4='$checkbox4', condition1='$condition1', mileage='$mileage', hand='$hand', engineVolume='$engineVolume', enginePower='$enginePower', image1='$image1', image2='$image2', image3='$image3', image4='$image4', image5='$image5', firstname='$firstname', lastname='$lastname', phone='$phone', email='$email', password='$password' 
    SET district = '$district', city='$city', caryear='$caryear', carmonth='$carmonth', make = '$make', model='$model',bodyStyle='$bodyStyle', transmission='$transmission', exteriorColor='$exteriorColor', numberOfDoors='$numberOfDoors', engineCylinder='$engineCylinder', driveType='$driveType', fuelType='$fuelType',condition1='$condition1', mileage='$mileage', hand='$hand', engineVolume='$engineVolume', enginePower='$enginePower', image1='$image1', image2='$image2', image3='$image3', image4='$image4', image5='$image5', firstname='$firstname', lastname='$lastname', phone='$phone', email='$email', password='$password' 
    WHERE ID = $id";
$result = $mysqli->query($sql);

   
//go to another page: student-list.php
header("location: carSales000.php");

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

    <link rel="stylesheet" href="CSS/style_edit.css">
</head>
<!-- <body class="back" dir="rtl"> -->
<body>

<?php
include 'header.php';

?>
<article class="container">
<!-- form>input:text*6 -->
<!-- <input type="submit" value="Send Form"> -->
<div class="white"><h2><b>Edit Form</b><h2></div><br/>

<form method="POST" class="card" action="">
<!-- <h2 class="white text-center">Sign Up</h2> -->

<input type="hidden" value="<?php echo $id;?>"class="" name="id">

<!-- District <div id="district" value=""></div> -->
District <input class="myInputs" type="text" readonly="readonly" value="<?php echo $district?>" name="district"><br>

<!-- City <div id="city" value=""></div> -->

<!-- District <div class="field dropdown">
            <select name='district'>
                <option <php if( $district == 'Jerusalem District'){echo 'selected';}?> label="Jerusalem District" value="Jerusalem District">Jerusalem District</option>
                <option <php if( $district == 'Tel-Aviv District'){echo 'selected';}?> label="Tel-Aviv District" value="Tel-Aviv District">Tel-Aviv District</option>
                <option <php if( $district == 'Central District'){echo 'selected';}?> label="Central District" value="Central District">Central District</option>
                <option <php if( $district == 'Haifa District'){echo 'selected';}?> label="Haifa District" value="Haifa District">Haifa District</option>
                <option <php if( $district == 'Northern District'){echo 'selected';}?> label="Northern District" value="Northern District">Northern District</option>
                <option <php if( $district == 'Southern District'){echo 'selected';}?> label="Southern District" value="Southern District">Southern District</option>
                <option <php if( $district == 'Judea and Samaria Area'){echo 'selected';}?> label="Judea and Samaria Area" value="Judea and Samaria Area">Judea and Samaria Area</option>
            </select>
        </div>-->

        
City <div class="field dropdown"> 

            <?php 

            if ($district == 'Jerusalem District')  { echo 
             "<select name='city'> 
                 <option label='$city' value='$city' selected='selected'>$city</option>
                 <option label='Jerusalem' value='Jerusalem'>Jerusalem</option>
                 <option label='Beit Shemesh' value='Beit Shemesh'>Beit Shemesh</option>
                 <option label='Abu Ghosh' value='Abu Ghosh'>Abu Ghosh</option>
                 <option label='Mevaseret Zion' value='Mevaseret Zion'>Mevaseret Zion</option>
                 <option label='Kiryat Ye'arim' value='Kiryat Ye'arim'>Kiryat Ye'arim</option>
                 <option label='Mateh Yehuda' value='Mateh Yehuda'>Mateh Yehuda</option>
             </select><br/>";

             } elseif ($district == 'Tel-Aviv District')  { echo 
                "<select name='city'> 
                    <option label='$city' value='$city' selected='selected'>$city</option>
                    <option label='Tel Aviv-Yafo' value='Tel Aviv-Yafo'>Tel Aviv-Yafo</option>
                    <option label='Bat Yam' value='Bat Yam'>Bat Yam</option>
                    <option label='Bnei Brak' value='Bnei Brak'>Bnei Brak</option>
                    <option label='Givatayim' value='Givatayim'>Givatayim</option>
                    <option label='Herzliya' value='Herzliya'>Herzliya</option>
                    <option label='Holon' value='Holon'>Holon</option>
                    <option label='Kiryat Ono' value='Kiryat Ono'>Kiryat Ono</option>
                    <option label='Or Yehuda' value='Or Yehuda'>Or Yehuda</option>
                    <option label='Ramat Gan' value='Ramat Gan'>Ramat Gan</option>
                    <option label='Ramat HaSharon' value='Ramat HaSharon'>Ramat HaSharon</option>
                    <option label='Azor' value='Azor'>Azor</option>
                    <option label='Kfar Shmaryahu' value='Kfar Shmaryahu'>Kfar Shmaryahu</option>
                </select><br/>";

                          } elseif ($district == 'Central District')  { echo 
                "<select name='city'> 
                    <option label='$city' value='$city' selected='selected'>$city</option>
                    <option label='Rishon-LeZion' value='Rishon-LeZion'>Rishon-LeZion</option>
                    <option label='Rehovot' value='Rehovot'>Rehovot</option>
                    <option label='Petah Tikva' value='Petah Tikva'>Petah Tikva</option>
                    <option label='Kfar Saba' value='Kfar Saba'>Kfar Saba</option>
                    <option label='Ness Ziona' value='Ness Ziona'>Ness Ziona</option>
                    <option label='Hod Ha Sharon' value='Hod Ha Sharon'>Hod Ha Sharon</option>
                    <option label='Lod' value='Lod'>Lod</option>
                    <option label='Ramla' value='Ramla'>Ramla</option>
                    <option label='Netanya' value='Netanya'>Netanya</option>
                    <option label='Yavne' value='Yavne'>Yavne</option>
                    <option label='Rosh Ha Ayin' value='Rosh Ha Ayin'>Rosh Ha Ayin</option>
                    <option label='Giv'at Shmuel' value='Giv'at Shmuel'>Giv'at Shmuel</option>
                    <option label='Ra'anana' value='Ra'anana'>Ra'anana</option>
                    <option label='El'ad' value='El'ad'>El'ad</option>
                    <option label='Kafr Qasim' value='Kafr Qasim'>Kafr Qasim</option>
                    <option label='Modi'in' value='Modi'in'>Modi'in</option>
                    <option label='Qalansawe' value='Qalansawe'>Qalansawe</option>
                    <option label='Tayibe' value='Tayibe'>Tayibe</option>
                    <option label='Tira' value='Tira'>Tira</option>
                    <option label='Gedera' value='Gedera'>Gedera</option>
                    <option label='Be'er Ya'akov' value='Be'er Ya'akov'>Be'er Ya'akov</option>
                    <option label='Gan Yavne' value='Gan Yavne'>Gan Yavne</option>
                    <option label='Kfar Yona' value='Kfar Yona'>Kfar Yona</option>
                </select><br/>";
            } elseif ($district == 'Haifa District')  { echo 
                "<select name='city'> 
                    <option label='$city' value='$city' selected='selected'>$city</option>
                    <option label='Haifa' value='Haifa'>Haifa</option>
                    <option label='Hadera' value='Hadera'>Hadera</option>
                    <option label='Kiryat Ata' value='Kiryat Ata'>Kiryat Ata</option>
                    <option label='Kiryat Bialik' value='Kiryat Bialik'>Kiryat Bialik</option>
                    <option label='Kiryat Motzkin' value='Kiryat Motzkin'>Kiryat Motzkin</option>
                    <option label='Kiryat Yam' value='Kiryat Yam'>Kiryat Yam</option>
                    <option label='Nesher' value='Nesher'>Nesher</option>
                    <option label='Or Akiva' value='Or Akiva'>Or Akiva</option>
                    <option label='Tirat Carmel' value='Tirat Carmel'>Tirat Carmel</option>
                    <option label='Zikhron Ya'akov' value='Zikhron Ya'akov'>Zikhron Ya'akov</option>
                    <option label='Hof Ha Carmel' value='Hof Ha Carmel'>Hof Ha Carmel</option>
                    <option label='Ummal-Fahm' value='Ummal-Fahm'>Ummal-Fahm</option>
                </select><br/>";

            } elseif ($district == 'Northern District')  { echo 
                "<select name='city'> 
                    <option label='$city' value='$city' selected='selected'>$city</option>
                    <option label='Acre' value='Afula'>Afula</option>
                    <option label='JerBet She'anusalem' value='Bet She'an'>Bet She'an</option>
                    <option label='Karmiel' value='Karmiel'>Karmiel</option>
                    <option label='Kiryat Shmona' value='Kiryat Shmona'>Kiryat Shmona</option>
                    <option label='Ma'alot-Tarshiha' value='Ma'alot-Tarshiha'>Ma'alot-Tarshiha</option>
                    <option label='Migdal Ha Emek' value='Migdal Ha Emek'>Migdal Ha Emek</option>
                    <option label='Nahariyya' value='Nahariyya'>Nahariyya</option>
                    <option label='Nazareth' value='Nazareth'>Nazareth</option>
                    <option label='Nazareth Illit' value='Nazareth Illit'>Nazareth Illit</option>
                    <option label='Safed' value='Safed'>Safed</option>
                    <option label='Sakhnin' value='Sakhnin'>Sakhnin</option>
                    <option label='Shefa-'Amr' value='Shefa-'Amr'>Shefa-'Amr</option>
                    <option label='Tamra' value='Tamra'>Tamra</option>
                    <option label='Tiberias' value='Tiberias'>Tiberias</option>
                    <option label='Yokneam' value='Yokneam'>Yokneam</option>
                </select><br/>";
            
            } elseif ($district == 'Southern District')  { echo 
                "<select name='city'> 
                    <option label='$city' value='$city' selected='selected'>$city</option>
                    <option label='Beersheba' value='Beersheba'>Beersheba</option>
                    <option label='Ashdod' value='Ashdod'>Ashdod</option>
                    <option label='Ashkelon' value='Ashkelon'>Ashkelon</option>
                    <option label='Eilat' value='Eilat'>Eilat</option>
                    <option label='Netivot' value='Netivot'>Netivot</option>
                    <option label='Arad' value='Arad'>Arad</option>
                    <option label='Dimona' value='Dimona'>Dimona</option>
                    <option label='Ofakim' value='Ofakim'>Ofakim</option>
                    <option label='Kiryat Gat' value='Kiryat Gat'>Kiryat Gat</option>
                    <option label='Kiryat Malakhi' value='Kiryat Malakhi'>Kiryat Malakhi</option>
                    <option label='Rahat' value='Rahat'>Rahat</option>
                    <option label='Sderot' value='Sderot'>Sderot</option>
                    <option label='Omer' value='Omer'>Omer</option>
                    <option label='Meitar' value='Meitar'>Meitar</option>
                </select><br/>";


            } elseif ($district == 'Judea and Samaria Area')  { echo 
                "<select name='city'> 
                    <option label='$city' value='$city' selected='selected'>$city</option>
                    <option label='Ariel' value='Ariel'>Ariel</option>
                    <option label='Betar Illit' value='Betar Illit'>Betar Illit</option>
                    <option label='Ma'ale Adumim' value='Ma'ale Adumim'>Ma'ale Adumim</option>
                    <option label='Modi'in Illit' value='Modi'in Illit'>Modi'in Illit</option>
                    <option label='Kiryat Arba' value='Kiryat Arba'>Kiryat Arba</option>
                    <option label='Gush Etzion' value='Gush Etzion'>Gush Etzion</option>
                    <option label='Har Hebron' value='Har Hebron'>Har Hebron</option>
                    <option label='Megilot Dead Sea' value='Megilot Dead Sea'>Megilot Dead Sea</option>   
                </select><br/>";
             }
             ?>
     </div> 
Year <div class="field dropdown">
            <select name='caryear'>
                <option <?php if( $caryear == '2018'){echo 'selected';}?> label="2018" value="2018">2018</option>
                <option <?php if( $caryear == '2017'){echo 'selected';}?> label="2017" value="2017">2017</option>
                <option <?php if( $caryear == '2016'){echo 'selected';}?> label="2016" value="2016">2016</option>
                <option <?php if( $caryear == '2015'){echo 'selected';}?> label="2015" value="2015">2015</option>
                <option <?php if( $caryear == '2014'){echo 'selected';}?> label="2014" value="2014">2014</option>
                <option <?php if( $caryear == '2013'){echo 'selected';}?> label="2013" value="2013">2013</option>
                <option <?php if( $caryear == '2012'){echo 'selected';}?> label="2012" value="2012">2012</option>
                <option <?php if( $caryear == '2011'){echo 'selected';}?> label="2011" value="2011">2011</option>
                <option <?php if( $caryear == '2010'){echo 'selected';}?> label="2010" value="2010">2010</option>
            </select>
        </div>
Month <div class="field dropdown">
            <select name="carmonth">
                <option <?php if( $carmonth == 'January'){echo 'selected';}?> label="January" value="January">January</option>
                <option <?php if( $carmonth == 'February'){echo 'selected';}?> label="February" value="February">February</option>
                <option <?php if( $carmonth == 'March'){echo 'selected';}?> label="March" value="March">March</option>
                <option <?php if( $carmonth == 'April'){echo 'selected';}?> label="April" value="April">April</option>
                <option <?php if( $carmonth == 'May'){echo 'selected';}?> label="May" value="May">May</option>
                <option <?php if( $carmonth == 'June'){echo 'selected';}?> label="June" value="June">June</option>
                <option <?php if( $carmonth == 'July'){echo 'selected';}?> label="July" value="July">July</option>
                <option <?php if( $carmonth == 'August'){echo 'selected';}?> label="August" value="August">August</option>
                <option <?php if( $carmonth == 'September'){echo 'selected';}?> label="September" value="September">September</option>
                <option <?php if( $carmonth == 'October'){echo 'selected';}?> label="October" value="October">October</option>
                <option <?php if( $carmonth == 'November'){echo 'selected';}?> label="November" value="November">November</option>
                <option <?php if( $carmonth == 'December'){echo 'selected';}?> label="December" value="December">December</option>
            </select>
        </div>
<!-- Make <div class="field dropdown">
            <select name='make'>
                <option <php if( $make == 'BMW'){echo 'selected';}?> label="BMW" value="BMW">BMW</option>
                <option <php if( $make == 'Audi'){echo 'selected';}?> label="Audi" value="Audi">Audi</option>
                <option <php if( $make == 'Honda'){echo 'selected';}?> label="Honda" value="Honda">Honda</option>
            </select>
        </div> -->

<!-- Make 2 <div id="middle" value=""></div>
Model 2 <div id="more" value=""></div> -->
<!-- Make <div id="makers" value=""></div> -->
Make <input class="myInputs" type="text" readonly="readonly" value="<?php echo $make?>" name="make"><br>
<!-- <?php echo $enginePower ?> -->
<!-- Model <div id="models" value=""></div> -->

Model <div class="field dropdown">

            <?php 
            if ($make == 'BMW')  { echo 
             "<select name='model'> 
                 <option label='$model' value='$model' selected='selected'>$model</option>
                 <option label='X6' value='X6'>X6</option>
                 <option label='X5' value='X5'>X5</option>
                 <option label='X4' value='X4'>X4</option>
                 <option label='X3' value='X3'>X3</option>
                 <option label='X2' value='X2'>X2</option>
                 <option label='X1' value='X1'>X1</option>
             </select><br/>";
             } elseif ($make == 'Audi') { echo 
             "<select name='model'> 
                 <option label='$model' value='$model' selected='selected'>$model</option>
                 <option label='TT' value='TT'>TT</option>
                 <option label='RS8' value='RS8'>RS8</option>
                 <option label='RS7' value='RS7'>RS7</option>
             </select><br/>";
             } elseif ($make == 'Honda') { echo
             "<select name='model'> 
                 <option label='$model' value='$model' selected='selected'>$model</option>
                 <option label='Civic' value='Civic'>Civic</option>
                 <option label='Accord' value='Accord'>Accord</option>
                 <option label='Fit' value='Fit'>Fit</option>
                 <option label='CR-V' value='CR-V'>CR-V</option>
             </select><br/>";
             }
             ?>
     </div> 


Body Style <div class="field dropdown">
            <select name="bodyStyle">
                <option <?php if( $bodyStyle == 'Minivan'){echo 'selected';}?> label="Minivan" value="Minivan">Minivan</option>
                <option <?php if( $bodyStyle == 'Coupe'){echo 'selected';}?> label="Coupe" value="Coupe">Coupe</option>
                <option <?php if( $bodyStyle == 'Hetchback'){echo 'selected';}?> label="Hetchback" value="Hetchback">Hetchback</option>
                <option <?php if( $bodyStyle == 'Sedan'){echo 'selected';}?> label="Sedan" value="Sedan">Sedan</option>
                <option <?php if( $bodyStyle == 'SUV'){echo 'selected';}?> label="SUV" value="SUV">SUV</option>
            </select>
            </div>
Transmission <div class="field dropdown">
            <select name="transmission">
                <option <?php if( $transmission == 'Automanual'){echo 'selected';}?> label="Automanual" value="Automanual">Automanual</option>
                <option <?php if( $transmission == 'Automatic'){echo 'selected';}?> label="Automatic" value="Automatic">Automatic</option>
                <option <?php if( $transmission == 'Manual'){echo 'selected';}?> label="Manual" value="Manual">Manual</option>
            </select>
            </div>
Exterior Color <div class="field dropdown">
            <select name="exteriorColor">
                <option <?php if( $exteriorColor == 'Beige'){echo 'selected';}?> label="Beige" value="Beige">Beige</option>
                <option <?php if( $exteriorColor == 'Black'){echo 'selected';}?> label="Black" value="Black">Black</option>
                <option <?php if( $exteriorColor == 'Blue'){echo 'selected';}?> label="Blue" value="Blue">Blue</option>
                <option <?php if( $exteriorColor == 'Brown'){echo 'selected';}?> label="Brown" value="Brown">Brown</option>
                <option <?php if( $exteriorColor == 'Gold'){echo 'selected';}?> label="Gold" value="Gold">Gold</option>
                <option <?php if( $exteriorColor == 'Grey'){echo 'selected';}?> label="Grey" value="Grey">Green</option>
                <option <?php if( $exteriorColor == 'Green'){echo 'selected';}?> label="Green" value="Green"> Gold</option>
                <option <?php if( $exteriorColor == 'Orange'){echo 'selected';}?> label="Orange" value="Orange">Orange</option>
                <option <?php if( $exteriorColor == 'Pink'){echo 'selected';}?> label="Pink" value="Pink">Pink</option>
                <option <?php if( $exteriorColor == 'Purple'){echo 'selected';}?> label="Purple" value="Purple">Purple</option>
                <option <?php if( $exteriorColor == 'Red'){echo 'selected';}?> label="Red" value="Red">Red</option>
                <option <?php if( $exteriorColor == 'White'){echo 'selected';}?> label="White" value="White">White</option>
                <option <?php if( $exteriorColor == 'Silver'){echo 'selected';}?> label="Silver" value="Silver">Silver</option>
                <option <?php if( $exteriorColor == 'Yellow'){echo 'selected';}?> label="Yellow" value="Yellow">Yellow</option>
            </select>
            </div>
Number Of Doors <div class="field dropdown">
            <select name="numberOfDoors">
                <option <?php if( $numberOfDoors == '2 Doors'){echo 'selected';}?> label="2 Doors" value="2 Doors">2 Doors</option>
                <option <?php if( $numberOfDoors == '3 Doors'){echo 'selected';}?> label="3 Doors" value="3 Doors">3 Doors</option>
                <option <?php if( $numberOfDoors == '4 Doors'){echo 'selected';}?> label="4 Doors" value="4 Doors">4 Doors</option>
                <option <?php if( $numberOfDoors == '5 Doors'){echo 'selected';}?> label="5 Doors" value="5 Doors">5 Doors</option>
                <option <?php if( $numberOfDoors == '6 Doors'){echo 'selected';}?> label="6 Doors" value="6 Doors">6 Doors</option>
            </select>
            </div>
Engine Cylinder <div class="field dropdown">
            <select name="engineCylinder">
                <option <?php if( $engineCylinder == '1 cylinder'){echo 'selected';}?> label="1 cylinder" value="1 cylinder">1 cylinder</option>
                <option <?php if( $engineCylinder == '2 cylinder'){echo 'selected';}?> label="2 cylinder" value="2 cylinder">2 cylinder</option>
                <option <?php if( $engineCylinder == '3 cylinder'){echo 'selected';}?> label="3 cylinder" value="3 cylinder">3 cylinder</option>
                <option <?php if( $engineCylinder == '4 cylinder'){echo 'selected';}?> label="4 cylinder" value="4 cylinder">4 cylinder</option>
                <option <?php if( $engineCylinder == '5 cylinder'){echo 'selected';}?> label="5 cylinder" value="5 cylinder">5 cylinder</option>
                <option <?php if( $engineCylinder == '6 cylinder'){echo 'selected';}?> label="6 cylinder" value="6 cylinder">6 cylinder</option>
                <option <?php if( $engineCylinder == '8 cylinder'){echo 'selected';}?> label="8 cylinder" value="8 cylinder">8 cylinder</option>
                <option <?php if( $engineCylinder == '10 cylinder'){echo 'selected';}?> label="10 cylinder" value="10 cylinder">10 cylinder</option>
                <option <?php if( $engineCylinder == '12 cylinder'){echo 'selected';}?> label="12 cylinder" value="12 cylinder">12 cylinder</option>
            </select>
            </div>
Drive Type  <div class="field dropdown">
            <select name="driveType">
                <option <?php if( $driveType == '4x2/2wheeldrive'){echo 'selected';}?>label="4x2 / 2 wheel drive" value="4x2/2wheeldrive">4x2 / 2 wheel drive</option>
                <option <?php if( $driveType == '4x4/4wheeldrive'){echo 'selected';}?>label="4x4 / 4 wheel drive" value="4x4/4wheeldrive">4x4 / 4 wheel drive</option>
                <option <?php if( $driveType == 'AWD'){echo 'selected';}?>label="AWD" value="AWD">AWD</option>
                <option <?php if( $driveType == 'FWD'){echo 'selected';}?>label="FWD" value="FWD">FWD</option>
                <option <?php if( $driveType == 'RWD'){echo 'selected';}?>label="RWD" value="RWD">RWD</option>
            </select>
            </div>

Fuel Type <div class="field dropdown">
            <select name="fuelType">
                <option <?php if( $fuelType == 'Compressed Natural Gas'){echo 'selected';}?> label="Compressed Natural Gas" value="Compressed Natural Gas">Compressed Natural Gas</option>
                <option <?php if( $fuelType == 'Diesel'){echo 'selected';}?> label="Diesel" value="Diesel">Diesel</option>
                <option <?php if( $fuelType == 'E85 Flex Fuel'){echo 'selected';}?> label="E85 Flex Fuel" value="E85 Flex Fuel">E85 Flex Fuel</option>
                <option <?php if( $fuelType == 'Electric'){echo 'selected';}?> label="Electric" value="Electric">Electric</option>
                <option <?php if( $fuelType == 'Gasoline'){echo 'selected';}?> label="Gasoline" value="Gasoline">Gasoline</option>
                <option <?php if( $fuelType == 'Hybrid'){echo 'selected';}?> label="Hybrid" value="Hybrid">Hybrid</option>
            </select>
            </div>

<!-- Entertainment <input type="checkbox" value="<?php echo $checkbox1 ?>" name="checkbox1">CD (Single Disk)<br>
<input type="checkbox" value="<?php echo $checkbox2 ?>" name="checkbox2">CD (Multi Disk)<br>
<input type="checkbox" value="<?php echo $checkbox3 ?>" name="checkbox3">AM/FM Stereo<br>
<input type="checkbox" value="<?php echo $checkbox4 ?>" name="checkbox4">DVD System<br> -->

<label class="label"><h4>Personal Information</h4></label><br/>

Condition <div class="field dropdown">
            <select name='condition1'>
                <option <?php if( $condition1 == 'excellent'){echo 'selected';}?> label="excellent" value="excellent">excellent</option>
                <option <?php if( $condition1 == 'good'){echo 'selected';}?> label="good" value="good">good</option>
                <option <?php if( $condition1 == 'needs repair'){echo 'selected';}?> label="needs Repair" value="needs repair">needs repair</option>
                <option <?php if( $condition1 == 'for parts'){echo 'selected';}?> label="for Parts" value="for parts">for parts</option>
            </select>
        </div>

Mileage <input class="myInputs" type="text" value="<?php echo $mileage ?>" name="mileage">
Hand <div class="field dropdown">
            <select name='hand'>
                <option <?php if( $hand == '1'){echo 'selected';}?> label="1" value="1">1</option>
                <option <?php if( $hand == '2'){echo 'selected';}?> label="2" value="2">2</option>
                <option <?php if( $hand == '3'){echo 'selected';}?> label="3" value="3">3</option>
                <option <?php if( $hand == '4'){echo 'selected';}?> label="4" value="4">4</option>
                <option <?php if( $hand == '5 and more'){echo 'selected';}?> label="5 and more" value="5 and more">5 and more</option>
            </select>
        </div>
Engine Volume <input class="myInputs" type="text" value="<?php echo $engineVolume ?>" name="engineVolume">
Engine Power <input class="myInputs" type="text" value="<?php echo $enginePower ?>" name="enginePower"><br/>
Images <input class="myInputs" type="text" value="<?php echo $image1 ?>" name="image1"><br/>
<input class="myInputs" type="text" value="<?php echo $image2 ?>" name="image2"><br/>
<input class="myInputs" type="text" value="<?php echo $image3 ?>" name="image3"><br/>
<input class="myInputs" type="text" value="<?php echo $image4 ?>" name="image4"><br/>
<input class="myInputs" type="text" value="<?php echo $image5 ?>" name="image5"><br/>
<label class="label"><h4>Your Contact Information</h4></label><br/>
First Name <input class="myInputs" type="text" value="<?php echo $firstname ?>" name="firstname"><br>
Last Name <input class="myInputs" type="text" value="<?php echo $lastname ?>" name="lastname"><br>
Phone Number <input class="myInputs" type="text" readonly="readonly" value="<?php echo $phone ?>" name="phone"><br>
E-mail <input class="myInputs" type="email" value="<?php echo $email ?>" name="email"><br>
Password<input class="myInputs" type="text" value="<?php echo $password ?>" name="password"><br>
<!-- <input type="password" name="password" placeholder="Password"> -->
<input class="btn btn-lg btn-secondary btn-col text-uppercase" id="submit" type="submit" value="Send Form"> <br> 



</form>

</article>
<!-- <script src="js/regionCities.js"></script>
<script src="js/makeModels0.js"></script> -->

<?php
include_once('footer.php');
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>