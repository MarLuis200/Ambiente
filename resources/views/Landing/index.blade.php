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
</section>

<div x-data="{ open: false }" class="w-full text-white bg-gray-900">
    <div class="flex flex-col max-w-screen-xl px-8 mx-auto md:items-center md:justify-between md:flex-row">
        <div class="flex flex-row items-center justify-between py-7 w-full md:w-auto">
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <!-- Menu -->
        <nav :class="{ 'flex': open, 'hidden': !open }" class="hidden flex-col items-center md:flex md:flex-row md:items-center pb-4 md:pb-0 md:justify-end w-full md:w-auto space-y-4 md:space-y-0">
            <a class="px-4 py-2 text-sm bg-transparent rounded-lg hover:text-gray-900 focus:outline-none focus:shadow-outline" href="{{ route('landing.index') }}">Home</a>
            <a class="px-4 py-2 text-sm bg-transparent rounded-lg hover:text-gray-900 focus:outline-none focus:shadow-outline" href="{{ route('landing.proyectos') }}">Proyectos</a>
            <a class="px-4 py-2 text-sm bg-transparent rounded-lg hover:text-gray-900 focus:outline-none focus:shadow-outline" href="{{ route('landing.blogs') }}">Blogs</a>
            <a class="px-4 py-2 text-sm bg-transparent rounded-lg hover:text-gray-900 focus:outline-none focus:shadow-outline" href="#">Nosotros</a>
            <a class="px-6 py-2 text-sm text-center bg-white text-gray-800 rounded-full hover:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Acceso</a>
            <a class="px-6 py-2 text-sm text-center bg-gray-600 text-white rounded-full hover:bg-yellow-600 focus:outline-none focus:shadow-outline" href="#">Registro</a>
        </nav>
    </div>
</div>

<div class="bg-green-300">

    <div class="max-w-screen-xl px-8 mx-auto flex flex-col lg:flex-row items-start">
        <div class="flex flex-col w-full lg:w-6/12 justify-center lg:pt-24 items-start text-center lg:text-left mb-5 md:mb-0">

            <h1 data-aos="fade-right" data-aos-once="true" class="my-4 text-5xl font-bold leading-tight text-darken font-poppins tracking-wide">
                <span class="text-green-700">Ambiente</span> Cielo Rojo
            </h1>

            <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300" class="leading-normal text-2xl mb-8">Nuestra Conexión con la Tierra: Redescubriendo el Valor del Medio Ambiente</p>

            <div data-aos="fade-up" data-aos-once="true" data-aos-delay="700" class="w-full md:flex items-center justify-center lg:justify-start md:space-x-5">

                <button class="lg:mx-0 bg-gray-900 text-white text-xl font-bold rounded-full py-4 px-9 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
                    Explorar
                </button>

                <div class="flex items-center justify-center space-x-3 mt-5 md:mt-0 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
                </div>
            </div>
        </div>

        <!--Right Col-->
        <div class="w-full lg:w-6/12 lg:-mt-10 relative" id="girl">
            <img data-aos="fade-up" data-aos-once="true" class="w-16/14 mx-auto 2xl:-mb-20" src="{{ asset('img/planett.png') }}" />


            <!-- calendar -->

            <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true" class="absolute bottom-48 -left-6 sm:left-10 md:bottom-56 md:left-16 lg:-left-0 lg:bottom-60 floating-4">

                <div class="bg-white bg-opacity-80 rounded-lg h-20 w-64 p-3 flex items-center justify-start space-x-3 text-gray-600 font-medium shadow-lg">
                    <img src="{{ asset('img/quemabosque.png') }}" alt="Bosque" class="h-16 w-16">
                    <span class="text-left" style="font-size: 13px;">Cada minuto se pierden 2 hectáreas de selva tropical</span>
                </div>

            </div>

            <!-- ux class -->
            <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true" class="absolute bottom-14 left-20 sm:left-32 sm:bottom-20 lg:bottom-24 lg:left-72 floating">
                <div class="relative bg-white bg-opacity-80 rounded-lg h-20 w-64 p-3 flex items-center text-gray-600 font-medium shadow-lg">
                    <img src="{{ asset('img/ocean.jpg') }}" alt="Bosque" class="absolute inset-0 h-full w-full object-cover rounded-lg opacity-20">
                    <span class="relative text-left z-10" style="font-size: 13px;">Los océanos absorben alrededor del 30% del dióxido de carbono humano</span>
                </div>
            </div>

            <!--
                <div data-aos="fade-up" data-aos-delay="600" data-aos-once="true" class="absolute bottom-20 md:bottom-48 lg:bottom-52 -right-6 lg:right-8 floating-4">
                    <div class="bg-white bg-opacity-80 rounded-lg h-20 w-64 p-3 flex items-center justify-between text-gray-600 font-medium shadow-lg">
                        <span class="text-left" style="font-size: 13px;">Más del 70% del oxígeno que respiramos proviene del océano</span>
                        <img src="{{ asset('img/ocean.png') }}" alt="Océano" class="h-14 w-14">
                    </div>
                </div>
                -->
        </div>

    </div>
    <!-- PREGUN -->
    <div class="text-white -mt-14 sm:-mt-24 lg:-mt-40 z-40 relative">
        <svg class="xl:h-60 xl:w-full" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" fill="currentColor"></path>
        </svg>

        <!--<div class="bg-white w-full h-20 -mt-px"></div>-->
    </div>
