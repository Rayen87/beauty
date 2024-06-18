<?php
session_start();
$is_logged_in = isset($_SESSION["username"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $to = htmlspecialchars(trim($_POST["email"]));
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $email = "kehlifirayen89@gmail.com";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $full_message = "Naam: $name\n";
    $full_message .= "E-mail: $to\n";
    $full_message .= "Onderwerp: $subject\n";
    $full_message .= "Bericht:\n$message\n";


    $response = mail($to, $subject, $full_message, $headers);
    if ($response) {
        $mail_success = "Je bericht is succesvol verzonden.";
    } else {
        $mail_error = "Er is een fout opgetreden bij het verzenden van je bericht. Probeer het later opnieuw.";
        $errorMessage = error_get_last();

        echo '<pre>';
        var_dump($errorMessage);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<header>
    <div class="logo-container">
        <a href="index.php">
            <img src="image/skinbeauty.JPG" alt="Logo" class="logo">
        </a>
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="shop/shop.php">Shop</a></li>
            <li><a href="contact.php">Contact</a></li>
            <ul class="right-nav">
                <li><a href="cart/cart.php"><i class="fas fa-shopping-cart"></i> </a></li>
                <?php if ($is_logged_in): ?>
                    <li class="login"><a href="user/logout.php">Logout</a></li>
                <?php else: ?>
                    <li class="login"><a href="user/login.html">Login</a></li>
                <?php endif; ?>
            </ul>
        </ul>
    </nav>
</header>
<center><h1>Contacteer Ons</h1></center>
<main>
    <section>
        <h2>Contactformulier</h2>
        <?php if (isset($mail_success)) : ?>
            <p style="color: green;"><?php echo $mail_success; ?></p>
        <?php elseif (isset($mail_error)) : ?>
            <p style="color: red;"><?php echo $mail_error; ?></p>
        <?php endif; ?>
        <form action="contact.php" method="post">
            <label for="name">Naam:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Onderwerp:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Bericht:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Verzenden</button>
        </form>
    </section>
</main>
<?php include 'footer.php'; ?>
<script src="updateCartCount.js"></script>
</body>
</html>
