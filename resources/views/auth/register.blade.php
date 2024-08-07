@extends('layouts.plantilla')

@section('contenido')
<div class="min-h-screen flex items-center justify-center bg-green-100">
    <div class="relative w-full max-w-md bg-white shadow-lg rounded-lg p-8 overflow-hidden">
        <!-- Contenido del formulario -->
        <div class="relative z-10">
            <div class="text-center mb-6">
                <img src="{{ asset('images/logo.jpeg') }}" alt="Recycling" class="w-24 h-24 mx-auto mb-6 rounded-full shadow-md">
                <h2 class="text-3xl font-semibold text-green-700">{{ __('¡Regístrate en EcoRadar!') }}</h2>
                <p class="text-sm text-gray-600 mt-2">Crea tu cuenta y únete a nuestra comunidad de recicladores.</p>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-600">{{ __('Nombre') }}</label>
                    <input id="name" type="text" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="text-red-500 text-sm mt-1 block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">{{ __('Dirección de Email') }}</label>
                    <input id="email" type="email" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="text-red-500 text-sm mt-1 block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600">{{ __('Contraseña') }}</label>
                    <input id="password" type="password" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="text-red-500 text-sm mt-1 block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password-confirm" class="block text-sm font-medium text-gray-600">{{ __('Confirmar Contraseña') }}</label>
                    <input id="password-confirm" type="password" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="bg-gradient-to-r from-green-500 to-teal-500 text-white font-semibold py-3 px-12 rounded-full hover:from-teal-500 hover:to-green-500 hover:shadow-lg transition duration-300 transform hover:scale-110">
                        {{ __('Registrarse') }}
                    </button>
                </div>
            </form>
        </div>

        <!-- Imagen de fondo diagonal -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute inset-0 w-full h-full bg-no-repeat bg-cover bg-center clip-diagonal opacity-100"
                 style="background-image: url('{{ asset('images/f1.jpg') }}');"></div>
        </div>
    </div>
</div>

<!-- Estilos personalizados -->
<style>
    .clip-diagonal {
        clip-path: polygon(100% 0, 100% 0, 100% 100%, 0 100%);
    }
</style>
@endsection
