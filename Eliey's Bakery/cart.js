// Initialize an empty cart array
let cart = [];

// Function to add items to the cart
function addToCart(productName, productPrice) {
    // Check if the product already exists in the cart
    const productIndex = cart.findIndex(product => product.name === productName);
    
    if (productIndex === -1) {
        // If not in the cart, add new item
        cart.push({ name: productName, price: productPrice, quantity: 1 });
    } else {
        // If already in the cart, increase quantity
        cart[productIndex].quantity += 1;
    }
    
    // Update the cart display
    displayCart();
}

// Function to remove an item from the cart
function removeFromCart(productName) {
    cart = cart.filter(product => product.name !== productName);
    displayCart();
}

// Function to display the cart content
function displayCart() {
    const cartElement = document.getElementById('cart');
    const totalElement = document.getElementById('total');
    
    // Clear current cart content
    cartElement.innerHTML = '';
    
    if (cart.length === 0) {
        cartElement.innerHTML = '<p>Your cart is empty</p>';
        totalElement.textContent = '0';
        return;
    }

    // Create HTML for each cart item
    let total = 0;
    cart.forEach(product => {
        total += product.price * product.quantity;
        cartElement.innerHTML += `
            <div class="cart-item">
                <span>${product.name} (x${product.quantity})</span>
                <span>$${product.price * product.quantity}</span>
                <button onclick="removeFromCart('${product.name}')">Remove</button>
            </div>
        `;
    });
    
    // Update total price
    totalElement.textContent = total.toFixed(2);
}
// Initialize an empty cart array
let cart = [];

// Function to add items to the cart
function addToCart(productName, productPrice) {
    // Check if the product already exists in the cart
    const productIndex = cart.findIndex(product => product.name === productName);
    
    if (productIndex === -1) {
        // If not in the cart, add new item
        cart.push({ name: productName, price: productPrice, quantity: 1 });
    } else {
        // If already in the cart, increase quantity
        cart[productIndex].quantity += 1;
    }
    
    // Update the cart display
    displayCart();
}

// Function to remove an item from the cart
function removeFromCart(productName) {
    cart = cart.filter(product => product.name !== productName);
    displayCart();
}

// Function to display the cart content
function displayCart() {
    const cartElement = document.getElementById('cart');
    const totalElement = document.getElementById('total');
    
    // Clear current cart content
    cartElement.innerHTML = '';
    
    if (cart.length === 0) {
        cartElement.innerHTML = '<p>Your cart is empty</p>';
        totalElement.textContent = '0';
        return;
    }

    // Create HTML for each cart item
    let total = 0;
    cart.forEach(product => {
        total += product.price * product.quantity;
        cartElement.innerHTML += `
            <div class="cart-item">
                <span>${product.name} (x${product.quantity})</span>
                <span>$${product.price * product.quantity}</span>
                <button onclick="removeFromCart('${product.name}')">Remove</button>
            </div>
        `;
    });
    
    // Update total price
    totalElement.textContent = total.toFixed(2);
}
