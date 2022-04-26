
<?php
include_once 'header.php';
?>

<!-- <select class="signup-form">
    <h1>Sign up</h1>
    
    
    <form action = "signup.inc.php" method="post"> 
    <input type="text" name="name" placeholder ="Full name...">
    <input type="text" name="email" placeholder ="Email...">
    <input type="text" name="uid" placeholder ="Username...">
    <input type="password" name="pwd" placeholder ="Password...">
    <input type="password" name="pwdrepeat" placeholder ="repeat password...">
    <button type ="submit" name="submit">Sign up</button>
    </form>   
</select>      -->

<h1>Signup</h1>
      
      <form action ="includes/signup.inc.php" method="post">
        
      <div class="txt_field">
          <input type="text" name="name" required>
          <span></span>
          <label>Full Name</label>
        </div>

        <div class="txt_field">
          <input type="text" name="email" required>
          <span></span>
          <label>Email</label>
        </div>

        <div class="txt_field">
          <input type="text" name="uid" required>
          <span></span>
          <label>Username</label>
        </div>

        <div class="txt_field">
          <input type="password" name="pwd" required>
          <span></span>
          <label>Password</label>
        </div>

        <div class="txt_field">
          <input type="password" name="pwdrepeat" required>
          <span></span>
          <label>Repeat Password</label>
        </div>

       
        <button type="submit" name="submit">Sign up</button>
        
      </form>

      <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "invaliduid") {
        echo "<p>Choose a proper username!</p>";
      }
      else if ($_GET["error"] == "invalidemail") {
        echo "<p>Choose a proper email!</p>";
      }
      else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Passwords doesn't match!</p>";
      }
      else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong!</p>";
      }
      else if ($_GET["error"] == "usernametaken") {
        echo "<p>Username already taken!</p>";
      }
      else if ($_GET["error"] == "none") {
        echo "<p>You have signed up!</p>";
      }
    }
  ?>


<?php
include_once 'footer.php'
?>