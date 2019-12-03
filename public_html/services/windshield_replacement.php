<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}
    $page_name = "Windshield Replacement";
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
    <h1>Windshield Replacement</h1>
    <img src='https://www.a-1autoglass.com/wp-content/uploads/2013/09/windshield-replacement.jpg' alt='Windshield Replacement'><br>
    <h2>Details</h2>
    <ul>
        <li>Premium laminated glass</li>
        <li>Windshield replcement supports vehicle sensors including forward collision cameras</li>
        <li>One year warranty on manufacturer defects</li>
    </ul>
ENDL;
?>
