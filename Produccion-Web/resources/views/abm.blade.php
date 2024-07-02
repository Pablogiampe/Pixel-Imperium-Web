@include('componentes.header')

<main>
    <div class="productContainer">
        <h1>Panel de Administración de Productos</h1>

        {{-- Tabla de productos --}}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <th scope="row">{{ $producto->id }}</th>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>
                            <a href="{{ route('productos.edit', $producto->id) }}" class="button-abm">Editar</a>
                            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button-abm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Paginación --}}
        <div class="pagination-container">
            {{ $productos->links('pagination::bootstrap-4') }}
        </div>

        {{-- Botón para crear un nuevo producto --}}
        <a href="{{ route('productos.create') }}" class="btn btn-success">Crear Producto</a>
    </div>
</main>

@include('componentes.footer')
