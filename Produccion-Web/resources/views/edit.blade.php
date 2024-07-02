@include('componentes.header') // Asegúrate de usar el layout correcto según tu estructura

@section('content')
    <div class="container">
        <h1>Editar Producto</h1>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('productos.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre del Producto</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}">
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion">{{ $producto->descripcion }}</textarea>
            </div>

            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}">
            </div>

            <div class="form-group">
                <label for="imagen">Imagen</label>
                @if ($producto->imagen)
                    <img src="{{ asset('images/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" style="max-width: 200px;">
                @endif
                <input type="file" class="form-control-file" id="imagen" name="imagen">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Producto</button>
        </form>
    </div>
@endsection
@include('componentes.footer')