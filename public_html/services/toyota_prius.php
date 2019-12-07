<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}
    $page_name = "Toyota Prius";
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
    <h1>Toyota Prius</h1>
    <img src='https://i.gaw.to/content/photos/38/92/389207_2020_Toyota_Prius.jpg?280x175' alt='Toyota Prius'><br>
    <h2>Vehicle Details</h2>
    <ul>
        <li>Horsepower: 121</li>
        <li>Torque: 105 lb-ft</li>
        <li>Fuel Economy: 58 city / 53 highway</li>
        <li>0 - 60 MPH time: 9.8 seconds</li>
    </ul>
ENDL;
?>
