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
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="{{ route('landing.index') }}" class="block py-2 px-3 text-gray-900 dark:text-white hover:text-yellow-400 dark:hover:text-yellow-300 md:p-0 transition duration-300">Inicio</a>
                </li>
                <li>
                    <a href="{{ route('landing.proyectos') }}" class="block py-2 px-3 text-gray-900 dark:text-white hover:text-yellow-400 dark:hover:text-yellow-300 md:p-0 transition duration-300">Proyectos</a>
                </li>
                <li>
                    <a href="{{ route('landing.blogs') }}" class="block py-2 px-3 text-gray-900 dark:text-white hover:text-yellow-400 dark:hover:text-yellow-300 md:p-0 transition duration-300">Blogs</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 dark:text-white hover:text-yellow-400 dark:hover:text-yellow-300 md:p-0 transition duration-300">Nosotros</a>
                </li>

                <li>
                    <button @click="theme = theme === 'light' ? 'dark' : 'light'" class="p-2 rounded-full bg-gray-200 dark:bg-gray-800 transition duration-300 ease-in-out focus:outline-none">
                        <svg x-show="theme === 'light'" class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 5a5 5 0 000 10 5 5 0 000-10zm0-3a1 1 0 110 2h-.02a1 1 0 010-2H10zm0 16a1 1 0 110 2h-.02a1 1 0 010-2H10zm9-9a1 1 0 110 2v-.02a1 1 0 110-2V10zm-16 0a1 1 0 110 2H3a1 1 0 010-2h.02zM15.45 6.14a1 1 0 011.41 0l.02.02a1 1 0 010 1.41L16.88 8a1 1 0 11-1.41-1.42l-.02-.02zM4.12 13.76a1 1 0 110 1.42l-.02.02a1 1 0 01-1.41 0L2 14.17a1 1 0 111.42-1.41l.02.02z"/>
                        </svg>
                        <svg x-show="theme === 'dark'" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
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



        <!-- Contenido Principal -->
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
    <div data-aos="fade-right" class="md:w-1/2 lg:pl-14">
        <h1 class="text-darken font-semibold text-3xl lg:pr-56 text-gray-800 dark:text-gray-100">
            <span class="text-yellow-500 dark:text-amber-200">Conservar</span> Es <span class="text-amber-300 dark:text-green-500">Vivir</span>
        </h1>
        <p class="text-gray-500 dark:text-gray-300 my-4 lg:pr-32 text-justify">
            Somos parte del proceso evolutivo, y, en algún momento, el desarrollo del cerebro comenzó a permitirnos creaciones culturales y técnicas. Estas nos plantean deberes éticos ante la naturaleza, ante nosotros y ante los seres humanos del futuro. Cuidar la naturaleza es cuidarnos a nosotros mismos.
        </p>
        <p class="mt-4 text-right text-gray-700 dark:text-gray-400 italic">
            Dr. José Sarukhán, Biólogo mexicano
        </p>
    </div>
    <img data-aos="fade-left" class="md:w-1/2" src="img/girl-with-books.png">
