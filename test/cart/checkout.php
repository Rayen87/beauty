<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $zip = htmlspecialchars($_POST['zip']);
    $country = htmlspecialchars($_POST['country']);
    $payment = htmlspecialchars($_POST['payment']);

    // Here you would normally process the payment and save the order to a database
    // For the purpose of this example, we'll just simulate a successful checkout

    echo "<h1>Bedankt voor uw bestelling, $name!</h1>";
    echo "<p>Uw bestelling wordt verzonden naar:</p>";
    echo "<p>$address, $city, $zip, $country</p>";
    echo "<p>Betaalmethode: $payment</p>";
    echo "<p><a href='../index.php'>Ga terug naar Home</a></p>";

    // Clear the cart
    echo "<script>localStorage.removeItem('cart');</script>";
} else {
    echo "Ongeldige verzoeksmethode.";
}
?>
