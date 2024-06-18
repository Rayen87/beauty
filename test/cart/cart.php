<?php
session_start();
$is_logged_in = isset($_SESSION["username"]);

//echo '<pre>';
//var_dump($_SERVER);
//exit;
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<header>
    <?php include '../logo.php' ?>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../shop/shop.php">Shop</a></li>
            <li><a href="../contact.php">Contact</a></li>
            <ul class="right-nav">
                <li><a href="/examen/test/cart/cart.php"><i class="fas fa-shopping-cart"></i> </a></li>
                <?php if ($is_logged_in): ?>
                    <li class="login"><a href="/examen/test/user/logout.php">Logout</a></li>
                <?php else: ?>
                    <li class="login"><a href="/examen/test/user/login.html">Login</a></li>
                <?php endif; ?>
                <span id="cart-count" class="cart-count">0</span>
                </a>
                </li>
            </ul>
    </nav>
</header>
<center><h1>Winkelwagen</h1></center>
<main>
    <section>
        <main>
            <section>
                <h2>Uw Winkelwagen</h2>
                <div id="cart"></div>
                <button onclick="clearCart()">Leeg Winkelwagen</button>
                <button id="checkout-button" onclick="checkout()">Afrekenen</button>
            </section>
        </main>


    </section>
</main>
<?php include '../footer.php' ?>
<script src="cart.js"></script>
<script src="updateCartCount.js"></script>
</body>

</html>

