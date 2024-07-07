<?php
session_start();
$is_logged_in = isset($_SESSION["username"]);
$product_id = $_GET['id'];

$products = [
    1 => ["name" => "Awaken + Balance", "description" => "Beschrijving van product 1", "image" => "../image/product1.jpg", "price" => 75],
    2 => ["name" => "Pure glow Serum", "description" => "Beschrijving van product 2", "image" => "../image/product2.jpg", "price" => 69.95],
    3 => ["name" => "Skin-bundel", "description" => "Beschrijving van product 3", "image" => "../image/product3.jpg", "price" => 120],
    4 => ["name" => "Active A Serum", "description" => "Beschrijving van product 4", "image" => "../image/product4.jpg", "price" => 165.25],
    5 => ["name" => "Lumiere serum", "description" => "Beschrijving van product 5", "image" => "../image/product5.jpg", "price" => 75],
    6 => ["name" => "COLLAGEEN CAPSULES", "description" => "Beschrijving van product 6", "image" => "../image/product6.jpg", "price" => 33.95],
    7 => ["name" => "Lumière de Vie® Intensive Hand & Body Crème", "description" => "Beschrijving van product 7", "image" => "../image/product7.jpg", "price" => 34.25],
    8 => ["name" => "Deep Hydrating Moisturiser", "description" => "Beschrijving van product 8", "image" => "../image/product8.jpg", "price" => 85.95],
    9 => ["name" => "COLLAGEEN & HYALURONZUUR", "description" => "Beschrijving van product 9", "image" => "../image/product9.jpg", "price" => 36.95],
    10 => ["name" => "Eye skin tone Glycolic acid", "description" => "Beschrijving van product 10", "image" => "../image/product10.jpg", "price" => 10],
    11 => ["name" => "Hydration Squalane", "description" => "Beschrijving van product 11", "image" => "../image/product11.jpg", "price" => 24.35],
    12 => ["name" => "Hydration Soothing & Barrier Support Serum", "description" => "Beschrijving van product 12", "image" => "../image/product12.jpg", "price" => 34.35],
    13 => ["name" => "BEAUTY OF JOSEON", "description" => "Beschrijving van product 13", "image" => "../image/product13.jpg", "price" => 15],
    14 => ["name" => "Heartleaf Pore Control Cleansing Oil", "description" => "Beschrijving van product 14", "image" => "../image/product14.jpg", "price" => 55],
    15 => ["name" => "CeraV Duo cleanser+lotion", "description" => "Beschrijving van product 15", "image" => "../image/product15.jpg", "price" => 20],
];

$product = $products[$product_id];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['name']; ?></title>
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
                    <li class="login"><a href="/examen/test/user/login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </ul>
    </nav>
</header>
<center><h1><?php echo $product['name']; ?></h1></center>
<main>
    <section class="product-detail">
        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
        <p><?php echo $product['description']; ?></p>
        <p>Prijs: €<?php echo $product['price']; ?></p>
        <button onclick="addToCart(<?php echo $product_id; ?>, '<?php echo $product['name']; ?>', <?php echo $product['price']; ?>)">Toevoegen aan winkelwagen</button>
    </section>
</main>
<?php include '../footer.php'; ?>
<script>
    var isLoggedIn = <?php echo json_encode($is_logged_in); ?>;
    function addToCart(productId, productName, productPrice) {
        if (!isLoggedIn) {
            alert('U moet zich registreren of inloggen om een product aan de winkelwagen toe te voegen.');
            return;
        }
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart.push({ id: productId, name: productName, price: productPrice });
        localStorage.setItem('cart', JSON.stringify(cart));
        alert('Product toegevoegd aan de winkelwagen.');
        updateCartCount();
    }

    function updateCartCount() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        document.getElementById('cart-count').innerText = cart.length;
    }
</script>
</body>
</html>
