<?php
if($_SERVER['REQUEST_METHOD'] =='POST'){
    // echo "Wrong method"
} else if($_SERVER['REQUEST_METHOD'] =='GET') {  
//1)mysql
$mysqli = new mysqli('localhost','root'/*user*/,''/*pass*/,'cars'/*DB*/);
//2)sql SELECT * FROM Students
// $sql = "SELECT articles.id, articles.title, articles.textArticle, articles.image, articles.date, articles.views, articles.comments, authors.authorName, carticles.category
// FROM ((articles  
// INNER JOIN authors 
// ON articles.author_id = authors.author_id)
// INNER JOIN carticles 
// ON articles.category_id = carticles.category_id)
// ORDER BY articles.id;";
//3)mysql 
$result = $mysqli->query("SELECT articles.id, articles.title, articles.textArticle, articles.image, articles.date, articles.views, articles.comments, authors.authorName, carticles.category
FROM ((articles  
INNER JOIN authors 
ON articles.author_id = authors.author_id)
INNER JOIN carticles 
ON articles.category_id = carticles.category_id)
ORDER BY articles.id;");//נריץ את השאילתה
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drive.co.il</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/style_home.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    
</head>
<body>
<?php
include_once 'mainBanner.php';
include_once 'header.php';
// include 'db_art.php';
// include 'api.php';

?>
<!-- <article class="container"> -->
<!-- form>input:text*6 -->
<!-- <input type="submit" value="Send Form"> -->
<form method="GET"  action="">
<article class="container">
<?php
$user = '';
if(isset($_COOKIE['user'])){
  $user = $_COOKIE['user'];
  $id = $_COOKIE['user_id'];
  //cars(id, userId)
  echo "Hi, $user";
}else{
  //header('location:login.php');
}
?>
<h1 class="white">News</h1>
<?php
while($row = $result->fetch_array()) {
    echo '<section class="card">';
        $image = $row['image'];//DB
    echo "<img src='$image' width='300px' height='200px' class='rounded img'>";//echo $row['Image'];
        $id = $row['id'];
        echo "<div>".$row['category'];
        echo "<h5><strong>".$row['title']."</strong></h5></br>";
        // echo "<h6>".$article = substr(rtrim(substr($row["textArticle"], 0, 300), "!,.-"), 0, strrpos($row["textArticle"], ' '))."..."."<a id='readMore' href='#'>"."Read More"."</a>"."</h6><br/>";
        // echo "<div class='accordion'>"."<h6 >".$article = substr($row["textArticle"], 0, 300)." ..."."</h6>"."</div><br/>";
        
        echo "<h6 class='abridgedVersion'>".$article = substr($row["textArticle"], 0, 300)." ...  "."<a class='readMore' style='color:steelblue; cursor:pointer;'>"."Read More"."</a>"."</h6>";

        // echo $article = substr($row["textArticle"], 0, 20);
        // $article = rtrim($row["textArticle"], "!,.-");
        // $article = substr($row["textArticle"], 0, strrpos($row["textArticle"], ' '));
        // echo "<h6>".$article."… "."</h6>";
        echo "<h6 class='wholeArticle'>".$row["textArticle"]."   "."<a class='toBack' style='color:steelblue; cursor:pointer;'>"."To Back..."."</a>"."</h6><br/>";
        // echo "<a id='readMore'>"."Read More"."</a></br>";
        echo "<h6><strong>Author: ".$row['authorName']."</strong></h6>"."</div>";
        //echo "<h5>".$row['date']."</h5>";
        //echo "<h5>".$row['comments']."</h5>";  
        echo '</section>';
        };
    
?>



</article>
</form>

<?php
include_once('footer.php');
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/textArticle.js"></script>
</body>
</html>