<?php
//include_once 'classUsers.php';
$error = '';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

        //mysqli
        include_once('config.php');

        $res = $mysqli->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
//echo $result;
 

if($res->num_rows > 0){
    //$row = $result->fetch_assoc();

            //login is ok
            setcookie('user', $email, time() + 10*365*24*60*60); //10 years.
            setcookie('user_id', $email, time() + 10*365*24*60*60); 

            // setcookie('user', $email, time() + 10*365*24*60*60);//10years.
            // // setcookie('id_user',  $row['id'], time() + 10*365*24*60*60);//10years.
            // setcookie('user_id',  $email, time() + 10*365*24*60*60);//10years.

            // header ('location homePage.php');
            header ('location: homePage.php');

} else {
            //bad
            //$error = '<h1>wrong</h1>';
            $error = '<div class="alert alert-info alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Wrong</strong> email or password.
          </div>';
        }
}

//echo "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
//var_dump($result);
//$User1 = new User($email, $password);



// $mysqli = new mysqli('localhost','root'/*user*/,''/*pass*/,'cars'/*DB*/);
// echo "<br>".$sql;

// if($row = $result->fetch_array()){
//     //set cookie
//     header("location: carSales000.php");
// }



// } else if($_SERVER['REQUEST_METHOD'] =='GET'){
//     //GET
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/Style.css">
</head>

<body>
<?php
include_once('header.php');

?>
 <div class="container">
 <div class="white"><h2><b>Sign In</b><h2></div>
<?php
echo $error;
?>

<form action="" method="POST">
<!-- <input type="email" placeholder="email" name="email" id="email" class="myInputs">
<input type="password" placeholder="password" name="password" id="password" class="myInputs">
<button class="btn btn-lg btn-secondary btn-block text-uppercase" type="submit" value="submit">Sign In</button>
<button class="btn btn-lg btn-secondary btn-block text-uppercase" type="submit" data-toggle="modal" data-target="#exampleModal">Register</button> -->

 <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin">
              <!-- <div class="form-label-group">
                <input type="text" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
                <label for="inputUserame">Username</label>
              </div> -->

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required>
                <label for="inputEmail">Email address</label>
              </div>
              
              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              
              <!-- <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                <label for="inputConfirmPassword">Confirm password</label>
              </div> -->

              <!-- <button class="btn btn-lg btn-secondary btn-block text-uppercase" type="submit">Register</button> -->
              <button class="btn btn-lg btn-secondary btn-block text-uppercase" type="submit" data-toggle="modal" data-target="#exampleModal">Sign In</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</form>
<?php

?>

</div>
<?php
include_once('footer.php');
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>


</html>