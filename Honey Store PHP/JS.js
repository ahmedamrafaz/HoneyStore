function addToCart() {
    var cartButton = document.getElementById('cartButton');
    var cartCount = parseInt(cartButton.innerText.match(/\d+/)[0]);

    cartCount++;
    cartButton.innerText = '| Cart (' + cartCount + ')';
  }
  function validateForm() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm-password").value;

    if (password !== confirmPassword) {
      alert("Passwords do not match!");
      return false;
    }

    return true;
  }
  function increaseQuantity(button) {
    var input = button.parentNode.querySelector("input");
    var currentValue = parseInt(input.value);
    var maxValue = parseInt(input.getAttribute("max"));

    if (currentValue < maxValue) {
      input.value = currentValue + 1;
    }
  }

  function decreaseQuantity(button) {
    var input = button.parentNode.querySelector("input");
    var currentValue = parseInt(input.value);
    var minValue = parseInt(input.getAttribute("min"));

    if (currentValue > minValue) {
      input.value = currentValue - 1;
    }
  }

  function removeItem(button) {
var cartItem = button.closest(".cart-item");
cartItem.parentNode.removeChild(cartItem);
}