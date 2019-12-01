<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}

    $page_name = "Body Armor";
    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
    echo<<<ENDL
    <body>
                <h1><b>BodyArmor</b></h1>
    <p>Explore our range of signature hoodies, t-shirts, polo shirts, and button down shirts....all
    legitametely bullet proof!</p>
    <img src='../img/ba.jpg' alt='BP1' height='300' width='300'>
                  </body>
ENDL;
?>
