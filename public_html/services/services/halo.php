<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}

    $page_name = "Halo";
    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
    echo<<<ENDL
    <body>
                <h1><b>Halo</b></h1>
                <p>Explore the outdoors in style and safety with our signature Halo hat: a bullet proof cap!</p>
                <img src='../img/halo1.jpg' alt='BP1' height='300' width='300'>
                  </body>
ENDL;
?>
