<?php
    require_once('../database_credentials.php');
    require_once("../php/utilities.php");
session_start();
if(!isset($_SESSION['username'])){
  header("Location: /php/login.php");
  exit;
}

    $page_name = "PlayDead";
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
                <h1><b>PlayDead</b></h1>
    <p>During a mass shooting event, we are advised to run. However this is not always possible. Sometimes, we have to risk it all and play dead. With our new PlayDead app, this is guaranteed to work.</p>

    <p>We've collaborated with world-renowned light magicians to use your device's light emitting propensity to give you the appearance of looking dead. While you can also use this on Halloween or to fool your friends, we do not recommend it. Simply allow the app to work while not directly running on your device.</p>
    <img src='../img/pd.jpg' alt='BP1' height='300' width='400'>
                  </body>
ENDL;
getReviews($servername, $serverUsername, $serverPassword, $dbname, $page_name);

?>
