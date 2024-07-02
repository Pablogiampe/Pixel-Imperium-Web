@include('componentes.header')

<main class="nos">
    <section id="sobre-nosotros" class="container my-5">
        <h1 class="text-center mb-4">Sobre Nosotros</h1>
        <p class="text-center mb-5">Bienvenido a nuestra tienda de videojuegos retro, donde la nostalgia se encuentra con la calidad. Nos especializamos en ofrecer una selección cuidada de los mejores videojuegos clásicos y consolas retro, asegurándonos de que cada producto que ofrecemos cumpla con los más altos estándares.</p>
        
        <div class="btn faq-item mb-4">
            <details>
                <summary class="preguntas">¿De dónde provienen nuestros productos?</summary>
                <div class="rtas mt-2">Trabajamos con proveedores de confianza que comparten nuestra pasión por los videojuegos retro. Nos aseguramos de que cada artículo sea auténtico y esté en excelentes condiciones para que disfrutes de la mejor experiencia posible.</div>
            </details>
        </div>

        <div class="btn faq-item mb-4 ">
            <details >
                <summary class="preguntas">¿Cómo garantizamos la satisfacción del cliente?</summary>
                <div class="rtas mt-2">La satisfacción del cliente es nuestra máxima prioridad. Ofrecemos una política de devolución sin complicaciones y un servicio de atención al cliente amigable y dispuesto a ayudarte en cualquier momento. Si no estás satisfecho con tu compra, haremos todo lo posible para solucionarlo.</div>
            </details>
        </div>

        <div class="btn faq-item mb-4">
            <details>
                <summary class="preguntas">¿Cómo puedes contactarnos?</summary>
                <div class="rtas mt-2">Puedes contactarnos a través de nuestro <a href="https://www.instagram.com" target="_blank">Instagram</a> o mediante nuestro <a href="{{ url('/contacto') }}">formulario de contacto</a>. Estamos aquí para responder a todas tus preguntas y asistirte en lo que necesites.</div>
            </details>
        </div>

        <div class="btn faq-item mb-4">
            <details>
                <summary class="preguntas">¿Ofrecemos descuentos o promociones especiales?</summary>
                <div class="rtas mt-2">¡Sí! Regularmente ofrecemos descuentos y promociones especiales. Mantente al tanto en nuestro Instagram y activa las notificaciones para no perderte ninguna oferta y llegar rápido a nuestros lanzamientos.</div>
            </details>
        </div>

        <div class="btn faq-item mb-4">
            <details>
                <summary class="preguntas">¿Dónde estamos ubicados?</summary>
                <div class="rtas mt-2">Nuestra tienda está ubicada en Ramos Mejía, Buenos Aires. Visítanos y sumérgete en el mundo de los videojuegos retro.</div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.2873777984582!2d-58.56489872334119!3d-34.64744465981037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc7e710f521a5%3A0x64ac11bfea589509!2sGral.%20Alvarado%20247%2C%20Ramos%20Mej%C3%ADa%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1695541958331!5m2!1ses!2sar" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </details>
        </div>
    </section>
</main>

@include('componentes.footer')
