<?php
    echo "<h1>Secure Section Login</h1>";

    echo <<<END
    <form method="post" action="/services.php">
      Username:<br>
      <input type="text" name="username"><br>
      Password:<br>
      <input type="password" name="pass_word"><br><br>
      <input type="submit" value="submit" name = "submit">
    </form>
END;
?>