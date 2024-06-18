<?php
//phpinfo();
//exit;
session_start();
$is_logged_in = isset($_SESSION["username"]);
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
<?php //include 'header.php' ?>
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
<main>
    <section id="index-banner">
        <h2>Welkom op bij Skin Beauty</h2>
        <p>Vind de beste producten hier.</p>
    </section>

    <section class="text-image-section">
        <div class="text-content">
            <h2>Ontdek de Top van Huidverzorging: Onze Premium Productlijnen</h2>
            <p>Bij Onze Website bieden we u de beste huidverzorgingsproducten van drie van de meest gerespecteerde merken: Lumière, Dermatech, en PureGlow. Elk van deze merken staat bekend om hun innovatie, luxe en effectieve resultaten.</p>
            <h3>Lumière</h3>
            <p>Lumière is synoniem met luxe en vernieuwing in de huidverzorgingsindustrie. Het merk heeft een rijke geschiedenis en staat bekend om zijn baanbrekende formules. Van de voedende Lumière Crème tot de revitaliserende Lumière Serum, elk product is ontworpen om uw huid te verjongen en te stralen.</p>
            <h3>Dermatech</h3>
            <p>Dermatech, een pionier in wetenschappelijke huidverzorging, staat wereldwijd bekend om zijn innovatieve benaderingen en effectieve resultaten. Het merk combineert wetenschappelijk onderzoek met hoogwaardige ingrediënten om producten te creëren zoals de Dermatech Anti-Aging lijn en de Dermatech Hydration Boost. Dermatech blijft trouw aan zijn missie om de gezondheid en schoonheid van uw huid te verbeteren.</p>
            <h3>PureGlow</h3>
            <p>PureGlow staat bekend om zijn natuurlijke ingrediënten en zuivere formules. Het merk biedt een perfecte balans tussen natuurlijke verzorging en luxe. Met populaire producten zoals de PureGlow Radiance Oil en de PureGlow Detox Mask, blijft PureGlow een voorloper in de natuurlijke huidverzorging. Elk product is zorgvuldig samengesteld om uw huid te verzorgen en te beschermen.</p>
            <p>Bij Onze Website bent u aan het juiste adres voor het ontdekken en ervaren van deze topmerken. Elk product is zorgvuldig geselecteerd om te voldoen aan onze hoge normen van kwaliteit en effectiviteit.</p>
        </div>
        <section class="slider">
            <div class="slides">
                <div class="slide">
                    <img src="image/product1.jpg" alt="Afbeelding 1">
                </div>
                <div class="slide">
                    <img src="image/product2.jpg" alt="Afbeelding 2">
                </div>
                <div class="slide">
                    <img src="image/product3.jpg" alt="Afbeelding 3">
                </div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </section>
    </section>
</main>
<section class="product-gallery">
    <h2>Onze Topproducten</h2>
    <div class="gallery-grid">
        <div class="gallery-item">
            <a href="shop/shop.php">
                <img src="image/product1.jpg" alt="Product 1">
            </a>
        </div>
        <div class="gallery-item">
            <a href="shop/shop.php?product=2">
                <img src="image/product2.jpg" alt="Product 2">
            </a>
        </div>
        <div class="gallery-item">
            <a href="shop/shop.php?product=3">
                <img src="image/product3.jpg" alt="Product 3">
            </a>
        </div>
        <div class="gallery-item">
            <a href="shop/shop.php?product=4">
                <img src="image/product4.jpg" alt="Product 4">
            </a>
        </div>
        <div class="gallery-item">
            <a href="shop/shop.php?product=5">
                <img src="image/product5.jpg" alt="Product 5">
            </a>
        </div>
        <div class="gallery-item">
            <a href="shop/shop.php?product=6">
                <img src="image/product6.jpg" alt="Product 6">
            </a>
        </div>
    </div>
</section>
<section id="about-us">
    <div class="about-container">
        <div class="about-text">
            <h2>Over Ons</h2>
            <p>Bij Skin Beauty zijn we gepassioneerd door huidverzorging en schoonheid. Ons team van experts, bestaande uit dermatologen, schoonheidsspecialisten en onderzoekers, is toegewijd aan het vinden van de beste producten die voldoen aan de hoogste normen van kwaliteit en effectiviteit. Wij geloven dat iedereen het verdient om zich mooi en zelfverzekerd te voelen in hun eigen huid, en we zijn hier om u te helpen die uitstraling te bereiken.</p>

            <p>Ons assortiment bestaat uit zorgvuldig geselecteerde producten die voldoen aan strenge criteria voor werkzaamheid en veiligheid. We werken samen met gerenommeerde merken zoals Lumière, Dermatech en PureGlow, die bekend staan om hun innovatieve formules en klinisch bewezen resultaten. Of u nu op zoek bent naar oplossingen voor een droge huid, anti-verouderingsproducten, of gespecialiseerde behandelingen voor huidproblemen zoals acne en hyperpigmentatie, wij hebben iets dat aan uw behoeften voldoet.</p>

            <p>Bij Skin Beauty gaat het niet alleen om het verkopen van producten, maar ook om het bieden van de beste service en advies. Onze deskundige klantenservice staat altijd klaar om u te helpen bij het kiezen van de juiste producten en om u te voorzien van gepersonaliseerd advies. We bieden ook educatieve bronnen, zoals blogs en video tutorials, zodat u goed geïnformeerd bent over de nieuwste trends en technieken in huidverzorging.</p>

            <p>Daarnaast hechten wij veel waarde aan duurzaamheid en ethiek. We zorgen ervoor dat onze producten niet alleen goed zijn voor uw huid, maar ook voor de planeet. Veel van onze producten zijn biologisch afbreekbaar, vrij van schadelijke chemicaliën en komen in milieuvriendelijke verpakkingen. We werken ook samen met merken die dierproefvrij zijn en ethisch verantwoorde productieprocessen volgen.</p>

            <p>Dank u voor het kiezen van Skin Beauty. Wij zijn er om u te ondersteunen op uw reis naar een stralende en gezonde huid. We hopen dat u geniet van uw ervaring met onze producten en diensten, en we kijken ernaar uit om u te helpen uw huidverzorgingsdoelen te bereiken. Samen zorgen we ervoor dat u elke dag straalt, van binnen en van buiten.</p>
        </div>
        <div class="about-image">
            <img src="image/skinbeauty1.jpg" alt="Skin Beauty Team">
        </div>
</section>
<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h4>Over Ons</h4>
            <p>Informatie over het bedrijf en wat we doen.</p>
        </div>
        <div class="footer-section">
            <h4>Contact</h4>
            <p>Email: info@onzewebsite.nl</p>
            <p>Telefoon: 123-456-7890</p>
        </div>
        <div class="footer-section">
            <h4>Volg Ons</h4>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <p>&copy; 2024 Skin Beauty. Alle rechten voorbehouden.</p>
</footer>
<script>
    let slideIndex = 0;

    function showSlides() {
        const slides = document.querySelectorAll('.slide');
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = 'none';
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        slides[slideIndex - 1].style.display = 'block';
        setTimeout(showSlides, 3000); // Verander afbeelding elke 3 seconden
    }

    function plusSlides(n) {
        const slides = document.querySelectorAll('.slide');
        slideIndex += n;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        } else if (slideIndex < 1) {
            slideIndex = slides.length;
        }
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = 'none';
        }
        slides[slideIndex - 1].style.display = 'block';
    }

    document.addEventListener('DOMContentLoaded', showSlides);
</script>

</body>
</html>
