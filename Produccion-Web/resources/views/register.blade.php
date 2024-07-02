@include('componentes.header')

<main>
    <form class="form-reg" method="POST" action="{{ route('registro') }}">
        @csrf
        <div class="form-title"><span>Registrate en</span></div>
        <div class="title-2"><span>PIXEL</span></div>
        
        <div class="input-container">
            <input class="input-mail" type="text" name="nombre" placeholder="Nombre" required>
            <span> </span>
        </div>

        <section class="bg-stars">
            <span class="star"></span>
            <span class="star"></span>
            <span class="star"></span>
            <span class="star"></span>
        </section>

        <div class="input-container">
            <input class="input-pwd" type="email" name="email" placeholder="Ingrese email" required>
        </div>

        <div class="input-container">
            <input class="input-mail" type="password" name="contrasena" placeholder="Ingrese Contraseña" required>
            <span> </span>
        </div>

        <button type="submit" class="submit">
            <span class="sign-text">Registrarse</span>
        </button>

        <p class="signup-link">
            ¿Ya sos Cliente?
            <a href="{{ route('login') }}" class="up">¡Iniciar sesión!</a>
        </p>
    </form>
    @if(session('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
@endif

    @if(session('ban'))
        <strong style="color:red">ESTÁS BANNEADO!!!</strong>
    @endif
    @if(session('success'))
    <strong style="color:green">{{ session('success') }}</strong>
@endif
</main>



@include('componentes.footer')