</div>

    <div class="mt-20 flex flex-col-reverse md:flex-row items-center md:space-x-10">
        <div data-aos="fade-right" class="md:w-6/12">
            <img class="md:w-11/12" src="img/true-false.png">
        </div>
        <div data-aos="fade-left" class="md:w-6/12 md:transform md:-translate-y-20">
            <h1 class="font-semibold text-darken text-3xl lg:pr-64">Assessments, <span class="text-yellow-500">Quizzes</span>, Tests</h1>
            <p class="text-gray-500 my-5 lg:pr-52">Easily launch live assignments, quizzes, and tests. Student results are automatically entered in the online gradebook.</p>
        </div>
    </div>

    <!-- Class Management Tools for Educators -->
    <div class="flex flex-col md:flex-row items-center mt-12">
        <div data-aos="fade-right" class="md:w-5/12">
            <h1 class="text-darken font-semibold text-3xl leading-tight lg:pr-32"><span class="text-yellow-500">Class Management</span> Tools for Educators</h1>
            <p class="my-5 lg:pr-14">Class provides tools to help run and manage the class such as Class Roster, Attendance, and more. With the Gradebook, teachers can review and grade tests and quizzes in real-time.</p>
        </div>
        <img data-aos="fade-left" class="md:w-7/12" src="img/gradebook.png">
    </div>

    <!-- One-on-One Discussions -->
    <div class="mt-24 flex flex-col-reverse md:flex-row items-center md:space-x-10">
        <div data-aos="fade-right" class="md:w-7/12">
            <img class="md:w-11/12" src="img/discussion.png">
        </div>
        <div data-aos="fade-left" class="md:w-5/12 md:transform md:-translate-y-6">
            <h1 class="font-semibold text-darken text-3xl lg:pr-64">One-on-One <span class="text-yellow-500">Discussions</span></h1>
            <p class="text-gray-500 my-5 lg:pr-24">Teachers and teacher assistants can talk with students privately without leaving the Zoom environment.</p>
        </div>
    </div>

    <button data-aos="flip-up" class="px-5 py-3 border border-yellow-500 text-yellow-500 font-medium my-14 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out rounded-full mx-auto block">See more features</button>

    <!-- INTEGRATIONS -->
    <div class="mt-24 flex flex-col md:flex-row items-start md:space-x-10">
        <div data-aos="zoom-in-right" class="md:w-6/12">
            <img class="md:w-8/12 mx-auto" src="img/integrations.png">
        </div>
        <div data-aos="zoom-in-left" class="md:w-6/12">
            <div class="flex items-center space-x-20 mb-5">
                <span class="border border-gray-300 w-14 absolute"></span>
                <h1 class="text-gray-400 tracking-widest text-sm">INTEGRATIONS</h1>
            </div>
            <h1 class="font-semibold text-darken text-2xl lg:pr-40">200+ educational tools and platform <span class="text-yellow-500">integrations</span></h1>
            <p class="text-gray-500 my-5 lg:pr-20">Schoology has every tool your classroom needs and comes pre-integrated with more than 200+ tools, student information systems (SIS), and education platforms.</p>
            <button class="px-5 py-3 border border-yellow-500 text-yellow-500 font-medium my-4 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out rounded-full">See All Integrations</button>
        </div>
    </div>

    <!-- TESTIMONIAL -->
    <div class="mt-24 flex flex-col-reverse md:flex-row items-start md:space-x-10">
        <div data-aos="zoom-in-right" class="md:w-5/12">
            <div class="flex items-center space-x-20 mb-5">
                <span class="border border-gray-300 w-14 absolute"></span>
                <h1 class="text-gray-400 tracking-widest text-sm">TESTIMONIAL</h1>
            </div>
            <h1 class="font-semibold text-darken text-2xl lg:pr-40">What They Say?</h1>
            <p class="text-gray-500 my-5 lg:pr-36">Skilline has got more than 100k positive ratings from our users around the world.</p>
            <p class="text-gray-500 my-5 lg:pr-36">Some of the students and teachers were greatly helped by the Skilline.</p>
            <p class="text-gray-500 my-5 lg:pr-36">Are you too? Please give your assessment</p>
            <button class="flex items-center space-x-3 pl-3 border-b border-l border-t border-yellow-500 text-yellow-500 font-medium my-4 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out rounded-full">
                <span>Write your assessment</span>
                <div class="border border-yellow-500 h-14 w-14 rounded-full flex items-center justify-center">
                    <svg class="w-5 h-5" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.2929L19.3431 0.928934C18.9526 0.538409 18.3195 0.538409 17.9289 0.928934C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM-8.74228e-08 9L25 9L25 7L8.74228e-08 7L-8.74228e-08 9Z" fill="#F48C06"/>
                    </svg>
                </div>
            </button>
        </div>
        <div data-aos="zoom-in-left" class="md:w-7/12">
            <img class="md:w-10/12 mx-auto" src="img/testimonials.png">
        </div>
    </div>

    <!-- Latest News and Resources -->
    <div data-aos="zoom-in" class="mt-16 text-center">
        <h1 class="text-darken text-2xl font-semibold">Latest News and Resources</h1>
        <p class="text-gray-500 my-5">See the developments that have occurred to Skillines in the world</p>
    </div>
    <div data-aos="zoom-in-up" class="my-14 flex flex-col lg:flex-row lg:space-x-20">
        <div class="lg:w-6/12">
            <img class="w-full mb-6" src="img/laptop-news.png">
            <span class="bg-yellow-300 text-darken font-semibold px-4 py-px text-sm rounded-full">NEWS</span>
            <h1 class="text-gray-800 font-semibold my-3 text-xl">Class adds $30 million to its balance sheet for a Zoom-friendly edtech solution</h1>
            <p class="text-gray-500 mb-3">Class, launched less than a year ago by Blackboard co-founder Michael Chasen, integrates exclusively...</p>
            <a href="" class="underline">Read more</a>
        </div>
        <div class="lg:w-7/12 flex flex-col justify-between mt-12 space-y-5 lg:space-y-0 lg:mt-0">
            <div class="flex space-x-5">
                <div class="w-4/12">
                    <div class="relative">
                        <img class="rounded-xl w-full" src="img/children-laptop.png">
                        <span class="absolute bottom-2 right-2 bg-yellow-300 text-darken font-semibold px-4 py-px text-sm rounded-full hidden sm:block">PRESS RELEASE</span>
                    </div>
                </div>
                <div class="w-8/12">
                    <h1 class="text-gray-800 text-sm sm:text-lg font-semibold">Class Technologies Inc. Closes $30 Million Series A Financing to Meet High Demand</h1>
                    <p class="text-gray-500 my-2 sm:my-4 text-xs sm:text-md">Class Technologies Inc., the company that created Class,...</p>
                </div>
            </div>
            <div class="flex space-x-5">
                <div class="w-4/12">
                    <div class="relative">
                        <img class="rounded-xl w-full" src="img/girl-laptop.png">
                        <span class="absolute bottom-2 right-2 bg-yellow-300 text-darken font-semibold px-4 py-px text-sm rounded-full hidden sm:block">NEWS</span>
                    </div>
                </div>
                <div class="w-8/12">
                    <h1 class="text-gray-800 text-sm sm:text-lg font-semibold">Zoom’s earliest investors are betting millions on a better Zoom for schools</h1>
                    <p class="text-gray-500 my-2 sm:my-4 text-xs sm:text-md">Zoom was never created to be a consumer product. Nonetheless, the...</p>
                </div>
            </div>
            <div class="flex space-x-5">
                <div class="w-4/12">
                    <div class="relative">
                        <img class="rounded-xl w-full" src="img/cat-laptop.png">
                        <span class="absolute bottom-2 right-2 bg-yellow-300 text-darken font-semibold px-4 py-px text-sm rounded-full hidden sm:block">NEWS</span>
                    </div>
                </div>
                <div class="w-8/12">
                    <h1 class="text-gray-800 text-sm sm:text-lg font-semibold">Former Blackboard CEO Raises $16M to Bring LMS Features to Zoom Classrooms</h1>
                    <p class="text-gray-500 my-2 sm:my-4 text-xs sm:text-md">This year, investors have reaped big financial returns from betting on Zoom...</p>
                </div>
            </div>
        </div>
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