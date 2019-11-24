<?php

    $servername = "localhost";
    $username = "id11702576_phpproductmarket";
    $password = "bois3";
    $dbname = "id11702576_marketplace";

    if(post_result_valid()) {
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $home_address = mysqli_real_escape_string($conn, $_POST['home_address']);
        $home_phone = mysqli_real_escape_string($conn, $_POST['home_phone']);
        $cell_phone = mysqli_real_escape_string($conn, $_POST['cell_phone']);
        $user_name =  mysqli_real_escape_string($conn, $_POST['username']);
        $pass_word =  mysqli_real_escape_string($conn, $_POST['pass_word']);

        $sql = "SELECT * FROM users WHERE username = '$user_name' and email = '$email'";
        $res = $conn->query($sql);
        if(!$res) {
            echo "err: " . $conn->error;
        }

        if($res->num_rows > 0) {
            echo "A user with this username or email already exists";
        }
        else {
            $sql = "INSERT INTO users (first_name, last_name, email, home_address, home_phone, cell_phone, username, pass_word) VALUES ('$first_name', '$last_name', '$email', '$home_address', '$home_phone', '$cell_phone', '$user_name', '$pass_word')";
            $res = $conn->query($sql);
            if(!$res) {
                echo "err: " . $conn->error;
            }
            $conn->close();
        }
    }

    echo "<h1>Users</h1>";

    echo "<h2>User Creation</h2>";
    echo<<<ENDL
        <form action="user.php" method="post">
            First Name: <input type="text" name="first_name"><br>
            Last Name: <input type="text" name="last_name"><br>
            Email: <input type="email" name="email"><br>
            Home Address: <input type="text" name="home_address"><br>
            Home Phone: <input type="number" name="home_phone"><br>
            Cell Phone: <input type="number" name="cell_phone"><br>
            User Name: <input type="text" name="username"><br>
            Password: <input type="text" name="pass_word"><br>
            <input type="submit">
        </form>
ENDL;

    echo "<h2>User Search</h2>";
    echo<<<ENDL
        <form action="user.php" method="post">
            Search by name, email, home phone, or cell phone: <input type="text" name="search"><br>
            <input type="submit">
        </form>
ENDL;

    if(search_post_result_valid()) {
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $search_val = $_POST['search'];
        $sql = "SELECT * FROM users WHERE first_name LIKE '%$search_val%' OR  last_name LIKE '%$search_val%' OR home_address LIKE '%$search_val%' OR home_phone LIKE '%$search_val%' OR cell_phone LIKE '%$search_val%'";
        $res = $conn->query($sql);
        if(!$res) {
            echo "err: " . $conn->error;
        }
        else {
            echo "<h3>Search Results</h3>";
             if ($res->num_rows > 0) {
                echo "<table> <tr> <th>First Name</th> <th>Last Name</th> <th>email</th> <th>Home Address</th> <th>Home Phone</th> <th>Cell Phone</th> <th>Username</th> <th>Password</th></tr>";
                while($row = $res->fetch_array()) {
                    echo "<tr>";
                    echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td>";
                    echo "<tr>";
                }
                echo "</table>";
                }
            else {
                echo "No rows found <br>";
            }
        }
        $conn->close();
    }

    echo "<h3>All Users</h3><br>";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM users";
    $res = $conn->query($sql);
    if(!$res) {
        echo "err: " . $conn->error;
    }
    else {
         if ($res->num_rows > 0) {
            echo "<table> <tr> <th>First Name</th> <th>Last Name</th> <th>email</th> <th>Home Address</th> <th>Home Phone</th> <th>Cell Phone</th> <th>Username</th> <th>Password</th> </tr>";
            while($row = $res->fetch_array()) {
                echo "<tr>";
                echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td>";
                echo "<tr>";
            }
            echo "</table>";
        }
        else {
            echo "No rows found <br>";
        }
    }
    $conn->close();


    function post_result_valid() {
        return isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['home_address']) && isset($_POST['home_phone']) && isset($_POST['cell_phone']) && isset($_POST['username']) && isset($_POST['pass_word']);
    }

    function search_post_result_valid() {
        return isset($_POST['search']);
    }

?>