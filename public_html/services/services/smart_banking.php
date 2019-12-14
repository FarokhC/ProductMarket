<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}
    $page_name = "Smart Banking Solution";
    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
    echo<<<ENDL
    <h1>Smart Banking</h1>
    <img src='https://www.axis.com/blog/secure-insights/wp-content/uploads/sites/11/2019/01/banking_network_audio_analytics.jpg'><br>
    <h2>Details</h2>
    <ul>
        <li>Smart Banking solution</li>
        <li>Detecting Fraud</li>
    </ul>
ENDL;
?>
