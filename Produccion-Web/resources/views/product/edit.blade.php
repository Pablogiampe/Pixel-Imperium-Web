

@extends('componentes.header')

@section('content')
    <div class="container">
        <h1>Editar Producto</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('productos.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ $producto->descripcion }}</textarea>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}" min="0" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen Actual:</label><br>
                <img src="{{ asset('images/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" style="max-width: 200px;">
                <input type="file" class="form-control-file mt-2" id="imagen" name="imagen">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Producto</button>
        </form>
    </div>
@endsection

