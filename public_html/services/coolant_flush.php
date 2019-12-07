<?php
    require_once('../database_credentials.php');
    require_once("../php/utilities.php");
session_start();
if(!isset($_SESSION['username'])){
  header("Location: /php/login.php");
  exit;
}

    $page_name = "Coolant Flush";
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
    if(isset($_POST['review_text']) && isset($_POST['rating'])) {
      $username = $_SESSION['username'];
      $review_text = $_POST['review_text'];
      $rating = $_POST['rating'];
      addReview($servername, $serverUsername, $serverPassword, $dbname, $username, $review_text, $rating, $page_name);
      }

      incrementNumUsers($servername, $serverUsername, $serverPassword, $dbname, $page_name);
    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
//     echo<<<ENDL
//     <h1>Coolant Flush</h1>
//     <img src='https://www.carcrafters.com/wp-content/uploads/2016/10/CarCrafters_Blog_Coolant.jpg' alt='Coolant Flush'><br>
//     <h2>Details</h2>
//     <ul>
//         <li>Premium coolant flush</li>
//         <li>Bleed air bubbles from coolant system</li>
//         <li>30 day warranty</li>
//     </ul>
// ENDL;

    $this_file_name = basename(__FILE__);
    $curl_url = "https://farokhcarrentalservice.000webhostapp.com/services/" . $this_file_name;
    $ch = curl_init($curl_url);
    $fp = fopen("product_page.txt", "w");

    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    curl_exec($ch);
    curl_close($ch);

    echo file_get_contents("product_page.txt");
    fclose($fp);
getReviews($servername, $serverUsername, $serverPassword, $dbname, $page_name);

?>
