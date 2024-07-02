@include('componentes.header')

<div class="row text-center">
    <h1>¡Gracias por completar el formulario!</h1>
    <ul>
        @if(isset($nombre)) <li>{{ $nombre }}</li> @endif
        @if(isset($apellido)) <li>{{ $apellido }}</li> @endif
        @if(isset($mail)) <li>{{ $mail }}</li> @endif
        @if(isset($fecha)) <li>{{ $fecha }}</li> @endif
        @if(isset($modelo)) <li>{{ $modelo }}</li> @endif
        @if(isset($rodado)) <li>{{ $rodado }}</li> @endif
        @if(isset($puertas)) <li>{{ $puertas }}</li> @endif
        @if(isset($comentario)) <li>{{ $comentario }}</li> @endif
    </ul>
    @if($imgPath)
        <img src="{{ asset('storage/' . $imgPath) }}" />
    @endif
    <p> - En breves te contactaremos!!! - </p>
</div>

@include('componentes.footer')
