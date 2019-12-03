<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}

    $page_name = "Coolant Flush";
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
    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
    echo<<<ENDL
    <h1>Coolant Flush</h1>
    <img src='https://www.carcrafters.com/wp-content/uploads/2016/10/CarCrafters_Blog_Coolant.jpg' alt='Coolant Flush'><br>
    <h2>Details</h2>
    <ul>
        <li>Premium coolant flush</li>
        <li>Bleed air bubbles from coolant system</li>
        <li>30 day warranty</li>
    </ul>
ENDL;
?>
