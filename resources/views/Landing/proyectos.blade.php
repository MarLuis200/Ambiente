<!DOCTYPE html>
<html lang="es" x-data="{ theme: localStorage.getItem('theme') || 'light', open: false }" :class="{ 'dark': theme === 'dark' }" x-init="$watch('theme', val => localStorage.setItem('theme', val))">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambiente Cielo Rojo</title>
    @vite('resources/css/app.css')
    @vite('resources/css/styles.css')
    @vite('resources/js/script.js')
    <script src="{{ asset('js/carousel.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="transition-colors duration-300 bg-white dark:bg-[#0f172a] text-gray-800 dark:text-[#f8fafc]">
<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600" x-data="{ open: false }">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/cielo2.png') }}" class="h-8 w-8 rounded-full" alt="Logo">
            <span class="self-center text-lg md:text-2xl font-semibold whitespace-nowrap text-gray-800 dark:text-white">Cielo Rojo</span>
        </a>


        <div class="flex items-center space-x-3 md:space-x-6 md:order-2">
            <button @click="open = !open" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5h14a1 1 0 110 2H3a1 1 0 110-2zm0 6h14a1 1 0 110 2H3a1 1 0 110-2zm0 6h14a1 1 0 110 2H3a1 1 0 110-2z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M6.293 6.293a1 1 0 011.414 0L10 8.586l2.293-2.293a1 1 0 011.414 1.414L11.414 10l2.293 2.293a1 1 0 01-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 01-1.414-1.414L8.586 10 6.293 7.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>


        <div :class="open ? 'block' : 'hidden'" class="w-full md:flex md:items-center md:w-auto md:justify-center" id="navbar-sticky">
            <ul class="flex flex-col p-2 md:p-0 mt-2 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-6 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="{{ route('landing.index') }}" class="block py-1 px-3 text-gray-900 dark:text-white hover:text-yellow-400 dark:hover:text-yellow-300 md:p-0 transition duration-300">Inicio</a>
                </li>
                <li>
                    <a href="{{ route('landing.proyectos') }}" class="block py-1 px-3 text-gray-900 dark:text-white hover:text-yellow-400 dark:hover:text-yellow-300 md:p-0 transition duration-300">Proyectos</a>
                </li>
                <li>
                    <a href="{{ route('landing.blogs') }}" class="block py-1 px-3 text-gray-900 dark:text-white hover:text-yellow-400 dark:hover:text-yellow-300 md:p-0 transition duration-300">Blogs</a>
                </li>
                <li>
                    <a href="{{ route('landing.galeria') }}" class="block py-1 px-3 text-gray-900 dark:text-white hover:text-yellow-400 dark:hover:text-yellow-300 md:p-0 transition duration-300">Galeria de Fotos</a>
                </li>
                <li>
                    <a href="{{ route('landing.quienes.somos') }}" class="block py-1 px-3 text-gray-900 dark:text-white hover:text-yellow-400 dark:hover:text-yellow-300 md:p-0 transition duration-300">¿Quiénes Somos?</a>
                </li>
                <li>
                    <a href="{{ route('landing.quienes.somos') }}" class="block py-1 px-3 text-gray-900 dark:text-white hover:text-yellow-400 dark:hover:text-yellow-300 md:p-0 transition duration-300">Acerca De</a>
                </li>
                <li>
                    <a href="{{ route('landing.quienes.somos') }}" class="block py-1 px-3 text-gray-900 dark:text-white hover:text-yellow-400 dark:hover:text-yellow-300 md:p-0 transition duration-300">Premios</a>
                </li>
                <li>
                    <a href="{{ route('landing.quienes.somos') }}" class="block py-1 px-3 text-gray-900 dark:text-white hover:text-yellow-400 dark:hover:text-yellow-300 md:p-0 transition duration-300">Donaciones</a>
                </li>

                <li>
                    <button @click="theme = theme === 'light' ? 'dark' : 'light'" class="p-2 rounded-full bg-gray-200 dark:bg-gray-800 transition duration-300 ease-in-out focus:outline-none">
                        <svg x-show="theme === 'light'" class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 5a5 5 0 000 10 5 5 0 000-10zm0-3a1 1 0 110 2h-.02a1 1 0 010-2H10zm0 16a1 1 0 110 2h-.02a1 1 0 010-2H10zm9-9a1 1 0 110 2v-.02a1 1 0 110-2V10zm-16 0a1 1 0 110 2H3a1 1 0 010-2h.02zM15.45 6.14a1 1 0 011.41 0l.02.02a1 1 0 010 1.41L16.88 8a1 1 0 11-1.41-1.42l-.02-.02zM4.12 13.76a1 1 0 110 1.42l-.02.02a1 1 0 01-1.41 0L2 14.17a1 1 0 111.42-1.41l.02.02z"/>
                        </svg>
                        <svg x-show="theme === 'dark'" class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 1a9 9 0 000 18 9 9 0 000-18zm1 16V3a7 7 0 010 14z"/>
                        </svg>
                    </button>
                </li>
            </ul>
        </div>

        <div class="hidden md:flex space-x-6">
            <a href="#" class="px-4 py-2 text-sm bg-blue-300 text-gray-800 dark:bg-gray-600 dark:text-white font-semibold rounded-full hover:bg-gray-300 dark:hover:bg-yellow-600 focus:outline-none transition duration-300 ease-in-out">Acceso</a>
        </div>
    </div>
</nav>

<div class="hero-section relative overflow-hidden bg-black text-white ">
    <div id="carousel" class="absolute inset-0 w-full h-full">
        <img src="{{ asset('img/siembra.jpeg') }}" alt="Fondo 1" class="carousel-slide absolute inset-0 w-full h-full object-cover opacity-80 transition-opacity duration-1000">
        <img src="{{ asset('img/fmaiz.jpg') }}" alt="Fondo 2" class="carousel-slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000">
        <img src="{{ asset('img/nopales.jpg') }}" alt="Fondo 3" class="carousel-slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000">
        <img src="{{ asset('img/fondo6.jpeg') }}" alt="Fondo 5" class="carousel-slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000">
    </div>
    <div class="absolute inset-0 bg-black opacity-50"></div>

    <div class="relative z-10 flex flex-col items-center justify-center h-screen max-w-screen-lg mx-auto text-center px-4">

        <div class="absolute right-5 md:right-10 bg-blue-600 text-white p-3 md:p-4 rounded-lg shadow-lg animate-bounce flex items-center space-x-2" style="top: 500px;">
            <img src="https://img.icons8.com/fluent/48/000000/earth-planet.png" class="h-5 w-5 md:h-6 md:w-6" alt="Icono Planeta">
            <p class="text-sm md:text-base">¡Bienvenidos a un mundo más verde!</p>
        </div>

        <div class="absolute bottom-20 left-5 md:bottom-24 md:left-10 bg-emerald-200 text-blue-800 px-3 py-2 md:px-4 md:py-2 rounded-lg shadow-lg animate-pulse inline-flex items-center space-x-2">
            <img src="{{ asset('img/arbol.png') }}" class="h-5 w-5 md:h-6 md:w-6" alt="Icono Planeta">
            <p class="text-sm md:text-base">Promovemos prácticas sostenibles</p>
        </div>

        <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold tracking-tight uppercase text-blue-300 mb-4 animate-pulse leading-tight shadow-md md:shadow-lg lg:shadow-xl transform transition-all duration-300 ease-in-out hover:scale-105">
            Nuestros <br> Proyectos
        </h1>

        <p class="text-base md:text-lg lg:text-2xl max-w-xl mx-auto mb-8 text-gray-300 text-justify font-semibold tracking-wide leading-relaxed italic">
            Exploramos la conexión entre humanidad y naturaleza, promoviendo prácticas sostenibles para un futuro más verde y consciente.
        </p>


        <a href="#proyectos" class="bg-white text-black px-6 py-2 md:px-8 md:py-3 text-base md:text-lg font-semibold rounded-full shadow-lg hover:bg-gray-100 transition transform hover:scale-105 duration-300 ease-in-out">
            Ver Proyectos
        </a>
    </div>
</div>


<div class="flex flex-col md:flex-row items-center md:space-x-10 mt-16">
    <div data-aos="fade-left" class="md:w-1/2 lg:pl-14">
        <h1 class="text-darken font-semibold text-3xl lg:pr-56 text-gray-800 dark:text-gray-100">
            <span class="text-yellow-500 dark:text-amber-200">Conservar</span> Es <span class="text-green-500 dark:text-green-500">Vivir</span>
        </h1>
        <p class="text-gray-500 dark:text-gray-300 my-4 lg:pr-32 text-justify">
            Somos parte del proceso evolutivo, y, en algún momento, el desarrollo del cerebro comenzó a permitirnos creaciones culturales y técnicas. Estas nos plantean deberes éticos ante la naturaleza, ante nosotros y ante los seres humanos del futuro. Cuidar la naturaleza es cuidarnos a nosotros mismos.
        </p>
        <p class="mt-4 text-right text-gray-700 dark:text-gray-400 italic">
            Dr. José Sarukhán, Biólogo mexicano
        </p>
    </div>
    <img data-aos="fade-right" class="md:w-1/2" src="img/hongos.png">
</div>

<div class="mt-20 flex flex-col-reverse md:flex-row items-center md:space-x-10">
    <div data-aos="fade-left" class="md:w-6/12 p-4 flex justify-center items-center">
        <div class="overflow-hidden rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl bg-transparent">
            <img class="md:w-11/12 rounded-lg" src="img/mazahua.jpeg" alt="Imagen Mazahua">
        </div>
    </div>

    <div data-aos="fade-right" class="md:w-6/12 md:transform md:-translate-y-20">
        <h1 class="text-darken font-semibold text-3xl lg:pr-56 text-gray-800 dark:text-gray-100">
            Conexión con la <span class="text-blue-500 dark:text-blue-300">Tierra</span>,
            <span class="text-yellow-500 dark:text-amber-200">Cultura</span> y
            <span class="text-green-600 dark:text-green-400">Naturaleza</span>
        </h1>
        <p class="text-gray-600 dark:text-gray-300 my-5 lg:pr-52 text-justify leading-relaxed">
            Honramos el trabajo de aquellos que cultivan la tierra con sabiduría ancestral, cuidando y respetando el entorno natural. En cada semilla plantada y en cada cosecha.
        </p>
    </div>
</div>

<div class="flex flex-col md:flex-row items-center md:space-x-10 mt-16">
    <div data-aos="fade-left" class="md:w-1/2 lg:pl-14">
        <h1 class="text-darken font-semibold text-3xl lg:pr-56 text-gray-800 dark:text-gray-100">
            <span class="text-green-600 dark:text-green-400 text-justify">Nuestros pueblos</span> Mazahuas
        </h1>
        <p class="my-5 lg:pr-14 text-gray-700 dark:text-gray-300 text-justify">
            Adéntrate en el corazón de la cultura mazahua y maravíllate con su conexión profunda con la naturaleza, desde sus coloridos textiles hasta sus tradiciones ancestrales, los pueblos mazahuas son un testimonio vivo de la armonía entre el ser humano y su entorno.
        </p>
    </div>
    <div data-aos="fade-right" class="md:w-6/12 p-4 flex justify-center items-center">
        <div class="overflow-hidden rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl bg-transparent">
            <img class="md:w-11/12 rounded-lg" src="img/mazahuas.jpg" alt="Imagen Mazahua">
        </div>
    </div>
</div>

<div class="mt-24 flex flex-col-reverse md:flex-row items-center md:space-x-10">
    <div data-aos="fade-left" class="md:w-6/12 p-4 flex justify-center items-center">
        <div class="overflow-hidden rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl bg-transparent">
            <img class="md:w-11/12 rounded-lg" src="img/flora.jpeg" alt="Imagen Mazahua">
        </div>
    </div>
    <div data-aos="fade-right" class="md:w-5/12 md:transform md:-translate-y-6">
        <h1 class="font-semibold text-3xl lg:pr-64 ">
            <span class="text-green-600 dark:text-emerald-400">La Riqueza de la</span> <span class="text-blue-600 dark:text-yellow-400">Flora y Fauna</span>
        </h1>
        <p class="text-gray-700 dark:text-gray-300 my-5 lg:pr-2 text-justify" >
            Conoce las diversas especies de plantas y animales que hacen de nuestro planeta un lugar único. Cada ecosistema cuenta una historia de vida y evolución.
        </p>
    </div>
</div>



<div id="proyectos" data-aos="zoom-in" class="mt-16 text-center">
        <h1 class="text-3xl font-extrabold text-blue-500 dark:text-amber-300">Nuestros Proyectos</h1>
    </div>

<div class="lg:w-10/12 mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-12">
    <a href="#proyecto1" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" class="flex flex-col items-center text-center rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 bg-transparent group">
        <div class="relative overflow-hidden rounded-lg">
            <img class="w-full transform transition-transform duration-500 group-hover:scale-110 rounded-lg" src="img/proyecto.jpeg" alt="Proyecto 1">
            <span class="absolute bottom-2 right-2 bg-blue-300 text-darken font-semibold px-4 py-px text-sm rounded-full">PROYECTO LA HUELLA DEL FUEGO</span>
        </div>
        <p class="text-gray-600 dark:text-gray-300 my-4 text-sm text-justify group-hover:text-gray-600 transition-colors duration-300" style="font-family: 'Poppins', sans-serif;">La Huella del Fuego es un proyecto multimedia que inició en marzo del 2019 con el objetivo de abordar los conflictos socioambientales en la microcuenca Amanalco-Valle...</p>
    </a>

    <!-- Proyecto 2 -->
    <a href="#proyecto2" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" class="flex flex-col items-center text-center rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 bg-transparent group">
        <div class="relative overflow-hidden rounded-lg">
            <img class="w-full transform transition-transform duration-500 group-hover:scale-110 rounded-lg" src="img/proyecto2.jpeg" alt="Proyecto 2">
            <span class="absolute bottom-2 left-2 bg-amber-500 text-darken font-semibold px-4 py-px text-sm rounded-full">EL ESPÍRITU DEL VALLE</span>
        </div>
        <p class="text-gray-600 dark:text-gray-300 my-4 text-sm text-justify group-hover:text-gray-500 transition-colors duration-300" style="font-family: 'Poppins', sans-serif;">Malinalxochitl, una cooperativa de productores de mezcal orgánico y artesanal en las montañas del sur del Estado de México, agrupa a campesinos que, siguiendo y adaptando la antigua tradición de esta tierra...</p>
    </a>

    <!-- Proyecto 3 -->
    <a href="#proyecto3" data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" class="flex flex-col items-center text-center rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 bg-transparent group">
        <div class="relative overflow-hidden rounded-lg">
            <img class="w-full transform transition-transform duration-500 group-hover:scale-110 rounded-lg" src="img/proyecto3.jpeg" alt="Proyecto 3">
            <span class="absolute bottom-2 right-2 bg-yellow-300 text-darken font-semibold px-4 py-px text-sm rounded-full">BOSQUE DE NIEBLA</span>
        </div>
        <p class="text-gray-600 dark:text-gray-300 my-4 text-sm text-justify group-hover:text-gray-500 transition-colors duration-300" style="font-family: 'Poppins', sans-serif;">En las regiones montañosas del centro de México, existe un tipo particular de bosque muy diverso y complejo, reducto de grandes bosques anteriores a las glaciaciones, que ha sido definido por investigadores como una selva bajo un bosque templado...</p>
    </a>

    <!-- Proyecto 4 -->
    <a href="#proyecto4" data-aos="fade-up" data-aos-delay="700" data-aos-duration="800" class="flex flex-col items-center text-center rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 bg-transparent group">
        <div class="relative overflow-hidden rounded-lg">
            <img class="w-full transform transition-transform duration-500 group-hover:scale-110 rounded-lg" src="img/proyecto4.jpeg" alt="Proyecto 4">
            <span class="absolute bottom-2 left-2 bg-teal-100 text-darken font-semibold px-4 py-px text-sm rounded-full">FERIA DEL HONGO</span>
        </div>
        <p class="text-gray-600 dark:text-gray-300 my-4 text-sm text-justify group-hover:text-gray-500 transition-colors duration-300" style="font-family: 'Poppins', sans-serif;">San Antonio de la Laguna, Donato Guerra, comunidad mazahua enclavada en bosques de pino en el suroeste del Estado de México, cuenta con una tradición milenaria en el aprovechamiento de los hongos comestibles...</p>
    </a>

    <!-- Proyecto 5 -->
    <a href="#proyecto5" data-aos="fade-up" data-aos-delay="900" data-aos-duration="800" class="flex flex-col items-center text-center rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 bg-transparent group">
        <div class="relative overflow-hidden rounded-lg aspect-w-4 aspect-h-3">
            <img class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110 rounded-lg" src="img/proyecto6.jpeg" alt="Proyecto 5">
            <span class="absolute bottom-2 right-2 bg-teal-100 text-darken font-semibold px-4 py-px text-sm rounded-full">BIODIVERSIDAD-MÁS ALLÁ DE LA MONARCA</span>
        </div>
        <p class="text-gray-600 dark:text-gray-300 my-4 text-sm text-justify group-hover:text-gray-500 transition-colors duration-300" style="font-family: 'Poppins', sans-serif;">En la Reserva de la Mariposa Monarca existen conexiones entre muchas especies que hacen posible el bienestar de la región.....</p>
    </a>

    <!-- Proyecto 6 -->
    <a href="#proyecto6" data-aos="fade-up" data-aos-delay="900" data-aos-duration="800" class="flex flex-col items-center text-center rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 bg-transparent group">
        <div class="relative overflow-hidden rounded-lg aspect-w-4 aspect-h-3">
            <img class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110 rounded-lg" src="img/proyecto5.jpeg" alt="Proyecto 6">
            <span class="absolute bottom-2 left-2 bg-teal-100 text-darken font-semibold px-4 py-px text-sm rounded-full">RED MONARCA</span>
        </div>
        <p class="text-gray-600 dark:text-gray-300 my-4 text-sm text-justify group-hover:text-gray-500 transition-colors duration-300" style="font-family: 'Poppins', sans-serif;">Es importante conocerlas, y conocer a las comunidades y organizaciones que están uniendo esfuerzos por conservar estos delicados ecosistemas.....</p>
    </a>

</div>



</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</div>


<footer class="bg-gray-900 text-white py-6">
    <div class="max-w-5xl mx-auto flex flex-col md:flex-row justify-between items-center">
        <p class="text-sm">&copy; 2024 Ambiente Cielo Rojo. Todos los derechos reservados.</p>
        <div class="flex space-x-4 mt-4 md:mt-0">
            <a href="#" target="_blank"><img src="https://img.icons8.com/fluent/30/ffffff/facebook-new.png" alt="Facebook"></a>
            <a href="#" target="_blank"><img src="https://img.icons8.com/fluent/30/ffffff/linkedin-2.png" alt="LinkedIn"></a>
            <a href="#" target="_blank"><img src="https://img.icons8.com/fluent/30/ffffff/instagram-new.png" alt="Instagram"></a>
            <a href="#" target="_blank"><img src="https://img.icons8.com/fluent/30/ffffff/twitter.png" alt="Twitter"></a>
        </div>
    </div>
</footer>
</main>
</body>
</html>
