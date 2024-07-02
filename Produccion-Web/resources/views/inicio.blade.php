@include('componentes.header')

<main class="iniciofondo">
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active c-item">
                <img src="{{ asset('assets/img/cyberm3.jpg') }}" class="d-block w-100 c-img" alt="...">
            </div>
            <div class="carousel-item c-item">
                <img src="{{ asset('assets/img/juegos2.jpg') }}" class="d-block w-100 c-img" alt="...">
            </div>
            <div class="carousel-item c-item">
                <img src="{{ asset('assets/img/juegos.jpg') }}" class="d-block w-100 c-img" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="cardsytexto">
        <img src="{{ asset('assets/img/control.png') }}" class="joystick" alt="Joystick">
        <h2 class="elegijuegos">Elegí tus <span class="multicolor">videojuegos</span>, pagá y recibí <br> tus claves de activación online.</h2>

        <div class="d-flex justify-content-center">
            <div class="card-1 mx-1" style="width: 18rem;">
                <a href="/productos">
                    <div class="card-img-container">
                        <img src="{{ asset('assets/img/genshin99.jpeg') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-video-container">
                        <video class="card-video" loop muted>
                            <source src="{{ asset('assets/img/genshin.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div>
                </a>
            </div>
            <div class="card-1 mx-1" style="width: 18rem;">
                <a href="/productos">
                    <div class="card-img-container">
                        <img src="{{ asset('assets/img/zelda99.jpg') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-video-container">
                        <video class="card-video" loop muted>
                            <source src="{{ asset('assets/img/zelda2.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div>
                </a>
            </div>
            <div class="card-1 mx-1" style="width: 18rem;">
                <a href="/productos">
                    <div class="card-img-container">
                        <img src="{{ asset('assets/img/valhalla99.jpg') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-video-container">
                        <video class="card-video" loop muted>
                            <source src="{{ asset('assets/img/valhalla2.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div>
                </a>
            </div>
            <div class="card-1 mx-1" style="width: 18rem;">
                <a href="/productos">
                    <div class="card-img-container">
                        <img src="{{ asset('assets/img/horizon99.jpg') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-video-container">
                        <video class="card-video" loop muted>
                            <source src="{{ asset('assets/img/horizon2.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.card-1').forEach(card => {
            const video = card.querySelector('.card-video');
            let isHovered = false;

            card.addEventListener('mouseenter', () => {
                if (!isHovered) {
                    video.play();
                    isHovered = true;
                }
            });

            card.addEventListener('mouseleave', () => {
                video.pause();
                video.currentTime = 0; // Resetea el video al inicio
                isHovered = false;
            });
        });
    });
</script>

@include('componentes.footer')
