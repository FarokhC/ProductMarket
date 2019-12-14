<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}
    $page_name = "Smart Gaming Solution";
    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
    echo<<<ENDL
    <h1>Smart Gaming</h1>
    <img src='http://www.aigameresearch.org/wp-content/uploads/2012/06/AIGRMainNormal.png'><br>
    <h2>Details</h2>
    <ul>
        <li>Smart Gaming solution</li>
        <li>AI driven Game</li>
    </ul>
ENDL;
?>
