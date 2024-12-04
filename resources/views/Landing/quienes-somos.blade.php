<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/css/styles.css')
    @vite('resources/js/script.js')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Ambiente Cielo Rojo</title>

    <style>
        /* Animación de fondo con un verde suave y menos saturado */
        @keyframes backgroundAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        body {
            background: linear-gradient(135deg, #6b8e23, #8fbc8f, #98fb98); /* Verde suave y relajante */
            background-size: 300% 300%;
            animation: backgroundAnimation 15s ease infinite;
        }
    </style>
</head>



<body class="text-gray-800">

<nav class="bg-black bg-opacity-100 text-white fixed w-full z-50 top-0 border-b border-gray-900" x-data="{ open: false }" style="animation: slideDown 1.5s ease-out;">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3">
            <img src="{{ asset('img/cielo2.png') }}" class="h-8 w-8 rounded-full" alt="Logo">
            <span class="self-center text-lg md:text-2xl font-semibold whitespace-nowrap text-white">Cielo Rojo</span>
        </a>

        <!-- Botón para el menú móvil -->
        <button @click="open = !open" class="md:hidden text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Menú para pantallas grandes -->
        <div class="hidden md:flex items-center space-x-6">
            <div class="space-x-4 flex items-center">
                <a href="{{ route('landing.index') }}" class="py-2 px-2 text-white hover:text-yellow-400 transition duration-300">Inicio</a>
                <a href="{{ route('landing.proyectos') }}" class="py-2 px-2 text-white hover:text-yellow-400 transition duration-300">Proyectos</a>
                <a href="{{ route('landing.blogs') }}" class="py-2 px-2 text-white hover:text-yellow-400 transition duration-300">Blogs</a>
                <a href="{{ route('landing.galeria') }}" class="py-2 px-2 text-white hover:text-yellow-400 transition duration-300">Galeria de Fotos</a>
                </li>
                <a href="{{ route('landing.quienes.somos') }}" class="py-2 px-2 text-white hover:text-yellow-400 transition duration-300">¿Quiénes Somos?</a>
                <a href="{{ route('landing.acerca') }}" class="py-2 px-2 text-white hover:text-yellow-400 transition duration-300">Acerca De</a>
                <a href="{{ route('landing.donaciones') }}" class="py-2 px-2 text-white hover:text-yellow-400 transition duration-300">Donaciones</a>
            </div>
            <div class="flex space-x-4">
                <!-- Botón de Login -->
                <a href="#" class="px-6 py-3 text-base bg-gray-800 text-white font-semibold rounded-lg hover:bg-gray-700 transition-all duration-300 transform hover:scale-105">
                    Login
                </a>
                <!-- Botón de Registro -->
                <a href="#" class="px-6 py-3 text-base bg-yellow-600 text-white font-semibold rounded-lg hover:bg-yellow-500 transition-all duration-300 transform hover:scale-105">
                    Registro
                </a>
            </div>
        </div>
    </div>

    <!-- Menú desplegable para pantallas pequeñas -->
    <div x-show="open" @click.away="open = false" class="md:hidden bg-black bg-opacity-90">
        <div class="px-4 pt-4 pb-4 space-y-2">
            <a href="{{ route('landing.index') }}" class="block py-2 px-2 text-white hover:text-yellow-400 transition duration-300">Inicio</a>
            <a href="{{ route('landing.proyectos') }}" class="block py-2 px-2 text-white hover:text-yellow-400 transition duration-300">Proyectos</a>
            <a href="{{ route('landing.blogs') }}" class="block py-2 px-2 text-white hover:text-yellow-400 transition duration-300">Blogs</a>
            <a href="#" class="block py-2 px-2 text-white hover:text-yellow-400 transition duration-300">Nosotros</a>
            <div class="flex space-x-3 mt-4">
                <a href="#" class="w-full px-4 py-2 text-sm bg-gray-800 text-white font-semibold rounded-full hover:bg-gray-700 transition duration-300 text-center">Login</a>
                <a href="#" class="w-full px-4 py-2 text-sm bg-gray-800 text-white font-semibold rounded-full hover:bg-yellow-600 transition duration-300 text-center">Registro</a>
            </div>
        </div>
    </div>
</nav>

<div class="pt-20 max-w-screen-xl mx-auto px-4">

    <div class="flex flex-col lg:flex-row items-start">
        <div class="flex flex-col w-full lg:w-6/12 justify-center lg:pt-24 items-start text-center lg:text-left mb-5 md:mb-0">
            <h1 data-aos="fade-right" data-aos-once="true" class="my-4 text-4xl sm:text-5xl md:text-6xl lg:text-8xl font-bold leading-tight text-red-700 font-poppins tracking-wide">
                <span class="text-black">¿Quiénes</span> <span class="text-red-700">somos?</span>
            </h1>

            <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300" class="leading-normal text-2xl mb-8 text-black">
                Nuestra Conexión con la Tierra: Redescubriendo el Valor del Medio Ambiente
            </p>
            <div data-aos="fade-up" data-aos-once="true" data-aos-delay="700" class="w-full md:flex items-center justify-center lg:justify-start md:space-x-5">
                <div class="flex items-center justify-center space-x-3 mt-5 md:mt-0 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
                </div>
            </div>
        </div>

        <!-- Right Col -->
        <div class="w-full lg:w-6/12 relative" id="girl">
            <img data-aos="fade-up" data-aos-once="true" class="w-16/14 mx-auto 2xl:-mb-20" src="{{ asset('img/arboll.png') }}" />
        </div>
    </div>

        <!-- Separación entre los bloques -->
        <div class="mt-6"></div> <!-- Espacio de separación -->

        <section class="bg-blue text-red-700 py-12">
            <div class="container mx-auto text-center"> <!-- Centrado de todo el contenido -->
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-red-600 mb-4">
                    Ambiente Cielo Rojo
                </h2>
                <p class="max-w-2xl mx-auto text-blue-800 mb-8"> <!-- Ajuste de ancho y centrado -->
                    Explora algunos de los proyectos más innovadores que hemos desarrollado recientemente.
                </p>

                <!-- Tarjeta de presentación -->
            <div class="max-w-2xl mx-auto bg-green-100 shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-green-700 mb-2">Nuestro Compromiso con el Medio Ambiente</h3>
                    <p class="text-gray-700">
                        Nos dedicamos a crear contenido impactante y educativo sobre sostenibilidad, naturaleza y acciones para proteger nuestro planeta. 
                        Únete a nuestra misión para construir un futuro más verde.
                    </p>
                </div>
            </div>
            <div class="max-w-2xl mx-auto bg-red-100 shadow-lg rounded-lg overflow-hidden mt-6">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-red-600 mb-2">Nuestra Misión Ambiental</h3>
                    <p class="text-blue-800">
                        En nuestra página, creemos en el poder de la información para inspirar cambios reales. Creemos en el cuidado y preservación de los recursos naturales para las generaciones futuras. Acompáñanos en nuestro viaje hacia un planeta más saludable.
                    </p>
                </div>
            </div>


            </div>
        </section>

</div>
        <!-- Separación entre los bloques -->
        <div class="mt-10"></div> <!-- Espacio de separación -->

<footer class="bg-black text-white py-10">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
        <!-- Logo y descripción centrados -->
        <div class="flex flex-col items-center space-y-6">
            <h2 class="text-3xl font-bold tracking-wide text-center">Ambiente Cielo Rojo</h2>


            <!-- Redes sociales con iconos más grandes y en círculos -->
            <div class="flex space-x-6">
                <a href="#" target="_blank" class="p-3 bg-white bg-opacity-10 rounded-full hover:bg-opacity-20 transition duration-300 ease-in-out">
                    <img src="https://img.icons8.com/fluent/36/ffffff/facebook-new.png" alt="Facebook">
                </a>
                <a href="#" target="_blank" class="p-3 bg-white bg-opacity-10 rounded-full hover:bg-opacity-20 transition duration-300 ease-in-out">
                    <img src="https://img.icons8.com/fluent/36/ffffff/linkedin-2.png" alt="LinkedIn">
                </a>
                <a href="#" target="_blank" class="p-3 bg-white bg-opacity-10 rounded-full hover:bg-opacity-20 transition duration-300 ease-in-out">
                    <img src="https://img.icons8.com/fluent/36/ffffff/instagram-new.png" alt="Instagram">
                </a>
                <a href="#" target="_blank" class="p-3 bg-white bg-opacity-10 rounded-full hover:bg-opacity-20 transition duration-300 ease-in-out">
                    <img src="https://img.icons8.com/fluent/36/ffffff/twitter.png" alt="Twitter">
                </a>
            </div>
        </div>

        <!-- Divisor decorativo -->
        <div class="mt-8 border-t border-white border-opacity-10"></div>

        <!-- Copyright y enlaces de navegación -->
        <div class="flex flex-col md:flex-row justify-between items-center mt-8 text-center text-sm">
            <p class="font-light text-gray-400">&copy; 2024 Ambiente Cielo Rojo. Todos los derechos reservados.</p>
            <div class="mt-4 md:mt-0 flex space-x-6">
                <a href="#" class="text-gray-400 hover:text-white transition duration-300">Política de privacidad</a>
                <a href="#" class="text-gray-400 hover:text-white transition duration-300">Términos de servicio</a>
                <a href="#" class="text-gray-400 hover:text-white transition duration-300">Contacto</a>
            </div>
        </div>
    </div>
</footer>

</main>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
