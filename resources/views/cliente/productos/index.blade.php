<a href="{{ route('cliente.productos.create', [$producto->id, 'pago' => 0]) }}">
    <button class="btn btn-outline-dark flex-shrink-0" type="button">
        <i class="bi-cart-fill me-1"></i>
        Compra electronica
    </button>
</a>
http://mercado.test:8080/cliente/productos?comprados=1
http://mercado.test:8080/cliente/productos?autorizados=1
