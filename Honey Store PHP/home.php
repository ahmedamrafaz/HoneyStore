<?php
require 'includes/init.php';
if(isset($_COOKIE['user_language'])) {
  $userLanguage = $_COOKIE['user_language'];
} else {
  $defaultLanguage = "English";
  setcookie('user_language', $defaultLanguage, time() + (86400), "/");
  $userLanguage = $defaultLanguage;
}

if(isset($_POST['submit'])) {
  $newLanguage = $_POST['language'];
  setcookie('user_language', $newLanguage, time() + (86400), "/");
  $userLanguage = $newLanguage;
}
?>
<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Honey Store</title>
        <link rel="stylesheet" href="CSS.css">
        <script src="JS.js" type="text/javascript"></script>
    </head>
    <header> 
      <h1 style="color: #EBA937;">Welcome to Honey Store       
  
      <?php
      if(isset($_SESSION['email'])){
        echo '<a href="logout.php"><button style="position: absolute; right: 3%;" class="btn">';
        
        if(isset($_SESSION['email'])){
            echo $_SESSION['email'] . ' ';
        }
    
        echo '| Logout</button></a>';
        
        echo '<a href="CartPage.php" id="cartButton"><button style="position: relative; left: 45%;" class="btn">| Cart (0)</button></a>';
    }
      else{
          echo '<a href="LoginPage.php"><button style="position: absolute;right: 3%;" class="btn">| Login</button></a>';
          echo '<a href="index.php" id="cartButton"><button style="position: relative;left: 60%;" class="btn">| sign up (0)</button></a>';
      }
      ?>

        </h1>
      <nav>
        
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#products">Products</a></li>
          <li><a href="#about">About</a></li>
        </ul>
      </nav>
    </header>     
    <body>
      <div class="background">hello</div>
          <main>
            <section>
              <h1 style="text-align: center; font-size: 4em;">Our Products</h1>
              <div class="product" >
                <img src="images/img1.png" alt="image not found" height="500" width="500">
                <h3>Hot Honey</h3>
                <p> a sweet fluid made by honeybees using the nectar of flowering plants</p>
                <button class="btn" onclick="addToCart()">Add to Cart</button>
              </div><br>
        
              <div class="product">
                <img src="images/img2.png" alt="image not found" height="500" width="500">
                <h3>Clover flower honey </h3>
                <p>Distinguished for its delicate taste and popular flavor. Produced from the flowers of sweet clover</p>
                <button  class="btn">Add to Cart</button></a>
              </div><br>

              <div class="product">
                <img src="images/img3.png" alt="image not found" height="500" width="500">
                <h3>Manuka Honey </h3>
                <p>Manuka honey is a honey native to New Zealand. It's produced by bees that pollinate the flower</p>
                <button  class="btn">Add to Cart</button></a>
              </div><br>

              <div class="product">
                <img src="images/img4.png" alt="image not found" height="500" width="500">
                <h3>Dandelion Honey  </h3>
                <p>Dandelion honey has an intense golden yellow color.</p>
                <button  class="btn">Add to Cart</button></a>
              </div><br>

              <div class="product">
                <img src="images/img5.png" alt="image not found" height="500" width="500">
                <h3>Beeswax </h3>
                <p>Beeswax is a naturally occurring wax produced in the bee's hives by honeybees</p>
                <button  class="btn">Add to Cart</button></a>
              </div><br>

            </section>
            <div style="background-color: rgba(51,51,51,0.5); backdrop-filter: blur(20px); max-width: 300px; margin: 0 auto; height: 10vh;text-align:center;  margin-top:20px;border-radius: 30px;">
              <p>Your preferred language is: <?php echo $userLanguage; ?><br></p>
              <form method="post">
                  <label for="language">Select your preferred language:</label>
                  <select name="language" id="language">
                      <option value="English">English</option>
                      <option value="Arabic">Arabic</option>
                  </select>
                  <button type="submit" name="submit">Save</button>
              </form>
            </div>
            <section id="about">
              <h2>About Us</h2>
              <p>Welcome to our page! We are very happy that you are participating with us here on our page. We would like to welcome you with all love, and give you the good news that we have a new product and our special honey is ready and available!
                Our natural honey is distinguished by its wonderful flavor and delicious taste. We care about the quality of the product, use the best types of bees, and carefully collect honey from clean natural environments free of pesticides and harmful substances.
                Our honey is 100% natural and does not contain any artificial additives or preservatives. It contains valuable nutrients and many health benefits. It is an excellent product for health and wellness.
                If you have any questions or inquiries about our product, we are ready to help you and answer all questions. We want you to be satisfied and happy with the product and our service.
                Thank you for your trust in us and your support. We are very excited to share this journey with you and delight you with our distinctive product. Follow us to benefit from our exclusive news and offers. Welcome to our family and the world of our natural honey! 🍯🌼</p>
            </section>
          </main>
          <footer>
            <p>&copy; 2023 Honey Store. All rights reserved.</p>
          </footer>
    </body>
</html>