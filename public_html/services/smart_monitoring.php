<?php
   require_once('../database_credentials.php');
   require_once("../php/utilities.php");
session_start();
if(!isset($_SESSION['username'])){
  header("Location: /php/login.php");
  exit;
}
    $page_name = "Smart Monitoring Solutions";
    $visited = false;
    $pages = $_SESSION['sHistory'];
    foreach($pages as $key => $value){
      if($value == $page_name){
        $visited = true;
      }
    }
    if(!$visited){
      array_push($pages, $page_name);
      $_SESSION['sHistory'] = $pages;
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
    <h1>Smart Monitoring</h1>
    <img src='https://www.x-logic.net/img/projects/project-4.jpg'><br>
    <h2>Details</h2>
    <ul>
        <li>Smart Monitoring solution</li>
        <li>video surveillance</li>
    </ul>
ENDL;
getReviews($servername, $serverUsername, $serverPassword, $dbname, $page_name);

?>
