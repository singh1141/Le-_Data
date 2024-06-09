<?php
session_start();
include "connection.php";

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['pass'];

  if ($email != "" && $password != "") {
    $admin_query = "SELECT * FROM details WHERE email = '$email' AND password = '$password'";
    $admin_result = mysqli_query($con, $admin_query);
    $admin_num = mysqli_num_rows($admin_result);


    if ($admin_num == 1) {
      $_SESSION['s_uname'] = $email;
      header('Location: lead.html'); 
      
    } else {
      ?>
      <script>
        alert("Invalid email or password!");
      </script>
      <?php
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Lead</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="wrapper">

    <div class="login-box">
      <form action="" method="post">
        <h2>Login
          
        </h2>

        <div class="input-box">
          <span class="icon">
            <ion-icon name="mail"></ion-icon>
          </span>
          <input type="email" name="email" required>
          <label>Email</label>
        </div>

        <div class="input-box">
          <span class="icon">
            <ion-icon name="lock-closed"></ion-icon>
          </span>
          <input type="password" name="pass" required>
          <label>Password</label>
        </div>

        <!-- <div class="remember-forgot">
        <label><input type="checkbox"> Remember me</label>
        <a href="#">Forgot Password?</a>
      </div> -->

        <button type="submit" name="submit">Login</button>

        <!-- <div class="register-link">
        <p>Don't have an account? <a href="#">Register</a></p>
      </div> -->
      </form>
    </div>

  </div>
  <!-- partial -->
  <script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>
  <script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
</body>

</html>