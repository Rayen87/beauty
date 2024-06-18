document.addEventListener('DOMContentLoaded', () => {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartDiv = document.getElementById('cart');
    const checkoutButton = document.getElementById('checkout-button');

    const updateCart = () => {
        cartDiv.innerHTML = '';
        if (cart.length === 0) {
            cartDiv.innerHTML = '<p>Uw winkelwagen is leeg.</p>';
            checkoutButton.disabled = true;
        } else {
            cart.forEach((item, index) => {
                const itemDiv = document.createElement('div');
                itemDiv.className = 'cart-item';
                itemDiv.innerHTML = `
                    <h4>${item.name}</h4>
                    <p>Prijs: €${item.price}</p>
                    <button onclick="removeItem(${index})">Verwijderen</button>
                `;
                cartDiv.appendChild(itemDiv);
            });

            const total = cart.reduce((sum, item) => sum + item.price, 0);
            const totalDiv = document.createElement('div');
            totalDiv.className = 'total';
            totalDiv.innerHTML = `<h3>Totaal: €${total}</h3>`;
            cartDiv.appendChild(totalDiv);

            checkoutButton.disabled = false;
        }
        updateCartCount();
    };

    window.removeItem = (index) => {
        cart.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCart();
    };

    window.clearCart = () => {
        cart.length = 0;
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCart();
    };

    updateCart();
});

function updateCartCount() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    document.getElementById('cart-count').innerText = cart.length;
}

function checkout() {
    window.location.href = 'checkout.html';
}
