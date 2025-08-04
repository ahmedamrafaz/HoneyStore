<?php
require 'includes/init.php';
// IF USER MAKING SIGNUP REQUEST
if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['city']) && isset($_POST['age']) && isset($_POST['phone']) && isset($_POST['password'])){
  $result = $user_obj->singUpUser($_POST['username'],$_POST['email'],$_POST['city'],$_POST['age'],$_POST['phone'],$_POST['password']);
}
// IF USER ALREADY LOGGED IN
if(isset($_SESSION['email'])){
  header('Location: home.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="Login&Reg.css">
  <script src="JS.js" type="text/javascript"></script>
</head>

<body>
  <header>
    <h1>Registration Page</h1>
  </header>
  <div class="background">
    <div class="container" style="height: 80vh; margin-top: 150px;
    ">
      <h2>Registration</h2>
      <form onsubmit="return validateForm()" method="POST">
        <div class="form-group" action="" method="POST" novalidate>
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="city">City:</label>
          <input type="text" id="city" name="city" required>
        </div>
        <div class="form-group">
          <label for="age">Age:</label>
          <input type="date" id="age" name="age"  required>
        </div>
        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
          <label for="confirm-password">Confirm Password:</label>
          <input type="password" id="confirm-password" name="confirm-password" required>
        </div>
        <div class="Login-Register">
        <button type="submit" >Register</button>
        </div>
      </form>
      <div>  
      <?php
        if(isset($result['errorMessage'])){
          echo '<p class="errorMsg">'.$result['errorMessage'].'</p>';
        }
        if(isset($result['successMessage'])){
          echo '<p class="successMsg">'.$result['successMessage'].'</p>';
        }
      ?>    
    </div>
      <p>Already have an account? <a href="LoginPage.php">Login here</a>.</p>
    </div>
  </div>
</body>

</html>
