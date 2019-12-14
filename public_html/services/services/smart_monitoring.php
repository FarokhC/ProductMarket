<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}
    $page_name = "Smart Monitoring Solution";
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
?>
