<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["uname"];
    $password = $_POST["psw"];

    // Perform authentication here (e.g., check credentials in a database).
    // For simplicity, we'll assume successful login for the example.

    // If the login is successful, redirect to the student view page.
    header("Location: student_view.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <title>ProTrack Login Page</title>
</head>
<body>
    <form action="login.php" method="post">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <title>ProTrack Login Page</title>
</head>
<body>
    <form action="action_page.php" method="post">
        <div class="imgcontainer">
          <img src="2.png" alt="Logo" class="logo">
        </div>
      
        <div class="container" style="font-family: manti-sans-bold;;">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
      
          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw" style="font-family: manti-sans-bold;;">Forgot <a href="#">password?</a></span>
        </div>
      </form>
</body>
</html>
    </form>
