<?php

    function addReview($servername, $serverUsername, $serverPassword, $dbname, $username, $review_text, $rating, $page_name) {
        $conn = new mysqli($servername, $serverUsername, $serverPassword, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // $sql = "INSERT INTO reviews (username, product_name, review_text, rating) VALUES ('$username', '$page_name', '$review_text', '$rating')  ON DUPLICATE KEY UPDATE review_text='$review_text', rating='$rating';";
        $sql = "INSERT INTO reviews (username, product_name, review_text, rating) VALUES ('$username', '$page_name', '$review_text', '$rating')";
        $res = $conn->query($sql);
        if(!$res) {
            echo "err: " . $conn->error;
        }
        $conn->close();

    }

    function getReviews($servername, $serverUsername, $serverPassword, $dbname, $page_name) {

        echo "<h2>Write a Review</h2>";

        echo <<<ENDL
          <form method="post" action="">
            Review:<br>
            <input type="text" name="review_text"><br>
            <input type="radio" name="rating" value="1">1 star<br>
            <input type="radio" name="rating" value="2">2 stars<br>
            <input type="radio" name="rating" value="3">3 stars<br>
            <input type="radio" name="rating" value="4">4 stars<br>
            <input type="radio" name="rating" value="5">5 stars<br>
            <input type="submit" value="submit" name = "submit">
            </form>
ENDL;

        echo "<h2>Reviews</h2>";

        $conn = new mysqli($servername, $serverUsername, $serverPassword, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        extract( $_POST );
        $sql = "SELECT * FROM reviews WHERE product_name = '$page_name'";
        $res = $conn->query($sql);
        if(!$res) {
            echo "err: " . $conn->error;
        }
        else if ($res->num_rows == 0) {
          echo "No reviews";
        } else {
            while($row = $res->fetch_array()){
              echo "<b>Username:</b> " . $row['username']. " <b>Rating:</b> " . $row["rating"] . "<br>";
              echo $row["review_text"] . "<br><br>";
          }
        }
        $conn->close();
    }

?>