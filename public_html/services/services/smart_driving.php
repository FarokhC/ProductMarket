<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}
    $page_name = "Smart Driving Solution";
    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
    echo<<<ENDL
    <h1>Smart Driving</h1>
    <img src='https://zykotech.com/wp-content/uploads/2017/01/ADAS-solution-1170x658.jpg'><br>
    <h2>Details</h2>
    <ul>
        <li>Smart Driving solution</li>
        <li>Autonomous Driving</li>
    </ul>
ENDL;
?>
