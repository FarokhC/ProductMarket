<?php

    $servername = "localhost";
    $username = "id11702576_phpproductmarket";
    $password = "bois3";
    $dbname = "id11702576_marketplace";

    echo "<h1>Secure Section</h1>";

    if (isset($_POST['submit'])) {
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $user_name =  mysqli_real_escape_string($conn, $_POST['username']);
        $pass_word =  mysqli_real_escape_string($conn, $_POST['pass_word']);
        $sql = "SELECT * FROM users WHERE username = '$user_name' and pass_word = '$pass_word'";
        $res = $conn->query($sql);
        if(!$res) {
            echo "err: " . $conn->error;
        }
        $conn->close();

        if($res->num_rows > 0) {
            echo "Valid credentials";
        }
        else {
            echo "Invalid credentials";
        }
    }
    else {
        echo "Please Login to view the secure section";
    }

    function valid_credentials() {
        $file = file("../text_files/users.txt") or die("Unable to open the file.");
        echo "<h3>Users</h3>";
        foreach ($file as $value) {
            echo $value."<br>";
        }
    }

    function invalid_credentials() {
        echo "Invalid Login Credentials. Please try again.";
    }

?>