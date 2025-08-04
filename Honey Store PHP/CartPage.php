<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
  <link rel="stylesheet" href="Cart.css">
  <script src="JS.js" type="text/javascript"></script>
</head>

<body>
  <header>
    <h1>Shopping Cart</h1>
  </header>
  <div class="background">
    <div class="container">
      <div class="cart-items">
        <div class="cart-item">
          <img src="images/img2.png" alt="Item 1">
          <div class="item-details">
            <h2>Product Name</h2>
            <p>Price: $10.00</p>
            <div class="item-quantity">
              <button onclick="decreaseQuantity(this)">-</button>
              <input type="number" value="1" min="1" max="100">
              <button onclick="increaseQuantity(this)">+</button>

            </div>
            <p>Total: $20.00</p>
            <div class="remove-item">
              <button onclick="removeItem(this)">Remove</button>
            </div>
          </div>
        </div>

        <div class="cart-item">
          <img src="images/img1.png" alt="Item 2">
          <div class="item-details">
            <h2>Product Name</h2>
            <p>Price: $15.00</p>
            <div class="item-quantity">
              <button onclick="decreaseQuantity(this)">-</button>
              <input type="number" value="1" min="1" max="100">
              <button onclick="increaseQuantity(this)">+</button>
            </div>
            <p>Total: $15.00</p>
            <div class="remove-item">
              <button onclick="removeItem(this)">Remove</button>
            </div>
          </div>
        </div>
        <div class="cart-item">
          <img src="images/img2.png" alt="Item 1">
          <div class="item-details">
            <h2>Product Name</h2>
            <p>Price: $10.00</p>
            <div class="item-quantity">
              <button onclick="decreaseQuantity(this)">-</button>
              <input type="number" value="1" min="1" max="100">
              <button onclick="increaseQuantity(this)">+</button>

            </div>
            <p>Total: $20.00</p>
            <div class="remove-item">
              <button onclick="removeItem(this)">Remove</button>
            </div>
          </div>
        </div>
        <div class="cart-item">
          <img src="images/img2.png" alt="Item 1">
          <div class="item-details">
            <h2>Product Name</h2>
            <p>Price: $10.00</p>
            <div class="item-quantity">
              <button onclick="decreaseQuantity(this)">-</button>
              <input type="number" value="1" min="1" max="100">
              <button onclick="increaseQuantity(this)">+</button>

            </div>
            <p>Total: $20.00</p>
            <div class="remove-item">
              <button onclick="removeItem(this)">Remove</button>
            </div>
          </div>
        </div><div class="cart-item">
          <img src="images/img2.png" alt="Item 1">
          <div class="item-details">
            <h2>Product Name</h2>
            <p>Price: $10.00</p>
            <div class="item-quantity">
              <button onclick="decreaseQuantity(this)">-</button>
              <input type="number" value="1" min="1" max="100">
              <button onclick="increaseQuantity(this)">+</button>

            </div>
            <p>Total: $20.00</p>
            <div class="remove-item">
              <button onclick="removeItem(this)">Remove</button>
            </div>
          </div>
        </div>
      </div>

      <div class="proceed-to-buy">
        <button>Proceed to Buy</button>
      </div>
    </div>
  </div>


</body>

</html>