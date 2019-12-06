<?php
    require_once('../database_credentials.php');
    require_once("../php/utilities.php");
session_start();
if(!isset($_SESSION['username'])){
  header("Location: /php/login.php");
  exit;
}

    $page_name = "FreqOut";
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
                <h1><b>FreqOut</b></h1>
    <p>We've collaborated with the leading brain scientists in Eastern Europe to create our latest protective offering: Freq Out. Science has shown that brain activation patterns when someone is extremely rageful (as is common in a mass shooter) to have a specific signature. Through extensive research, scientists have determined a specific sound frequency that only affects brains exhibiting that signature activation of rage. With our FreqOut app, your device will automatically emit that frequency when needed. The shooter will have to drop his gun due to the extreme disturbance to his rage-filled brain caused by the sound.</p>


    <img src='../img/fo1.jpg' alt='BP1' height='300' width='300'>
      <img src='../img/fo2.jpg' alt='BP1' height='300' width='300'>
                  </body>
ENDL;
getReviews($servername, $serverUsername, $serverPassword, $dbname, $page_name);

?>
