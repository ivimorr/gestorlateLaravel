const productos = window.productosDesdeBlade;
const lineas = window.lineasPedidoDesdeBlade;
const cantidades = {};

// Cargar cantidades actuales desde el pedido
lineas.forEach(lp => cantidades[lp.producto_id] = lp.cantidad);

// Inicializar a 0 los que no existan aún
productos.forEach(p => {
    if (!cantidades[p.id]) cantidades[p.id] = 0;
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById(`cantidad-${p.id}`).innerText = cantidades[p.id];
    });
});

    function cambiarCantidad(id, cambio) {
        const producto = productos.find(p => p.id === id);
        if (!producto) return;

        const actual = cantidades[id] || 0;
        const nuevo = actual + cambio;

        if (nuevo < 0) return;

        // Verificar stock
        if (nuevo > producto.stock) {
            alert(`Solo hay ${producto.stock} unidades disponibles de ${producto.nombre}`);
            return;
        }

        cantidades[id] = nuevo;
        document.getElementById(`cantidad-${id}`).innerText = nuevo;
        actualizarResumen();
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

function limpiarFormulario() {
    if (confirm("¿Seguro que quieres comenzar un nuevo pedido? Se borrará el contenido actual.")) {
        for (let id in cantidades) cantidades[id] = 0;
        productos.forEach(p => {
            document.getElementById(`cantidad-${p.id}`).innerText = '0';
        });
        document.getElementById('mesa').value = '';
        actualizarResumen();
    }
}

document.addEventListener('DOMContentLoaded', actualizarResumen);
