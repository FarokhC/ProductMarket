<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}
    $page_name = "Brake Service";
    $visited = false;
    $pages = $_SESSION['cHistory'];
    foreach($pages as $key => $value){
      if($value == $page_name){
        $visited = true;
      }
    }
    if(!$visited){
      array_push($pages, $page_name);
      $_SESSION['cHistory'] = $pages;
    }
    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
    echo<<<ENDL
    <h1>Brake Service</h1>
    <img src='https://images-stag.jazelc.com/uploads/sampacksfivestarfordoflewisville/Service-Brakes-Roter.jpeg' alt='Brake Service'><br>
    <h2>Details</h2>
    <ul>
        <li>Brake rotor rotation</li>
        <li>All wheels brake pad replacement</li>
        <li>Ceramic brake pads</li>
        <li>Improved safety and handling</li>
    </ul>
ENDL;
?>
