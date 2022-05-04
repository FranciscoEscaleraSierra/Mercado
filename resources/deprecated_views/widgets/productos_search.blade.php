<!-- Search widget-->
<div class="col-lg-9">
    <div class="input-group">
        <form method="POST" action="{{ route('categorias.productos.search', ['categoria' => $categoria->id]) }}">
            @csrf
            <input
                class="form-control"
                type="text"
                placeholder="Busca un producto!!"
                aria-label="Enter search term..."
                aria-describedby="button-search"
                name='nombre'
                value="{{ \Request::input('nombre') }}"
            />
            <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
        </form>
    </div>
</div>
<!-- Search widget end  -->
