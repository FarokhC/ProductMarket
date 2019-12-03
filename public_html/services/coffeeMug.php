<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}

    $page_name = "Coffee Mug";
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
    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
    echo<<<ENDL
    <body>
                <h1><b>Coffee Mug</b></h1>
                <p>Appreciate a warm cup of morning joe with our state-of-the-art coffee mug, free from danger.</p>
                <img src='../img/cof.jpg' alt='BP1' height='300' width='300'>
                  </body>
ENDL;
?>
