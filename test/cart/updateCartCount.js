document.addEventListener('DOMContentLoaded', () => {
    updateCartCount();

    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartDiv = document.getElementById('cart');

    if (cart.length === 0) {
        cartDiv.innerHTML = '<p>Uw winkelwagen is leeg.</p>';
    } else {
        cart.forEach(item => {
            const itemDiv = document.createElement('div');
            itemDiv.className = 'cart-item';
            itemDiv.innerHTML = `
                <h4>${item.name}</h4>
                <p>Prijs: €${item.price}</p>
            `;
            cartDiv.appendChild(itemDiv);
        });

        const total = cart.reduce((sum, item) => sum + item.price, 0);
        const totalDiv = document.createElement('div');
        totalDiv.className = 'total';
        totalDiv.innerHTML = `<h3>Totaal: €${total}</h3>`;
        cartDiv.appendChild(totalDiv);
    }
});

function checkout() {
    window.location.href = 'checkout.html';
}

function updateCartCount() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartCount = document.getElementById('cart-count');
    cartCount.textContent = cart.length;
}
