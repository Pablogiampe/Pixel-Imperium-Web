@include('componentes.header')

<main>
    <div class="container-form1">
        <div class="container-form">

            <hr />
            <div class="content">
            <h1 style="text-align: center; color: white;">Contactanos</h1>
                <div class="left-div">
                    <p>
                        Todos los derechos reservados.
                        Si estás buscando contactarte con nosotros podes hacerlo vía Instagram o a través del siguiente
                        formulario. También debajo tenes nuestro Instagram por si preferís hacerlo por ese medio.
                    </p>
                   
                
                </div>
                <div class="right-div">
                    <div class="form-card1">
                        <div class="form-card2">
                            <form class="form">
                                <p class="form-heading">Atencion personalizada</p>
                                <div class="form-field">
                                    <input required="" placeholder="Nombre" class="input-field" type="text" />
                                </div>
                                <div class="form-field">
                                    <input required="" placeholder="Email" class="input-field" type="email" />
                                </div>
                                <div class="form-field">
                                    <input required="" placeholder="Motivo" class="input-field" type="text" />
                                </div>
                                <div class="form-field">
                                    <textarea required="" placeholder="Mensaje" cols="30" rows="3"
                                        class="input-field"></textarea>
                                </div>
                                <button class="sendMessage-btn">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('componentes.footer')
