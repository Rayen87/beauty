document.addEventListener('DOMContentLoaded', () => {
    const products = [
        { id: 1, name: 'Awaken + Balance', image: '../image/product1.1.jpg', description: '', price: 75 },
        { id: 2, name: 'Pure glow Serum', image: '../image/product2.jpg', description: '', price: 69.95 },
        { id: 3, name: 'Product 3', image: '../image/product3.jpg', description: '', price: 30 },
        { id: 4, name: 'Active A Serum', image: '../image/product4.jpg', description: '', price: 165.25 },
        { id: 5, name: 'Product 5', image: '../image/product5.JPG', description: '', price: 50 },
        { id: 6, name: 'COLLAGEEN CAPSULES', image: '../image/product6.JPG', description: '', price: 33.95 },
        { id: 7, name: 'Lumière de Vie® Intensive Hand & Body Crème', image: '../image/product7.jpg', description: '', price: 34.25 },
        { id: 8, name: 'Deep Hydrating Moisturiser', image: '../image/product8.jpg', description: 'Deep Hydrating Moisturiser', price: 85.95 },
        { id: 9, name: 'COLLAGEEN & HYALURONZUUR', image: '../image/product9.jpg', description: '', price: 36.95 },
        { id: 10, name: 'Product 10', image: '../image/product10.jpg', description: 'Beschrijving van product 10', price: 100 },
        { id: 11, name: 'Product 11', image: '../image/product11.jpg', description: 'Beschrijving van product 11', price: 110 },
        { id: 12, name: 'Product 12', image: '../image/product12.jpg', description: 'Beschrijving van product 12', price: 120 },
        { id: 13, name: 'Product 13', image: '../image/product13.jpg', description: 'Beschrijving van product 13', price: 130 },
        { id: 14, name: 'Product 14', image: '../image/product14.jpg', description: 'Beschrijving van product 14', price: 140 },
        { id: 15, name: 'Product 15', image: '../image/product15.jpg', description: 'Beschrijving van product 15', price: 150 },
    ];

    const productsDiv = document.getElementById('products');

    products.forEach(product => {
        const productDiv = document.createElement('div');
        productDiv.className = 'product';
        productDiv.innerHTML = `
            <img src="${product.image}" alt="${product.name}">
            <h3>${product.name}</h3>
            <p>${product.description}</p>
            <p>Prijs: €${product.price}</p>
            <button onclick="viewProduct(${product.id})">Bekijk Product</button>
            <button onclick="addToCart(${product.id}, '${product.name}', ${product.price})">Toevoegen aan winkelwagen</button>
        `;
        productsDiv.appendChild(productDiv);
    });

    if (!isLoggedIn) {
        document.querySelectorAll('.product button').forEach(button => {
            button.addEventListener('click', event => {
                event.preventDefault();
                alert('U moet zich registreren of inloggen om een product aan te schaffen.');
            });
        });
    }
});

function viewProduct(id) {
    if (!isLoggedIn) {
        alert('U moet zich registreren of inloggen om een product te bekijken.');
        return;
    }
    window.location.href = `product.php?id=${id}`;
}

function addToCart(productId, productName, productPrice) {
    if (!isLoggedIn) {
        alert('U moet zich registreren of inloggen om een product aan de winkelwagen toe te voegen.');
        return;
    }
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push({ id: productId, name: productName, price: productPrice });
    localStorage.setItem('cart', JSON.stringify(cart));
    alert('Product toegevoegd aan de winkelwagen.');
}
