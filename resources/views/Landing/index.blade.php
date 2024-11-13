<!DOCTYPE html>
<html lang="es">
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
</head>

<body class="text-gray-800">
<nav class="bg-black bg-opacity-100 text-white fixed w-full z-50 top-0 border-b border-gray-900" x-data="{ open: false }" style="animation: slideDown 1.5s ease-out;">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
        <!-- Logo y título -->
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
                <a href="#" class="py-2 px-2 text-white hover:text-yellow-400 transition duration-300">Nosotros</a>
            </div>
            <div class="flex space-x-3">
                <a href="#" class="px-4 py-2 text-sm bg-gray-800 text-white font-semibold rounded-full hover:bg-gray-700 transition duration-300">Login</a>
                <a href="#" class="px-4 py-2 text-sm bg-gray-800 text-white font-semibold rounded-full hover:bg-yellow-600 transition duration-300">Registro</a>
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
                <span class="text-black">Ambiente</span> <span class="text-red-700">Cielo Rojo</span>
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
            <img data-aos="fade-up" data-aos-once="true" class="w-16/14 mx-auto 2xl:-mb-20" src="{{ asset('img/planett.png') }}" />
            <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true" class="absolute bottom-48 -left-6 sm:left-10 md:bottom-56 md:left-16 lg:-left-0 lg:bottom-60 floating-4">
                <div class="bg-white bg-opacity-80 rounded-lg h-20 w-64 p-3 flex items-center justify-start space-x-3 text-gray-600 font-medium shadow-lg">
                    <img src="{{ asset('img/quemabosque.png') }}" alt="Bosque" class="h-16 w-16">
                    <span class="text-left" style="font-size: 13px;">Cada minuto se pierden 2 hectáreas de selva tropical</span>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true" class="absolute bottom-14 left-20 sm:left-32 sm:bottom-20 lg:bottom-24 lg:left-72 floating">
                <div class="relative bg-white bg-opacity-80 rounded-lg h-20 w-64 p-3 flex items-center text-gray-600 font-medium shadow-lg">
                    <img src="{{ asset('img/ocean.jpg') }}" alt="Bosque" class="absolute inset-0 h-full w-full object-cover rounded-lg opacity-20">
                    <span class="relative text-left z-10" style="font-size: 13px;">Los océanos absorben alrededor del 30% del dióxido de carbono humano</span>
                </div>
            </div>
        </div>
    </div>

    <!--<div class="max-w-screen-xl mx-auto px-8 sm:px-16 mt-0" style="margin-top: 0 !important;">-->
        <div class="mt-24"></div> <!-- Espacio de separación -->

        <div class="max-w-screen-xl mx-auto px-8 sm:px-16 mt-5"> <!-- Contenedor principal con margen superior reducido -->
            <div class="sm:flex items-center sm:space-x-8 overflow-hidden">
                <div data-aos="zoom-in" class="sm:w-1/2 relative flex flex-col items-center text-center"> <!-- items-center para centrar el contenido -->
                    <h1 class="font-semibold text-2xl text-green-700 mb-4 max-w-md">
                        Investigación y <span class="text-blue-900">Cultura</span>
                    </h1>
                    <div class="flex flex-col items-center max-w-md">
                        <p class="py-5 text-justify">Investigación y Comunicación Audiovisual: Medio Ambiente y Cultura. Nuestro proyecto se enfoca en la preservación del entorno natural y la promoción de la diversidad cultural.</p>
                        <p class="py-5 text-justify">Desde la creación de Proyectos hasta la organización de eventos de concientización, nuestro objetivo es inspirar a la comunidad para proteger nuestro planeta.</p>
                    </div>
                </div>

                
                <div data-aos="zoom-in" class="sm:w-1/2 relative mt-5 sm:mt-0"> <!-- Efecto de acercamiento -->
                    <div class="rounded-xl z-40 relative max-w-full bg-gray-900 bg-opacity-80 p-4" style="padding-bottom: 56.25%; height: 0;">
                        <iframe
                            src="https://www.youtube.com/embed/EBgZ-SdkOtQ?rel=0&controls=1&loop=1&playlist=EBgZ-SdkOtQ"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                            class="absolute top-0 left-0 w-full h-full rounded-xl">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Separación entre los bloques -->
        <div class="mt-24"></div> <!-- Espacio de separación -->

        <div class="max-w-screen-xl mx-auto px-8 sm:px-16 mt-5"> <!-- Contenedor principal con margen superior reducido -->

            <div class="sm:flex items-center sm:space-x-8 overflow-hidden">
                <div data-aos="zoom-in" class="sm:w-1/2 relative flex flex-col items-center text-center"> <!-- items-center para centrar el contenido -->
                    <h1 class="font-semibold text-2xl text-green-700 mb-4 max-w-md">
                        Gobernanza del agua en las comunidades <span class="text-blue-900">de la Cuenca del Río San Juan Zitácuaro</span>
                    </h1>
                    <div class="flex flex-col items-center max-w-md">
                        <p class="py-5 text-justify">La crisis del agua avanza rápidamente, y la gobernanza hídrica comunitaria se presenta como un modelo ideal para enfrentarla en el medio rural.</p>
                        <p class="py-5 text-justify">Este enfoque ha demostrado ser efectivo en la Cuenca del Río San Juan Zitácuaro, ubicada en la región de la mariposa monarca, donde las comunidades se esfuerzan por preservar y gestionar sus recursos hídricos.</p>
                    </div>
                </div>
                
                <div data-aos="zoom-in" class="sm:w-1/2 relative mt-5 sm:mt-0"> <!-- Efecto de acercamiento -->
                    <div class="rounded-xl z-40 relative max-w-full bg-gray-900 bg-opacity-80 p-4" style="padding-bottom: 56.25%; height: 0;">
                        <iframe
                            src="https://www.youtube.com/embed/MBM4yN-8yYE?rel=0&showinfo=0&controls=1"
                            title="Gobernanza del agua en las comunidades de la Cuenca del Río San Juan Zitácuaro"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                            class="absolute top-0 left-0 w-full h-full rounded-xl">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

                <!-- Separación entre los bloques -->
        <div class="mt-10"></div> <!-- Espacio de separación -->

        <section class="bg-white text-black py-12">
            <div class="max-w-screen-xl mx-auto px-8 sm:px-16">
            <div data-aos="fade-down" class="text-center mb-6">
                <h2 data-aos="fade-down" class="font-semibold text-center text-green-700 mb-6 text-4xl"> 
                    Documental <br>
                    <span class="text-blue-900 text-2xl">El taco Mazahua, entre el oro verde y la monarca</span>
                </h2>
            </div>

                <div class="flex justify-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="rounded-xl overflow-hidden bg-gray-900 bg-opacity-80 transform transition duration-300 hover:shadow-2xl hover:scale-105" style="width: 100%; max-width: 560px;">
                        <div style="padding-top: 56.25%; position: relative;">
                            <iframe
                                src="https://www.youtube.com/embed/zP3_M483aZU"
                                frameborder="0"
                                allow="autoplay; fullscreen;"
                                allowfullscreen
                                class="absolute top-0 left-0 w-full h-full rounded-xl"
                                title="Documental">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

                        <!-- Separación entre los bloques -->
        <div class="mt-24"></div> <!-- Espacio de separación -->



        <section class="bg-white text-blue-200 py-12">
            <div class="container mx-auto text-center"> <!-- Centrado de todo el contenido -->
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-indigo-600 mb-4">
                    Nuestros Proyectos
                </h2>
                <p class="max-w-2xl mx-auto text-gray-700"> <!-- Ajuste de ancho y centrado -->
                    Explora algunos de los proyectos más innovadores que hemos desarrollado recientemente.
                </p>
            </div>
        </section>

