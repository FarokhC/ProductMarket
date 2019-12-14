<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}
    $page_name = "Smart City Solutions";
    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
    echo<<<ENDL
    <h1>Smart City</h1>
    <img src='https://cdn.ttgtmedia.com/rms/onlineImages/iota-smart_city_components.jpg'><br>
    <h2>Details</h2>
    <ul>
        <li>Smart City solution</li>
        <li>Automatic cleaning</li>
    </ul>
ENDL;
?>
