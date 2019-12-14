<?php
    session_start();
    if(!isset($_SESSION['username'])){
      header("Location: /php/login.php");
      exit;
    }
    echo<<<ENDL
        <h1>Top 5 Most Visited Service of Marketplace</h1>
ENDL;
    require_once("../database_credentials.php");
    $conn = new mysqli($servername, $serverUsername, $serverPassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        $sql = "SELECT * FROM products ORDER BY num_user_visits DESC LIMIT 0, 5";
        $res = $conn->query($sql);
        if(!$res) {
            $_SESSION['message'] = "err: " . $conn->error;
        }
        else {
            $top_five_arr = array();
            echo    '<table>
                     <tr>
                       <td>Items</td>
                       <td>Company Name</td>
                       <td>Visits</td>
                     </tr>';
                 while($row = mysqli_fetch_array($res)) {
                    echo '<tr><td>'.$row["product_name"].'</td><td>'.$row["company_name"].'</td><td>'.$row["num_user_visits"].'</td></tr>';
        
            }
            echo '</table>';
            
        }
        $conn->close();
    }
?>