</div>


<div class="container mx-auto px-4 lg:px-12 my-8">
    <div class="container px-4 lg:px-8 mx-auto max-w-screen-xl text-gray-700 overflow-x-hidden">

        <!--
      <div class="max-w-4xl mx-auto">
          <h1 class="text-center mb-3 text-gray-400 font-medium"></h1>
          <div class="grid grid-cols-3 lg:grid-cols-6 gap-4 justify-items-center">

              <img class="h-7" src="img/company/google.svg">
              <img class="h-7" src="img/company/netflix.svg">
              <img class="h-7" src="img/company/airbnb.svg">
              <img class="h-7 transform translate-y-2" src="img/company/amazon.svg">
              <img class="h-7" src="img/company/facebook.svg">
              <img class="h-7" src="img/company/grab.svg">
          </div>
      </div>




      <div data-aos="flip-up" class="max-w-xl mx-auto text-center mt-24">
          <h1 class="font-bold text-darken my-3 text-2xl">All-In-One <span class="text-yellow-500">Cloud Software.</span></h1>
          <p class="leading-relaxed text-gray-500">Skilline is one powerful online software suite that combines all the tools needed to run a successful school or office.</p>
      </div>

      <div class="grid md:grid-cols-3 gap-14 md:gap-5 mt-20">
          <div data-aos="fade-up" class="bg-white shadow-xl p-6 text-center rounded-xl">
              <div style="background: #5B72EE;" class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">

                  <svg class="w-6 h-6 text-white" viewBox="0 0 33 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M24.75 23H8.25V28.75H24.75V23ZM32.3984 9.43359L23.9852 0.628906C23.5984 0.224609 23.0742 0 22.5242 0H22V11.5H33V10.952C33 10.3859 32.7852 9.83789 32.3984 9.43359ZM19.25 12.2188V0H2.0625C0.919531 0 0 0.961328 0 2.15625V43.8438C0 45.0387 0.919531 46 2.0625 46H30.9375C32.0805 46 33 45.0387 33 43.8438V14.375H21.3125C20.1781 14.375 19.25 13.4047 19.25 12.2188ZM5.5 6.46875C5.5 6.07164 5.80766 5.75 6.1875 5.75H13.0625C13.4423 5.75 13.75 6.07164 13.75 6.46875V7.90625C13.75 8.30336 13.4423 8.625 13.0625 8.625H6.1875C5.80766 8.625 5.5 8.30336 5.5 7.90625V6.46875ZM5.5 12.2188C5.5 11.8216 5.80766 11.5 6.1875 11.5H13.0625C13.4423 11.5 13.75 11.8216 13.75 12.2188V13.6562C13.75 14.0534 13.4423 14.375 13.0625 14.375H6.1875C5.80766 14.375 5.5 14.0534 5.5 13.6562V12.2188ZM27.5 39.5312C27.5 39.9284 27.1923 40.25 26.8125 40.25H19.9375C19.5577 40.25 19.25 39.9284 19.25 39.5312V38.0938C19.25 37.6966 19.5577 37.375 19.9375 37.375H26.8125C27.1923 37.375 27.5 37.6966 27.5 38.0938V39.5312ZM27.5 21.5625V30.1875C27.5 30.9817 26.8847 31.625 26.125 31.625H6.875C6.11531 31.625 5.5 30.9817 5.5 30.1875V21.5625C5.5 20.7683 6.11531 20.125 6.875 20.125H26.125C26.8847 20.125 27.5 20.7683 27.5 21.5625Z" fill="white"/>
                  </svg>
              </div>

              <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken">Online Billing, Invoicing, & Contracts</h1>
              <p class="px-4 text-gray-500">Simple and secure control of your organization’s financial and legal transactions. Send customized invoices and contracts</p>
          </div>

          <div data-aos="fade-up" data-aos-delay="150" class="bg-white shadow-xl p-6 text-center rounded-xl">
              <div style="background: #F48C06;" class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                  <svg class="w-6 h-6 text-white" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 0C11.0532 0 10.2857 0.767511 10.2857 1.71432V5.14285H13.7142V1.71432C13.7142 0.767511 12.9467 0 12 0Z" fill="#F5F5FC"/>
                      <path d="M36 0C35.0532 0 34.2856 0.767511 34.2856 1.71432V5.14285H37.7142V1.71432C37.7143 0.767511 36.9468 0 36 0Z" fill="#F5F5FC"/>
                      <path d="M42.8571 5.14282H37.7143V12C37.7143 12.9468 36.9468 13.7143 36 13.7143C35.0532 13.7143 34.2857 12.9468 34.2857 12V5.14282H13.7142V12C13.7142 12.9468 12.9467 13.7143 11.9999 13.7143C11.0531 13.7143 10.2856 12.9468 10.2856 12V5.14282H5.14285C2.30253 5.14282 0 7.44535 0 10.2857V42.8571C0 45.6974 2.30253 48 5.14285 48H42.8571C45.6975 48 48 45.6974 48 42.8571V10.2857C48 7.44535 45.6975 5.14282 42.8571 5.14282ZM44.5714 42.8571C44.5714 43.8039 43.8039 44.5714 42.857 44.5714H5.14285C4.19605 44.5714 3.42854 43.8039 3.42854 42.8571V20.5714H44.5714V42.8571Z" fill="#F5F5FC"/>
                      <path d="M13.7142 23.9999H10.2857C9.33889 23.9999 8.57138 24.7674 8.57138 25.7142C8.57138 26.661 9.33889 27.4285 10.2857 27.4285H13.7142C14.661 27.4285 15.4285 26.661 15.4285 25.7142C15.4285 24.7674 14.661 23.9999 13.7142 23.9999Z" fill="#F5F5FC"/>
                      <path d="M25.7143 23.9999H22.2857C21.3389 23.9999 20.5714 24.7674 20.5714 25.7142C20.5714 26.661 21.3389 27.4285 22.2857 27.4285H25.7143C26.6611 27.4285 27.4286 26.661 27.4286 25.7142C27.4286 24.7674 26.6611 23.9999 25.7143 23.9999Z" fill="#F5F5FC"/>
                      <path d="M37.7143 23.9999H34.2857C33.3389 23.9999 32.5714 24.7674 32.5714 25.7142C32.5714 26.661 33.3389 27.4285 34.2857 27.4285H37.7143C38.6611 27.4285 39.4286 26.661 39.4286 25.7142C39.4286 24.7674 38.661 23.9999 37.7143 23.9999Z" fill="#F5F5FC"/>
                      <path d="M13.7142 30.8571H10.2857C9.33889 30.8571 8.57138 31.6246 8.57138 32.5714C8.57138 33.5182 9.33889 34.2857 10.2857 34.2857H13.7142C14.661 34.2857 15.4285 33.5182 15.4285 32.5714C15.4285 31.6246 14.661 30.8571 13.7142 30.8571Z" fill="#F5F5FC"/>
                      <path d="M25.7143 30.8571H22.2857C21.3389 30.8571 20.5714 31.6246 20.5714 32.5714C20.5714 33.5182 21.3389 34.2857 22.2857 34.2857H25.7143C26.6611 34.2857 27.4286 33.5182 27.4286 32.5714C27.4286 31.6246 26.6611 30.8571 25.7143 30.8571Z" fill="#F5F5FC"/>
                      <path d="M37.7143 30.8571H34.2857C33.3389 30.8571 32.5714 31.6246 32.5714 32.5714C32.5714 33.5182 33.3389 34.2857 34.2857 34.2857H37.7143C38.6611 34.2857 39.4286 33.5182 39.4286 32.5714C39.4285 31.6246 38.661 30.8571 37.7143 30.8571Z" fill="#F5F5FC"/>
                      <path d="M13.7142 37.7142H10.2857C9.33889 37.7142 8.57138 38.4817 8.57138 39.4286C8.57138 40.3754 9.33889 41.1428 10.2857 41.1428H13.7142C14.661 41.1428 15.4285 40.3753 15.4285 39.4284C15.4285 38.4816 14.661 37.7142 13.7142 37.7142Z" fill="#F5F5FC"/>
                      <path d="M25.7143 37.7142H22.2857C21.3389 37.7142 20.5714 38.4817 20.5714 39.4285C20.5714 40.3754 21.3389 41.1429 22.2857 41.1429H25.7143C26.6611 41.1429 27.4286 40.3754 27.4286 39.4285C27.4286 38.4817 26.6611 37.7142 25.7143 37.7142Z" fill="#F5F5FC"/>
                      <path d="M37.7143 37.7142H34.2857C33.3389 37.7142 32.5714 38.4817 32.5714 39.4285C32.5714 40.3754 33.3389 41.1429 34.2857 41.1429H37.7143C38.6611 41.1429 39.4286 40.3754 39.4286 39.4285C39.4286 38.4817 38.661 37.7142 37.7143 37.7142Z" fill="#F5F5FC"/>
                  </svg>
              </div>

              <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken">Easy Scheduling & Attendance Tracking</h1>
              <p class="px-4 text-gray-500">Schedule and reserve classrooms at one campus or multiple campuses. Keep detailed records of student attendance</p>
          </div>
          <div data-aos="fade-up" data-aos-delay="300" class="bg-white shadow-xl p-6 text-center rounded-xl">
              <div style="background: #29B9E7;" class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                  <svg class="w-6 h-6 text-white" viewBox="0 0 55 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.25 19.25C11.2836 19.25 13.75 16.7836 13.75 13.75C13.75 10.7164 11.2836 8.25 8.25 8.25C5.21641 8.25 2.75 10.7164 2.75 13.75C2.75 16.7836 5.21641 19.25 8.25 19.25ZM46.75 19.25C49.7836 19.25 52.25 16.7836 52.25 13.75C52.25 10.7164 49.7836 8.25 46.75 8.25C43.7164 8.25 41.25 10.7164 41.25 13.75C41.25 16.7836 43.7164 19.25 46.75 19.25ZM49.5 22H44C42.4875 22 41.1211 22.6102 40.1242 23.5984C43.5875 25.4977 46.0453 28.9266 46.5781 33H52.25C53.7711 33 55 31.7711 55 30.25V27.5C55 24.4664 52.5336 22 49.5 22ZM27.5 22C32.8195 22 37.125 17.6945 37.125 12.375C37.125 7.05547 32.8195 2.75 27.5 2.75C22.1805 2.75 17.875 7.05547 17.875 12.375C17.875 17.6945 22.1805 22 27.5 22ZM34.1 24.75H33.3867C31.5992 25.6094 29.6141 26.125 27.5 26.125C25.3859 26.125 23.4094 25.6094 21.6133 24.75H20.9C15.4344 24.75 11 29.1844 11 34.65V37.125C11 39.4023 12.8477 41.25 15.125 41.25H39.875C42.1523 41.25 44 39.4023 44 37.125V34.65C44 29.1844 39.5656 24.75 34.1 24.75ZM14.8758 23.5984C13.8789 22.6102 12.5125 22 11 22H5.5C2.46641 22 0 24.4664 0 27.5V30.25C0 31.7711 1.22891 33 2.75 33H8.41328C8.95469 28.9266 11.4125 25.4977 14.8758 23.5984Z" fill="white"/>
                  </svg>
              </div>
              <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken lg:h-14 pt-3">Customer Tracking</h1>
              <p class="px-4 text-gray-500">Automate and track emails to individuals or groups. Skilline’s built-in system helps organize your organization </p>
          </div>
      </div>


      <div class="mt-28">
          <div data-aos="flip-down" class="text-center max-w-screen-md mx-auto">
              <h1 class="text-3xl font-bold mb-4">What is<span class="text-yellow-500">Skilline?</span></h1>
              <p class="text-gray-500">Skilline is a platform that allows educators to create online classes whereby they can store the course materials online; manage assignments, quizzes and exams; monitor due dates; grade results and provide students with feedback all in one place.</p>
          </div>
          <div data-aos="fade-up" class="flex flex-col md:flex-row justify-center space-y-5 md:space-y-0 md:space-x-6 lg:space-x-10 mt-7">
              <div class="relative md:w-5/12">
                  <img class="rounded-2xl" src="img/Rectangle 19.png" alt="">
                  <div class="absolute bg-black bg-opacity-20 bottom-0 left-0 right-0 w-full h-full rounded-2xl">
                      <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                          <h1 class="uppercase text-white font-bold text-center text-sm lg:text-xl mb-3">FOR INSTRUCTORS</h1>
                          <button class="rounded-full text-white border text-xs lg:text-md px-6 py-3 w-full font-medium focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">Start a class today</button>
                      </div>
                  </div>
              </div>
              <div class="relative md:w-5/12">
                  <img class="rounded-2xl" src="img/Rectangle 21.png" alt="">
                  <div class="absolute bg-black bg-opacity-20 bottom-0 left-0 right-0 w-full h-full rounded-2xl">
                      <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                          <h1 class="uppercase text-white font-bold text-center text-sm lg:text-xl mb-3">FOR STUDENTS</h1>
                          <button class="rounded-full text-white text-xs lg:text-md px-6 py-3 w-full font-medium focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out" style="background: rgba(35, 189, 238, 0.9)">Enter access code</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>


      <!--ESTA PARTE MODIFICAR-->
        <div class="sm:flex items-center sm:space-x-8 mt-36 overflow-hidden">
            <div data-aos="fade-right" class="sm:w-1/2 relative flex flex-col items-center text-center">
                <!-- Contenedor para el título y el texto centrado verticalmente -->
                <h1 class="font-semibold text-2xl text-center relative z-50 text-green-700 mb-4">Investigación y <span class="text-blue-900">Cultura</span></h1>

                <div class="flex flex-col items-center max-w-md">
                    <p class="py-5 text-justify">Investigación y Comunicación Audiovisual: Medio Ambiente y Cultura. Nuestro proyecto se enfoca en la preservación del entorno natural y la promoción de la diversidad cultural.</p>
                    <p class="py-5 text-justify">Desde la creación de Proyectos hasta la organización de eventos de concientización, nuestro objetivo es inspirar a la comunidad para proteger nuestro planeta.</p>
                </div>
            </div>
            <div data-aos="fade-left" class="sm:w-1/2 relative mt-10 sm:mt-0">
                <!-- Fondo flotante superior izquierdo con color verde claro
                <div class="floating w-24 h-24 absolute rounded-lg bg-green-300 z-0 -top-3 -left-3"></div>-->
                <div class="rounded-xl z-40 relative max-w-full overflow-hidden" style="position: relative; padding-bottom: 56.25%; height: 0;">
                    <iframe
                        src="https://www.youtube.com/embed/EBgZ-SdkOtQ?rel=0&controls=1&autoplay=1&loop=1&playlist=EBgZ-SdkOtQ"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                        class="absolute top-0 left-0 w-full h-full rounded-xl"
                        style="overflow: hidden;">
                    </iframe>
                </div>
                <!-- Fondo flotante inferior derecho con verde claro
                <div class="floating w-40 h-40 absolute rounded-lg bg-green-300 z-10 -bottom-3 -right-3"></div>-->
            </div>
        </div>

    </div>



    <!-- Tools For Teachers And Learners -->
    <div class="flex flex-col md:flex-row items-center md:space-x-10 mt-16">
        <div data-aos="fade-right" class="md:w-1/2 lg:pl-14">
            <h1 class="text-darken font-semibold text-3xl lg:pr-56"><span class="text-yellow-500">Tools</span> For Teachers And Learners</h1>
            <p class="text-gray-500 my-4 lg:pr-32">Class has a dynamic set of teaching tools built to be deployed and used during class. Teachers can handout assignments in real-time for students to complete and submit.</p>
        </div>
        <img data-aos="fade-left" class="md:w-1/2" src="img/girl-with-books.png">
    </div>

    <!-- Assessments, Quizzes, Tests -->
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

