document.addEventListener('DOMContentLoaded', () => {
    const productos = window.productosDesdeBlade || [];
    const cantidades = {};
    productos.forEach(p =>{ cantidades[p.id] = 0;
        actualizarBotones(p.id, 0, p.stock);
    });

    window.cambiarCantidad = function (id, cambio) {
        const producto = productos.find(p => p.id === id);
        if (!producto) return;

        const actual = cantidades[id] || 0;
        const nuevo = actual + cambio;

        if (nuevo < 0) return;

        if (nuevo > producto.stock) {
            alert(`Solo hay ${producto.stock} unidades disponibles de "${producto.nombre}"`);
            return;
        }

        cantidades[id] = nuevo;
        document.getElementById(`cantidad-${id}`).innerText = nuevo;
        actualizarResumen();
        actualizarBotones(id, nuevo, producto.stock);
    };

    function actualizarBotones(id, cantidad, stock) {
    const btnMas = document.getElementById(`btn-mas-${id}`);
    const btnMenos = document.getElementById(`btn-menos-${id}`);

    if (!btnMas || !btnMenos) return;

        btnMas.disabled = cantidad >= stock;
        btnMenos.disabled = cantidad <= 0;
    }


    function actualizarResumen() {
        const lista = document.getElementById('resumen-lista');
        lista.innerHTML = '';
        let subtotal = 0;

        productos.forEach(prod => {
            const cant = cantidades[prod.id];
            if (cant > 0) {
                const totalLinea = cant * parseFloat(prod.precio_unitario);
                subtotal += totalLinea;

                const item = document.createElement('li');
                item.className = 'list-group-item d-flex justify-content-between align-items-center';
                item.innerHTML = `${prod.nombre} (x${cant}) <span>${totalLinea.toFixed(2)} €</span>`;
                lista.appendChild(item);
            }
        });

        const iva = subtotal * 0.21;
        const total = subtotal + iva;

        document.getElementById('subtotal').innerText = subtotal.toFixed(2) + ' €';
        document.getElementById('iva').innerText = iva.toFixed(2) + ' €';
        document.getElementById('total').innerText = total.toFixed(2) + ' €';

        const pedidoFinal = [];
        productos.forEach(p => {
            if (cantidades[p.id] > 0) {
                pedidoFinal.push({
                    producto_id: p.id,
                    cantidad: cantidades[p.id],
                    precio_unitario: parseFloat(p.precio_unitario),
                    subtotal: (cantidades[p.id] * parseFloat(p.precio_unitario)).toFixed(2)
                });
            }
        });

        document.getElementById('pedido_json').value = JSON.stringify(pedidoFinal);
    }
});
