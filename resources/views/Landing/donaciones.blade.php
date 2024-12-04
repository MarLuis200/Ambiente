
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/css/styles.css')
    @vite('resources/js/script.js')
    <title>Ambiente Cielo Rojo</title>
</head>
<body class="text-gray-800">
<header id="main-header" class="bg-transparent fixed w-full z-10 transition duration-300">
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

    <div id="mobile-menu" class="md:hidden hidden bg-white shadow-lg">
        <ul class="space-y-4 p-6 text-black">
            <li><a href="{{ route('landing.index') }}" class="block transition">Inicio</a></li>
            <li><a href="{{ route('landing.proyectos') }}" class="block transition">Proyectos</a></li>
            <li><a href="{{ route('landing.blogs') }}" class="block transition">Blogs</a></li>
            <li><a href="{{ route('landing.galeria') }}" class="block transition">Galería De Fotos</a></li>
            <li><a href="{{ route('landing.acerca') }}" class="block transition">Acerca de</a></li>
            <li><a href="{{ route('landing.quienes.somos') }}" class="block transition">¿Quiénes Somos?</a></li>
            <li><a href="{{ route('landing.premios') }}" class="block transition">Premios</a></li>
            <li><a href="{{ route('landing.donaciones') }}" class="block transition">Donaciones</a></li>
        </ul>
    </div>
</header>

<main class="relative">
    <section class="h-screen bg-black relative">
        <div class="absolute inset-0">
            <img src="{{ asset('img/fondo.jpg') }}" alt="Background" class="w-full h-full object-cover">
        </div>
<div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center p-6 md:p-10">
<h1 class="text-6xl sm:text-7xl md:text-8xl lg:text-9xl xl:text-10xl font-extrabold text-white text-center">
    Donaciones
</h1>

</div>
    </section>
<section class="h-screen bg-black relative">
    <div class="absolute inset-0">
        <img src="{{ asset('img/fondo5.jpg') }}" alt="Background" class="w-full h-full object-cover">
    </div>
<div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center p-6 md:p-10">
        <!-- Tarjeta con información de donaciones -->
        <div class="bg-gray-800 bg-opacity-90 p-8 rounded-xl shadow-lg max-w-3xl mx-auto">
            <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold text-white text-center px-4 mb-6">
                ¡Apoya nuestra causa con tu donación!
            </h2>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl text-white text-center px-4 mb-4">
                Si deseas apoyar nuestra labor, puedes hacerlo a través de una donación directa a nuestra cuenta bancaria. Tu contribución nos permitirá continuar con nuestro trabajo de investigación, conservación y defensa del patrimonio natural.
            </p>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl text-white text-center px-4 mb-4">
                <strong>Banco: BBVA</strong><br>
                <strong>Cuenta Bancaria:</strong> 1234 5678 9012 3456<br>
                <strong>CBU:</strong> 0111-2345678901234567890<br>
                <strong>Alias:</strong> mi.empresa.donaciones<br>
                <strong>Teléfono de contacto:</strong> +123 456 789 0123
            </p>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl text-white text-center px-4 mt-4">
                ¡Gracias por tu apoyo! Cada donación cuenta para mejorar el futuro del planeta.
            </p>
        </div>
    </div>
</section>





    <footer class="bg-black text-white py-10">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
        <!-- Logo y descripción centrados -->
        <div class="flex flex-col items-center space-y-6">
<h2 class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl font-extrabold text-white text-center">
    Ambiente Cielo Rojo
</h2>

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
</body>
</html>