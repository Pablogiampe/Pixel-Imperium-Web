<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Teko:wght@500&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" src="assets/img/icono.png">
    <!-- Incluir el archivo CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    <title>Pixel Imperium</title>

</head>

<body>

  <header>
    <nav class="navbar">
        <div class="nav-content">
            <!-- Logo a la izquierda -->
            <a href="/" class="nav-logo">
                <img src="assets/img/logo.jpg" alt="Logo" class="logo">
            </a>

            <!-- Enlaces de navegación en el centro -->
            <ul class="nav-links">
                <?php
                $pages = array(
                    'Inicio' => '/',
                    'Producto' => '/productos',
                    'Contacto' => '/contacto',
                    'Nosotros' => '/nosotros',
                    
                );
                foreach ($pages as $paginas => $urls) {
                    echo "<li class='nav-item'><a class='nav-link' href='$urls'>$paginas</a></li>";
                }
                ?>
            </ul>

            <!-- Login y carrito a la derecha -->
            <div class="login-cart">
                <a href="/login">
                    <button>Iniciar Sesión</button>
                </a>
                <a href="/register">
                    <button>Registrarse</button>
                </a>
                <a href="/cart">
                    <img class="carrito" src="assets/img/carrito.png" alt="Carrito de Compras">
                </a>
            </div>
        </div>
    </nav>
</header>

<!-- Aquí van los estilos adicionales para organizar la disposición -->
<style>
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem;
    }

    .nav-content {
        display: flex;
        width: 100%;
        justify-content: space-between;
        align-items: center;
    }

    .nav-logo {
        flex: 1;
    }

    .nav-links {
        display: flex;
        flex: 2;
        justify-content: center;
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .nav-links .nav-item {
        margin: 0 1rem;
    }

    .login-cart {
        display: flex;
        flex: 1;
        justify-content: flex-end;
        align-items: center;
    }

    .login-cart a {
        margin-left: 1rem;
    }
</style>

</body>
</html>
