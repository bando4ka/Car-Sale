


<?php

//1)mysql
$mysqli = new mysqli('localhost','root'/*user*/,''/*pass*/,'cars'/*DB*/);
//2)sql SELECT * FROM Students
$sql = "SELECT * FROM cars";
//3)mysql 
$result = $mysqli->query($sql);//נריץ את השאילתה
// echo $result;
//$sallary["Olga"] = "5000";//assotiative array
//cursor

// $row = $result->fetch_array();//returns next row
// echo $row['FirstName'];
// echo $row['LastName'];
// echo '<br>';

// $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
//     $pdo = new PDO($dsn, $user, $pass);
//         $data = $pdo->query('SELECT * FROM goods');

//   

//<tbody> 



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Cars for Sale</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

<link rel="stylesheet" href="CSS/style_carSales.css">
</head>

<body>
<?php
include 'header.php';
?>
<article class="container carSales">

<div class="white"><h2><b>Car for Sale</b><h2></div>
<br/><br/>

<?php
$user = '';

if(isset($_COOKIE['user'])){
  $user = $_COOKIE['user'];
  $user_id = $_COOKIE['user_id'];

  //cars(id, userId)
  echo "Hi, $user";
}else{
  //header('location:login.php');
}
 
?>

<?php
while($row = $result->fetch_array()){//check if empty 
    echo '<section class="card">';
    $img = $row['image1'];//DB
    echo "<img src='$img' width='150px' height='100px' class='img rounded''>";//echo $row['Image'];
    
    
    $id = $row['ID'];
    $district = $row['district'];
    $city= $row['city'];
    // echo "<h5>".$row['make']."</h5>"."<br/>";
    $make =  $row['make'];
    $model = $row['model'];
    $caryear=  $row['caryear'];
    $transmission = $row['transmission'];
    $fuelType = $row['fuelType'];
    $mileage = $row['mileage'];
    $hand = $row['hand'];
    $engineVolume = $row['engineVolume'];
    $bodyStyle = $row['bodyStyle'];
    $exteriorColor = $row['exteriorColor'];
    
    echo "<table class='table' >
    <tr>
    <th>ID</th>
    <th>District</th>
    <th>City</th>
    <th>Make</th>
    <th>Model</th>
    <th>Year</th>
    <th>Transmission</th>
    <th>Fuel Type</th>
    <th>Mileage, km</th>
    <th>Hand</th>
    <th>Engine Volume</th>
    <th>Exterior Color</th>
    </tr>
    <tr>
    <td>$id</td>
    <td>$district</td>
    <td>$city</td>
    <td>$make</td>
    <td>$model</td>
    <td>$caryear</td>
    <td>$transmission</td>
    <td>$fuelType</td>
    <td>$mileage, km</td>
    <td>$hand</td>
    <td>$engineVolume, l</td>
    <td>$exteriorColor</td>
    </tr>
    <tbody> </table>";
    // echo $row['ID']."  ";
    // echo $row['district']."  ";
    // echo $row['city']."  ";
    // // echo "<h5>".$row['make']."</h5>"."<br/>";
    // echo $row['make']."  ";
    // echo $row['model']."  ";
    // echo $row['caryear']."  ";
    // echo $row['transmission']."  ";
    // echo $row['mileage']."  ";
    // echo $row['hand']."  ";
    // echo $row['engineVolume']."  ";
    // echo $row['bodyStyle']."  ";
    // echo $row['exteriorColor']."  ";
    
    echo 
    "<a href='more.php?id=$id' id='showMore'>
    <img width='15' src='img/Icon_More.png'>
    </a>";
    echo 
    "<a href='edit.php?id=$id'>
    <img width='15' src='img/Icon_Edit.png'>
    </a>";
    echo 
    "<a href='delete.php?id=$id'>
    <img width='15' src='img/Icon_Delete.png'>
    </a>";
    echo '</section>';


    

    
}


?>

   <!-- <div id="showAlert" class="btn btn-danger">Click to Show</div>
        <div id="alert">
        <form class="p">
            <h1>hi</h1>
            <input type="text"><br><br>
            <input type="text">
        </form>
    </div>
    </div>


    <div id="out"></div> -->

</article>
<?php
include 'footer.php';
?> 

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</body>


</html>