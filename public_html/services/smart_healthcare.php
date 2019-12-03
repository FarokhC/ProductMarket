<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}
    $page_name = "Smart Healthcare Solutions";
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
    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
    echo<<<ENDL
    <h1>Smart Healthcare</h1>
    <img src='https://revcycleintelligence.com/images/site/features/2018-11-29_Healthcare_workforce_managment.jpg'><br>
    <h2>Details</h2>
    <ul>
        <li>Smart healthcare solution</li>
        <li>Detecting cancer</li>
    </ul>
ENDL;
?>
