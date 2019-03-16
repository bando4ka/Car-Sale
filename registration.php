<?php
include_once('classUsers.php');
$error = "";
// $error = '';
if($_SERVER['REQUEST_METHOD'] =='POST'){
$email = $_POST['email'];
$password = $_POST['password'];

include_once('config.php');



$res = $mysqli->query("SELECT * FROM users WHERE email = '$email'");
//echo $result;
 



if($res->num_rows == 0){
    //$row = $result->fetch_assoc();
            //login is ok
            setcookie('user', $email, time() + 10*365*24*60*60); //10 years.
            setcookie('user_id', $email, time() + 10*365*24*60*60); 
            header ('location: carSales000.php');

            $result = $mysqli->query("INSERT INTO users (email, password)
            VALUES ('$email', '$password');");
            // echo "Thank You for your registration!"; 
            // } else  { 
            //     echo "Error"; 
            // }

// } else {
//             //bad
//             //$error = '<h1>wrong</h1>';
//             $error = '<div class="alert alert-danger alert-dismissible">
//             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
//             <strong>Worning </strong> User with the same e-mail already exists.
//           </div>';


} else { 
  $error = "User with the same e-mail already exists "; 
}
}else{
    $_SERVER['REQUEST_METHOD'] =='GET';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/Style.css">
</head>

<body>
<?php
include_once('header.php');
//echo $error;
?>

 <div class="container">
 <!-- <form action="mainUsers.php" method="POST"> -->
 <form action="" method="POST">

<div class="white"><h2><b>Registration</b><h2></div><br/>
<?php 
 
if ($error){
  echo "
        <div class='alert alert-info alert-dismissible fade show' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
        <strong>Warning! </strong>$error
      </div>
        ";
}
?>
 <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
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
              <button class="btn btn-lg btn-secondary btn-block text-uppercase" type="submit" data-toggle="modal" data-target="#exampleModal">Register</button>

                  <!-- <div class cont>
                   
                    <div class="modal fade" id="exampleModal" >
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Thank you!</h5>
                              https://getbootstrap.com/docs/4.1/components/modal/
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                  </button>
                        </div> -->
                        <!-- <div class="modal-body">
                              <h6>Cleacking yes will make Comic Sans your new System defoult font. Seriously, have you thought this through?</h6>
                        </div>
                        <div class="modal-footer">
                                  <div class="myFlex">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Yes, do it now!</button>
                              <button type="button" class="btn btn-primary" data-dismiss="modal">No, I'm insane!</button>
                                  </div>
                        </div> -->
                      <!-- </div>
                      </div>
                    </div>
                    </div> -->

              <a class="d-block text-center mt-2 small" href="signIn.php">Sign In</a>
              <!-- <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button> -->
            </form>
          </div>
        </div>
      </div>
    </div>

<!-- <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>-->
            
</form>

</div>
<?php
include_once ('footer.php');
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>


</html>
