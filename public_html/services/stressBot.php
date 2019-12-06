<?php
    require_once('../database_credentials.php');
    require_once("../php/utilities.php");
session_start();
if(!isset($_SESSION['username'])){
  header("Location: /php/login.php");
  exit;
}

    $page_name = "Stress Bot";
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
                <h1><b>Stress Bot</b></h1>
                <p>A mass shooting is a traumatizing event.  Don't hold all the feelings of terror and sadness in.  Talk to
                our Stress Bot.  We've teamed up with Freudian psychologists from remote German villages and the creators
                of Alexa at Amazon to create our bot.  He will help you get through the after shocks</p>
                <img src='../img/sb1.jpg' alt='BP1' height='400' width='400'>
                <img src='../img/sb2.jpg' alt='BP1' height='300' width='400'>
                  </body>
ENDL;
getReviews($servername, $serverUsername, $serverPassword, $dbname, $page_name);

?>
