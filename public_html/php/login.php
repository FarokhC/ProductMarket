<?php
    session_start();

    if(isset($_SESSION['fail'])){
      echo $_SESSION['fail'];
      echo "<br>";
    }
    echo "<h1>Secure Section Login</h1>";

    echo <<<END
    <form method="post" action="/php/checkLogin.php">
      Username:<br>
      <input type="text" name="user_name"><br>
      Password:<br>
      <input type="password" name="pass_word"><br><br>
      <input type="submit" value="submit" name = "submit">
    </form>
END;
    unset($_SESSION['fail']);
?>
