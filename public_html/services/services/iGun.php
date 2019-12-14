<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}

    $page_name = "iGun";
    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
    echo<<<ENDL
    <body>
                <h1><b>iGun</b></h1>
                <p>Sometimes, in a shooting situation, we are required to fight it out, Wild Wild West style.  With our
              new iGun app, your smart device will immediately turn into a loaded gun (note, only works when it senses a shot
              has been fired in a nearby range within the last 10 seconds).<br>
              <img src='../img/ig.jpg' alt='BP1' height='300' width='300'>
                  </body>
ENDL;
?>
