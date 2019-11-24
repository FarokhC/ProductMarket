<?php
    echo "<h1>Secure Section Login</h1>";

    echo <<<END
    <form method="post" action="/php/secure_section.php">
      Username:<br>
      <input type="text" name="username"><br>
      Password:<br>
      <input type="password" name="pass_word"><br><br>
      <input type="submit" value="submit" name = "submit">
    </form>

    <h4>For the grader:</h4>
    Username: admin<br>
    Password: password<br>
END;
?>