<?php
    require_once('../database_credentials.php');
    require_once("../php/utilities.php");

session_start();
if(!isset($_SESSION['username'])){
  header("Location: /php/login.php");
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
    if(isset($_POST['review_text']) && isset($_POST['rating'])) {
      $username = $_SESSION['username'];
      $review_text = $_POST['review_text'];
      $rating = $_POST['rating'];
      addReview($servername, $serverUsername, $serverPassword, $dbname, $username, $review_text, $rating, $page_name);
      }

    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
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

//     echo<<<ENDL
//     <h1>Windshield Replacement</h1>
//     <img src='https://www.a-1autoglass.com/wp-content/uploads/2013/09/windshield-replacement.jpg' alt='Windshield Replacement'><br>
//     <h2>Details</h2>
//     <ul>
//         <li>Premium laminated glass</li>
//         <li>Windshield replcement supports vehicle sensors including forward collision cameras</li>
//         <li>One year warranty on manufacturer defects</li>
//     </ul>
// ENDL;
getReviews($servername, $serverUsername, $serverPassword, $dbname, $page_name);

?>
