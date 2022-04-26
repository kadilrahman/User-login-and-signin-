
<?php
include_once 'header.php';
?>

<h1>Login</h1>
      <form action="includes/login.inc.php"method="post">
        <div class="txt_field">
          <input type="text" name="uid" required>
          <span></span>
          <label>Username/Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="pwd" required>
          <span></span>
          <label>Password</label>
        </div>
        
        <input type="submit" name="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="signup.php">Signup</a>
        </div>
      </form>

      <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "wronglogin") {
        echo "<p>Wrong login!</p>";
      }
    }
  ?>



<?php
include_once 'footer.php'
?>