<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}

    $page_name = "Gun Detection App";
    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
    echo<<<ENDL
    <body>
                <h1><b>Gun Detection App</b></h1>
                <p>This app allows you to detect the presence of a gun within seconds using the latest in A.I. and
                pattern detection technology.  It also immediately does a probabilistic check on how sketch
                the gun holder is and uses heat detection technology (future development) to determine if shots were
                recently fired.  Directly dials 911 and sends screenshots without you doing a thing, just enable the App
                to access your location.</p><br><br>
            <img src="../img/gd1.jpg" alt="GD1" height="200" width="200">
            <img src="../img/gd2.jpg" alt="GD2" height="300" width="300">
                  </body>
ENDL;
?>
