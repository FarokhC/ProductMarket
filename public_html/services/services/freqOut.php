<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}

    $page_name = "FreqOut";
    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
    echo<<<ENDL
    <body>
                <h1><b>FreqOut</b></h1>
    <p>We've collaborated with the leading brain scientists in Eastern Europe to create our latest protective offering: Freq Out. Science has shown that brain activation patterns when someone is extremely rageful (as is common in a mass shooter) to have a specific signature. Through extensive research, scientists have determined a specific sound frequency that only affects brains exhibiting that signature activation of rage. With our FreqOut app, your device will automatically emit that frequency when needed. The shooter will have to drop his gun due to the extreme disturbance to his rage-filled brain caused by the sound.</p>


    <img src='../img/fo1.jpg' alt='BP1' height='300' width='300'>
      <img src='../img/fo2.jpg' alt='BP1' height='300' width='300'>
                  </body>
ENDL;
?>
