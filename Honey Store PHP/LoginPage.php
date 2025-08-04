<?php
require 'includes/init.php';

if(isset($_POST['email']) && isset($_POST['password'])){
  $result = $user_obj->loginUser($_POST['email'],$_POST['password']);
}
if(isset($_SESSION['email'])){
  $user_data = $user_obj->find_user_by_id($_SESSION['user_id']);
if($user_data->user_type=='admin'){
header('Location: admin.php');
exit;
}
else if($user_data->user_type=='user'){
  header('Location: home.php');
  exit;}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="Login&Reg.css">
  <script src="JS.js" type="text/javascript"></script>
</head>
<header>
  <h1>Login Page</h1>
</header>
<body>
 <div class="background">
  <div class="container" style="height: 40vh; margin-top: 270px;
  ">
    <h2>Login</h2>
    <form method="post" action="">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="Login-Register">
      <button type="submit" name ="submit">Login</button>
      </div>
    </form>
    <p>Don't have an account? <a href="index.php" class="form_link">Register here</a>.</p>
  </div>
</div>
</body>

</html>