<section class="h-screen bg-white text-black py-12 flex items-center">
    <div class="w-full max-w-5xl mx-auto bg-white rounded-xl shadow-lg hover:shadow-xl overflow-hidden transition-transform transform hover:scale-105">
        <h1 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-indigo-600 mb-4 text-center md:text-left">
            Ambiente CieloRojo
        </h1>
        <div class="md:flex h-full">
            <div class="md:w-1/2 flex justify-center items-center p-4">
                <figure class="relative w-full transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg w-full h-full object-cover" src="{{ asset('img/cielo.png') }}" alt="Ambiente">
                    </a>
                </figure>
            </div>
            <div class="md:w-1/2 p-8 flex flex-col justify-center">
                <div class="uppercase tracking-wide text-sm text-indigo-500">Investigación y Cultura</div>
                <p class="mt-2 text-slate-500 text-justify">
                    Investigación y Comunicación Audiovisual: Medio Ambiente y Cultura. Nuestro proyecto se enfoca en la preservación del entorno natural y la promoción de la diversidad cultural.
                </p>
                <p class="mt-4 text-slate-500 text-justify">
                    Desde la creación de Proyectos hasta la organización de eventos de concientización, nuestro objetivo es inspirar a la comunidad para proteger nuestro planeta.
                </p>
            </div>
        </div>
    </div>
