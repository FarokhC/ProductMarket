<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}
    $page_name = "Smart Agriculture Solution";
    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
    echo<<<ENDL
    <h1>Smart Agriculture</h1>
    <img src='https://miro.medium.com/max/612/1*IhuQZDtRCURAyCbwUnV-ng.jpeg'><br>
    <h2>Details</h2>
    <ul>
        <li>Smart Agriculture solution</li>
        <li>Detecting soil quality</li>
    </ul>
ENDL;
?>
