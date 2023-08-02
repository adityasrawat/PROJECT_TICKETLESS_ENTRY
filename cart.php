<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style2.css">
        <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header">
            <p class="logo">Safarnama</p>
            <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>
        </div>
        <div class="container">
            <div id="root"></div>
            <div class="sidebar">
                <div class="head"><p>My Cart</p></div>
                <div id="cartItem">Your cart is empty</div>
                <div class="foot">
                    <h3>Total</h3>
                    <h2 id="total">Rs. 0.00</h2>
                </div>
            <!-- <div id = "Deliver To">Deliver To</div> -->
           <button><a href="payment.php">Buy</a> </button> 
        </div>
        <script src="cart.js"></script>
    </body>
</html>