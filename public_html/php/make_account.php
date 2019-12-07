<?php

    session_start();

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
        if(strlen($first_name) < 1 || strlen($last_name) < 1 || strlen($email) < 1 || strlen($home_address) < 1 || strlen($home_phone) < 1 || strlen($cell_phone) < 1 || strlen($user_name) < 1 || strlen($pass_word) < 1) {
            // echo "Invalid information. Please try again";
            $_SESSION['message'] = "Invalid information. Please try again";
        }
        else {
            $sql = "SELECT * FROM users WHERE username = '$user_name' or email = '$email'";
            $res = $conn->query($sql);
            if(!$res) {
                // echo "err: " . $conn->error;
                $_SESSION['message'] = "err: " . $conn->error;
            }
            if($res->num_rows > 0) {
                // echo "A user with this username or email already exists";
                $_SESSION['message'] = "A user with this username or email already exists";
            }
            else {
                //TODO: create a session and send user to services.php
                $sql = "INSERT INTO users (first_name, last_name, email, home_address, home_phone, cell_phone, username, pass_word) VALUES ('$first_name', '$last_name', '$email', '$home_address', '$home_phone', '$cell_phone', '$user_name', '$pass_word')";
                $res = $conn->query($sql);
                if(!$res) {

                    // echo "err: " . $conn->error;
                                    $_SESSION['message'] = "err: " . $conn->error;
                }
                else {
                    // echo "Account created successfully<br>";
                    $_SESSION['message'] = "Account created successfully<br>";
                }
                $conn->close();
            }
        }
    }

    echo<<<ENDL
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Make Account</title>
      <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
      <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    	<link rel="stylesheet" href="vendors/linericon/style.css">
      <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
      <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
      <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
      <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">

      <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>

    <section class="login_box_area section-margin">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6">
  					<div class="login_form_inner register_form_inner">

                <h4>Already have an account?</h4>
                <a href="../php/login.php">Login</a>
                            <br><br>
  						<h3>Create an account</h3>
                            <h5><font color = "red">$_SESSION[message]</font></h5>
  						<form class="row login_form" method = "post" action="../php/make_account.php" id="register_form" >
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'">
                </div>
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'">
                </div>
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                </div>
  							<div class="col-md-12 form-group">
  								<input type="text" class="form-control" name="home_address" placeholder="Home Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Home Address'">
  							</div>
  							<div class="col-md-12 form-group">
  								<input type="number" class="form-control"  name="home_phone" placeholder="Home Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Home Phone'">
                </div>
                <div class="col-md-12 form-group">
  								<input type="number" class="form-control"  name="cell_phone" placeholder="Cell Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cell Phone'">
                </div>
                <div class="col-md-12 form-group">
  								<input type="text" class="form-control"  name="username" placeholder="User Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'User Name'">
  							</div>
                <div class="col-md-12 form-group">
                  <input type="password" class="form-control" name="pass_word" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                </div>
  							<div class="col-md-12 form-group">
  								<button type="submit" value="submit" class="button button-register w-100">Register</button>
  							</div>
  						</form>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
ENDL;
  unset($_SESSION ['message']);

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

