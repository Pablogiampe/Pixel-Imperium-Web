@include('componentes.header')

<main>
    <div class="container-form">
        <div class="left-div">
            <h1 style="text-align: center">Contactanos</h1>
            <hr />
            <p>
                Todos los derechos reservados.
                Si estás buscando contactarte con nosotros podes hacerlo vía Instagram o a través del siguiente
                formulario. También debajo tenes nuestro Instagram por si preferís hacerlo por ese medio.
            </p>
            <a href="https://www.instagram.com/voldsom_/" target="_blank">
                <img src="{{ asset('img/instagram.png') }}" width="25" alt="Logo de Instagram" />
                @Voldsom_
            </a>
            <a href="https://www.google.com/intl/es-419/gmail/about/" target="_blank">
                <img src="{{ asset('img/gmail.png') }}" width="25" alt="Logo de email" />
                voldsom333@gmail.com
            </a>
            <a href="https://maps.app.goo.gl/jp9fVonhUdjdxaxT7" target="_blank">
                <img src="{{ asset('img/mapa.png') }}" width="25" alt="Ubicacion" />
                Ver Local >>
            </a>
        </div>
        <div class="right-div">
            <form action="#" autocomplete="off">
                <input type="text" name="Nombre" placeholder="Ingresar nombre" class="campo" />
                <input type="email" name="email" placeholder="Ingresa tu correo" class="campo" />
                <textarea name="mensaje" placeholder="Ingresar comentario"></textarea>
                <input type="submit" name="enviar" value="Enviar mensaje" class="btn btn-dark w-50 rounded-pill" />
            </form>
        </div>
    </div>
</main>

@include('componentes.footer')