<section class="bg-white text-black py-12">
    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-center text-fuchsia-500 mb-8">
        Aliados
    </h1>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 px-4 md:px-8 lg:px-16"> <!-- Contenedor de collage con espaciado -->

        <!-- Imágenes en collage -->
        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/red_monarca.jpg') }}" alt="Monarca">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/alternare.jpg') }}" alt="Alternare">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/monarch.jpg') }}" alt="Monarch">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/soy_mazahua.jpg') }}" alt="Soy Mazahua">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/silencio.png') }}" alt="Silencio">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/procuenca.jpg') }}" alt="Procuenca">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/consejo_civil.jpg') }}" alt="Consejo Civil">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/colonos_montana.jpg') }}" alt="Colonos">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/agaveli.jpg') }}" alt="Agaveli">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/reserva_mariposa_monarca.jpg') }}" alt="Monarca">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/cemda.jpg') }}" alt="Cemda">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/biocenosis.jpg') }}" alt="Biocenosis">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/fondo_mexicano.jpg') }}" alt="Fondo Mexicano">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/focem.jpg') }}" alt="Focem">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/iztacala2.jpg') }}" alt="Izcala">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/tesvb.jpg') }}" alt="Tesvb">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/icar.jpg') }}" alt="Icar">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/probosque.jpg') }}" alt="Probosque">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/conanp.jpg') }}" alt="Conanp">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/aguacateros.jpg') }}" alt="Aguacateros">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/pacmyc.jpg') }}" alt="Pacmyc">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/cruz_roja.jpg') }}" alt="Cruz Roja">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/leddy.jpg') }}" alt="Leddy">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/onirica.jpg') }}" alt="Onirica">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/puerto_ventanas.jpg') }}" alt="Puerto Ventanas">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/odisea.jpg') }}" alt="Odisea">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/medical_mission.jpg') }}" alt="Medical Mission">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/flesh.jpg') }}" alt="Flesh">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/barrio.jpg') }}" alt="Barrio">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/va_valle.jpg') }}" alt="Va Valle">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/ecoacatitlan.jpg') }}" alt="Ecoacatitlan">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/camaleon.jpg') }}" alt="Camaleon">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/guardianes_valle.jpg') }}" alt="Guardianes Valle">
        </div>

        <div class="p-2">
            <img class="h-auto w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/efas.jpeg') }}" alt="Efas">
        </div>

    </div>
</section>

</div>

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
