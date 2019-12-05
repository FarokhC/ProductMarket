<?php

require_once('../database_credentials.php');
require_once("../php/utilities.php");
session_start();
if(!isset($_SESSION['username'])){
  header("Location: /php/login.php");
  exit;
}

    $page_name = "iGun";
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
    <body>
                <h1><b>iGun</b></h1>
                <p>Sometimes, in a shooting situation, we are required to fight it out, Wild Wild West style.  With our
              new iGun app, your smart device will immediately turn into a loaded gun (note, only works when it senses a shot
              has been fired in a nearby range within the last 10 seconds).<br>
              <img src='../img/ig.jpg' alt='BP1' height='300' width='300'>
                  </body>
ENDL;
getReviews($servername, $serverUsername, $serverPassword, $dbname, $page_name);

?>
