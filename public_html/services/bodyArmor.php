<?php

require_once('../database_credentials.php');
require_once("../php/utilities.php");
session_start();
// $pages = $_SESSION['bHistory'];
// array_push($pages, "BodyArmor");
// $_SESSION['bHistory'] = $pages;
if(!isset($_SESSION['username'])){
  header("Location: /php/login.php");
  exit;
} else {

    $page_name = "BodyArmor";
    $visited = false;
    $pages = $_SESSION['bHistory'];
    foreach($pages as $key => $value){
      if($value == $page_name){
        $visited = true;
      }
    }
    if(!$visited){
      array_push($pages, $page_name);
      $_SESSION['bHistory'] = $pages;
    }
    incrementNumUsers($servername, $serverUsername, $serverPassword, $dbname, $page_name);

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
<h1><b>BodyArmor</b></h1>
<p>Explore our range of signature hoodies, t-shirts, polo shirts, and button down shirts....all
legitametely bullet proof!</p>
<img src='../img/ba.jpg' alt='B' height='300' width='300'>
  </body>";
ENDL;

getReviews($servername, $serverUsername, $serverPassword, $dbname, $page_name);

// <h1><b>BodyArmor</b></h1>
// <p>Explore our range of signature hoodies, t-shirts, polo shirts, and button down shirts....all
// legitametely bullet proof!</p>
// <img src='../img/ba.jpg' alt='BP1' height='300' width='300'>
//   </body>
}
?>
