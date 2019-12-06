<?php
    session_start();
    if(!isset($_SESSION['username'])){
      header("Location: /php/login.php");
      exit;
    }

    echo<<<ENDL
        <h1>Top 5 Rated Items</h1>
ENDL;

    require_once("./database_credentials.php");
    $conn = new mysqli($servername, $serverUsername, $serverPassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    else {
        $sql = "SELECT product_name, rating FROM reviews";
        $res = $conn->query($sql);
        if(!$res) {
            $_SESSION['message'] = "err: " . $conn->error;
        }
        else {
            $reviews_arr = array();
            while($row = mysqli_fetch_array($res)) {
                 if(array_key_exists($row['product_name'], $reviews_arr)) {
                    array_push($reviews_arr[$row['product_name']], $row['rating']);
                }
                else {
                    $new_rating_arr = array();
                    array_push($new_rating_arr, $row['rating']);
                    $reviews_arr[$row['product_name']] = $new_rating_arr;
                }
            }
            $average_rating = array();
            foreach ($reviews_arr as $key => $value) {
                $count = 0;
                $total_rating = 0;
                foreach ($value as $rating) {
                    $total_rating += $rating;
                    $count += 1;
                }
                $average_rating[$key] = $total_rating / $count;
            }

            arsort($average_rating);
            $count = 0;
            foreach($average_rating as $key => $value) {
                echo "$key: Average Rating: $value<br>";
                $count += 1;
                if ($count > 5) {
                    break;
                }
            }
        }
        $conn->close();
    }
?>