</section>
<img class="rounded-lg w-full h-full object-cover" src="{{ asset('img/laureles.jpg') }}" alt="Ambiente">



<section class="bg-white text-black py-12">
    <div class="container mx-auto">
        <h2 class="section-title">
            Gobernanza del agua en las comunidades de la Cuenca del Río San Juan Zitácuaro
        </h2>
        <p class="section-description">
            La crisis del agua avanza rápidamente, y la gobernanza hídrica comunitaria se presenta como un modelo ideal para enfrentarla en el medio rural.
            Este enfoque ha demostrado ser efectivo en la Cuenca del Río San Juan Zitácuaro, ubicada en la región de la mariposa monarca, donde las comunidades se esfuerzan por preservar y gestionar sus recursos hídricos.
        </p>
        <div class="video-container">
            <div class="video-wrapper">
                <iframe
                    src="https://www.youtube.com/embed/MBM4yN-8yYE"
                    frameborder="0"
                    allow="autoplay; fullscreen;"
                    allowfullscreen
                    class="responsive-iframe"
                    title="Gobernanza del agua en las comunidades de la Cuenca del Río San Juan Zitácuaro">
                </iframe>
            </div>
        </div>
    </div>
</section>

<section class="bg-white text-black py-12">
    <div class="container mx-auto">
        <h2 class="section-title">
            Documental "El taco Mazahua, entre el oro verde y la monarca".
        </h2>
        <div class="video-container">
            <div class="video-wrapper">
                <iframe
                    src="https://www.youtube.com/embed/zP3_M483aZU"
                    frameborder="0"
                    allow="autoplay; fullscreen;"
                    allowfullscreen
                    class="responsive-iframe"
                    title="Documental">
                </iframe>
            </div>
        </div>
    </div>
