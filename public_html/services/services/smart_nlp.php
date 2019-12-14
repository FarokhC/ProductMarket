<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}
    $page_name = "Smart NLP Solution";
    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
    echo<<<ENDL
    <h1>Smart NLP</h1>
    <img src='https://inlpcenter.org/wp-content/uploads/2016/10/what-is-nuero-linguistic-programming.png'><br>
    <h2>Details</h2>
    <ul>
        <li>Smart NLP solution</li>
        <li>Sentiment Analysis</li>
    </ul>
ENDL;
?>
