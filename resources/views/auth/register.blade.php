@extends('layouts.app')

@section('content')
    <!-- Incluimos jQuery desde CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Incluimos Google Fonts y Font Awesome para tipografía e iconos -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <div class="min-h-screen flex items-center justify-center bg-gray-50">
        <div class="w-full max-w-lg p-8 bg-white shadow-xl rounded-xl">
            <div class="flex justify-center">
                <img src="{{ asset('img/icon.png') }}" alt="Logo" class="h-12 w-auto">
            </div>

            <div class="text-center mb-6">
                <h4 class="text-3xl font-extrabold text-gray-800">{{ __('Crear una cuenta') }}</h4>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Nombre') }}</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fas fa-user text-gray-400"></i>
                        </span>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required
                               class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('name') border-red-500 @enderror">
                    </div>
                    @error('name')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Correo Electrónico') }}</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fas fa-envelope text-gray-400"></i>
                        </span>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required
                               class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('email') border-red-500 @enderror">
                    </div>
                    @error('email')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Contraseña -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Contraseña') }}</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fas fa-lock text-gray-400"></i>
                        </span>
                        <input id="password" type="password" name="password" required
                               class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('password') border-red-500 @enderror">
                    </div>
                    @error('password')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirmar Contraseña -->
                <div>
                    <label for="password-confirm" class="block text-sm font-medium text-gray-700">{{ __('Confirmar Contraseña') }}</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fas fa-lock text-gray-400"></i>
                        </span>
                        <input id="password-confirm" type="password" name="password_confirmation" required
                               class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                </div>

                <!-- Botón de Registro -->
                <div>
                    <button type="submit" class="w-full py-3 px-4 bg-indigo-600 text-white font-semibold rounded-md shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                        {{ __('Registrar') }}
                    </button>
                </div>
            </form>

            <!-- Enlace a Iniciar Sesión -->
            <div class="text-center mt-6">
                <p class="text-sm text-gray-600">¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-800 font-medium">{{ __('Inicia Sesión') }}</a></p>
            </div>
        </div>
    </div>

    <!-- Script jQuery para ajustar la responsividad -->
    <script>
        $(document).ready(function() {
            function adjustLayout() {
                if ($(window).width() < 768) {
                    $('.min-h-screen').removeClass('items-center').addClass('items-start pt-10');
                } else {
                    $('.min-h-screen').removeClass('items-start pt-10').addClass('items-center');
                }
            }

            adjustLayout();

            $(window).resize(function() {
                adjustLayout();
            });
        });
    </script>
@endsection

@vite('resources/css/app.css')