</section>

<section class="bg-white text-blue-200 py-12">
    <div class="container mx-auto">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-indigo-600 mb-4 text-center md:text-left">
            Nuestros Proyectos
        </h2>
        <p class="section-description">Explora algunos de los proyectos más innovadores que hemos desarrollado recientemente.</p>
    </div>
</section>



<section class="bg-white text-black py-12">
    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-center text-fuchsia-500 mb-8">
        Aliados
    </h1>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

        <div class="p-4">
            <img class="h-auto max-w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/red_monarca.jpg') }}" alt="Monarca">
        </div>

        <div class="p-4">
            <img class="h-auto max-w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/alternare.jpg') }}" alt="Alternare">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/monarch.jpg') }}" alt="Monarch">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/soy_mazahua.jpg') }}" alt="Soy Mazahua">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/silencio.png') }}" alt="Silencio">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/procuenca.jpg') }}" alt="Procuenca" >
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/consejo_civil.jpg') }}" alt="Consejo Civil">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/colonos_montana.jpg') }}" alt="Colonos">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/agaveli.jpg') }}" alt="Agaveli">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/reserva_mariposa_monarca.jpg') }}" alt="Monarca">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/cemda.jpg') }}" alt="Cemda">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/biocenosis.jpg') }}" alt="Biocenosis">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/fondo_mexicano.jpg') }}" alt="Fondo Mexicano">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/focem.jpg') }}" alt="Focem">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/iztacala2.jpg') }}" alt="Izcala">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/tesvb.jpg') }}" alt="Tesvb">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/icar.jpg') }}" alt="Icar">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/probosque.jpg') }}" alt="Probosque">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/conanp.jpg') }}" alt="Conanp">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/aguacateros.jpg') }}" alt="Aguacateros">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/pacmyc.jpg') }}" alt="Pacmyc">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/cruz_roja.jpg') }}" alt="Cruz Roja">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/leddy.jpg') }}" alt="Leddy">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/onirica.jpg') }}" alt="Leddy">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/puerto_ventanas.jpg') }}" alt="Leddy">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/odisea.jpg') }}" alt="Leddy">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/medical_mission.jpg') }}" alt="Leddy">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/flesh.jpg') }}" alt="Leddy">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/barrio.jpg') }}" alt="Leddy">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/va_valle.jpg') }}" alt="Leddy">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/ecoacatitlan.jpg') }}" alt="Leddy">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/camaleon.jpg') }}" alt="Leddy">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/guardianes_valle.jpg') }}" alt="Leddy">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/efas.jpeg') }}" alt="Leddy">
        </div>

    </div>

</section>

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
