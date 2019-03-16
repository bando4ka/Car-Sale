<?php
include_once('db_art.php');
include_once('classArticles.php');

// $result = $mysqli->query('SELECT * FROM articles');
$result = $mysqli->query('SELECT articles.id, articles.title, articles.textArticle, articles.image, articles.date, articles.views, articles.comments, authors.authorName, carticles.category
FROM ((articles  
INNER JOIN authors 
ON articles.author_id = authors.author_id)
INNER JOIN carticles 
ON articles.category_id = carticles.category_id)
ORDER BY articles.id;');


//new php array
$arr = array();
while($row=$result->fetch_assoc()){
    $id = $row['id'];
    $title = $row['title'];
    $textArticle = $row['textArticle'];
    $image = $row['image'];
    $date = $row['date'];
    $views = $row['views'];
    $comments = $row['comments'];
    $authorName = $row['authorName'];
    $category = $row['category'];

//     SELECT t1.emp_id, t1.emp_name, t1.hire_date, t2.dept_name
//     FROM employees AS t1 INNER JOIN departments AS t2
//     ON t1.dept_id = t2.dept_id ORDER BY emp_id;


// SELECT art.id, art.title, art.textArticle, art.image, art.date, art.views, art.comments, authors.authorName, catarticle.category
// FROM articles AS art 
// INNER JOIN autors 
// ON art.id_author = authors.id_author
// INNER JOIN catarticle 
// ON art.id_category = catarticle.id_category
// ORDER BY art.id;

// SELECT categories.title, goods.name, goods.id
// FROM (categories
// INNER JOIN goods
// ON categories.id = goods.category)
// INNER JOIN orders
// ON orders.items_id = goods.id
// ORDER BY categories.id;

    //testL
    //echo "<h1 class='card'>$title</h1>";

    array_push($arr, new Article($id, $title, $textArticle, $image, $date, $views, $comments, $authorName, $category));
}
//the array is full:
//show the objects as JSON:
//
echo json_encode($arr, JSON_UNESCAPED_UNICODE);





?>