@extends('layout.base')

@section('head')
        <link href="{{ asset('css/usuario.css') }}" rel="stylesheet" />
@endsection

@section('content')
<body>
    <div class="datatable-container">
        <div class="header-tools">
           <div class="search">
                <input type="text" name="" id="" class="search-input" placeholder="Buscar...">
           </div>
        </div>
        <table class="datatable">
            <thead>
                <tr>
                    <th></th>
                    <th>Status</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="table-checkbox"><input type="checkbox"></td>
                    <td><span class="available"></span></td>
                    <td>Eduardo</td>
                    <td>Comprando Producto</td>
                    <td>2022/05/04</td>
                </tr>
                <tr>
                    <td class="table-checkbox"><input type="checkbox"></td>
                    <td><span class="away"></span></td>
                    <td>idi</td>
                    <td>Cambio foto</td>
                    <td>2022/05/04</td>
                </tr>
                <tr>
                    <td class="table-checkbox"><input type="checkbox"></td>
                    <td><span class="offline"></span></td>
                    <td>Escalera</td>
                    <td>Cerro Sesion</td>
                    <td>2022/05/01</td>
                </tr>
            </tbody>
        </table>
        <div class="footer-tools">
            <div class="list-items">
                Show
                <select name="n-entries" id="n-enties" class="n-enties">
                    <option value="15">5</option>
                    <option value="10" selected>10</option>
                    <option value="15">15</option>
                </select>
                entries
            </div>
            <div class="pages">
                <ul>
                    <li><span class="active">1</span></li>
                    <li><button>2</button></li>
                    <li><button>3</button></li>
                    <li><button>4</button></li>
                    <li><span>...</span></li>
                    <li><button>9</button></li>
                    <li><button>10</button></li>
                </ul>
            </div>
        </div>
    </div>
</body>
@endsection