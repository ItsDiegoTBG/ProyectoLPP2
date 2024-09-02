// Funciones del carrito de compras

function updateQuantity(key, action) {
    fetch('back-end/update-quantity.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            'key': key,
            'action': action
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Actualizar la cantidad en la página
            const quantityInput = document.getElementById(`quantity-${key}`);
            const currentQuantity = parseInt(quantityInput.value);
            const newQuantity = action === 'increase' ? currentQuantity: currentQuantity;
            quantityInput.value = newQuantity;

            // Obtener el precio del producto desde el atributo data-price
            const productTotalElement = document.getElementById(`total-${key}`);
            const productPrice = parseFloat(productTotalElement.getAttribute('data-price'));

            // Calcular el nuevo total
            const productTotal = newQuantity * productPrice;

            // Actualizar el total del producto
            productTotalElement.textContent = `$${productTotal.toFixed(2)}`;

            // Actualizar subtotal y total del carrito
            document.querySelector('.subtotal-cart-price').textContent = `$${data.final_price}`;
            document.querySelector('.total-cart-price').textContent = `$${data.final_price}`;
        } else {
            console.error('Error al actualizar la cantidad');
        }
    })
    .catch(error => console.error('Error en la solicitud:', error));
}



function removeItem(element, key) {
    if (confirm('¿Estás seguro de que quieres eliminar este producto del carrito?')) {
        const row = element.closest('tr');
        
        row.style.transition = 'opacity 0.5s ease';
        row.style.opacity = '0';

        setTimeout(() => {
            fetch('back-end/remove-from-cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'key=' + encodeURIComponent(key)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    row.remove();

                    document.querySelector('.subtotal-cart-price').textContent = `$${data.final_price}`;
                    document.querySelector('.total-cart-price').textContent = `$${data.final_price}`;

                    const tbody = document.querySelector('tbody');
                    if (!tbody.querySelector('tr')) {
                        tbody.innerHTML = "<tr><td colspan='6'>El carrito está vacío.</td></tr>";
                    }
                } else {
                    alert('No se pudo eliminar el producto. Inténtalo de nuevo.');
                    row.style.opacity = '1'; 
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Ocurrió un error al eliminar el producto.');
                row.style.opacity = '1'; 
            });
        }, 500); 
    }
}



function applyCoupon() {
    const couponCode = document.getElementById('coupon').value;

    fetch('back-end/apply-coupon.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            'coupon': couponCode
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Actualizar el subtotal y el total
            document.querySelector('.subtotal-cart-price').textContent = `$${data.subtotal}`;
            document.querySelector('.total-cart-price').textContent = `$${data.total}`;

            // Opcional: Mostrar un mensaje de éxito
            alert('Cupón aplicado con éxito.');
        } else {
            // Opcional: Mostrar un mensaje de error
            alert('El cupón no es válido o ha expirado.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Ocurrió un error al aplicar el cupón.');
    });
}


