<?php
session_start();
$is_logged_in = isset($_SESSION["username"]);
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
    <?php include '../logo.php'; ?>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="../contact.php">Contact</a></li>
            <ul class="right-nav">
                <li><a href="/examen/test/cart/cart.php"><i class="fas fa-shopping-cart"></i> </a></li>
                <?php if ($is_logged_in): ?>
                    <li class="login"><a href="/examen/test/user/logout.php">Logout</a></li>
                <?php else: ?>
                    <li class="login"><a href="/examen/test/user/login.html">Login</a></li>
                <?php endif; ?>
            </ul>
        </ul>
    </nav>
</header>
<center><h1>Onze Winkel</h1></center>
<main>
    <section>
        <h2>Producten</h2>
        <?php if (!$is_logged_in): ?>
            <p class="alert">U moet zich registreren of inloggen om een product aan te schaffen.</p>
        <?php else: ?>
            <div id="products" class="products"></div>
        <?php endif; ?>
    </section>
</main>
<?php include '../footer.php'; ?>
<script>
    var isLoggedIn = <?php echo json_encode($is_logged_in); ?>;
</script>
<script src="shop.js"></script>
<script src="updateCartCount.js"></script>
</body>
</html>
