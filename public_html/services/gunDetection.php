<?php
    require_once('../database_credentials.php');
    require_once("../php/utilities.php");
session_start();
if(!isset($_SESSION['username'])){
  header("Location: /php/login.php");
  exit;
}

    $page_name = "Gun Detection App";
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

      incrementNumUsers($servername, $serverUsername, $serverPassword, $dbname, $page_name);
    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
    echo<<<ENDL
    <body>
                <h1><b>Gun Detection App</b></h1>
                <p>This app allows you to detect the presence of a gun within seconds using the latest in A.I. and
                pattern detection technology.  It also immediately does a probabilistic check on how sketch
                the gun holder is and uses heat detection technology (future development) to determine if shots were
                recently fired.  Directly dials 911 and sends screenshots without you doing a thing, just enable the App
                to access your location.</p><br><br>
            <img src="../img/gd1.jpg" alt="GD1" height="200" width="200">
            <img src="../img/gd2.jpg" alt="GD2" height="300" width="300">
                  </body>
ENDL;
getReviews($servername, $serverUsername, $serverPassword, $dbname, $page_name);

?>
