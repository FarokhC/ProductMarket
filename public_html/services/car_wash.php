<?php

require_once('../database_credentials.php');
require_once("../php/utilities.php");
session_start();
if(!isset($_SESSION['username'])){
  header("Location: /php/login.php");
  exit;
}
    $page_name = "Car Wash";
    $visited = false;
    $pages = $_SESSION['cHistory'];
    foreach($pages as $key => $value){
      if($value == $page_name){
        $visited = true;
      }
    }
    if(!$visited){
      array_push($pages, $page_name);
      $_SESSION['cHistory'] = $pages;
    }
    if(isset($_POST['review_text']) && isset($_POST['rating'])) {
      $username = $_SESSION['username'];
      $review_text = $_POST['review_text'];
      $rating = $_POST['rating'];
      addReview($servername, $serverUsername, $serverPassword, $dbname, $username, $review_text, $rating, $page_name);
      }

    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
    echo<<<ENDL
    <h1>Car Wash</h1>
    <img src='https://i.guim.co.uk/img/media/2ad114b11497f26aa9707389ebae56a4ad7c630b/0_0_7360_4417/master/7360.jpg?width=300&quality=85&auto=format&fit=max&s=a43f46a7cfe4489a8cd6c9f525ed1bc1' alt='Car Wash'><br>
    <h2>Details</h2>
    <ul>
        <li>Premium car wash soap</li>
        <li>Washed with fresh microfiber cloth</li>
    </ul>
ENDL;
getReviews($servername, $serverUsername, $serverPassword, $dbname, $page_name);

?>
