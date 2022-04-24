<!-- Search widget-->
<div class="col-lg-9">
    <div class="input-group">
        <form method="POST" action="{{ route('home.search') }}">
            @csrf
            <input class="form-control" type="text" placeholder="Busca un producto!!" aria-label="Enter search term..." aria-describedby="button-search" name='nombre' value="{{ old('nombre') }}"/>
            <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
        </form>
    </div>
</div>
<!-- Search widget end  -->
