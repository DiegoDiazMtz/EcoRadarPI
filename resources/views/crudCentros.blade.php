@extends('layouts.plantilla')

@section('titulo', 'Centros de Reciclaje')

@section('contenido')

@if(session()->has('confirmacion'))
    <script>
        Swal.fire('{{ session('confirmacion') }}', 'Click para cerrar', 'success');
    </script>   
@endif

@if(session()->has('errors'))
    <script>
        Swal.fire('Error: Es necesario completar todos los campos', 'Click para cerrar', 'error');
    </script>
@endif

<div class="container mx-auto p-4 sm:p-8 bg-green-100">
    <div class="text-center mt-5">
        <h1 class="text-3xl sm:text-5xl font-bold text-green-600 mb-6">Gestión de Centros</h1>
        <button data-modal-target="agregar" data-modal-toggle="agregar" class="bg-gradient-to-r from-green-500 to-teal-500 text-white font-bold py-3 px-6 sm:px-8 rounded-full hover:from-teal-500 hover:to-green-500 hover:shadow-lg transition duration-300 transform hover:scale-110">
            Agregar
        </button>
    </div>

    <div class="bg-white p-4 sm:p-6 rounded-lg shadow-lg mt-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-8">
            @foreach ($allcenters as $item)
            <div class="bg-white shadow-sm rounded-lg overflow-hidden w-full mb-3 transition-shadow duration-300 hover:shadow-lg">
                <div class="flex flex-col sm:flex-row items-center">
                    <!-- Padding added to image container -->
                    <div class="w-full sm:w-1/2 p-4"> 
                        <img src="{{ asset($item->imagen) }}" alt="Imagen del Centro" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    <div class="p-4 sm:p-6 w-full sm:w-1/2 flex flex-col">
                        <h5 class="text-lg font-semibold mb-2">{{ $item->centro }}</h5>
                        <p class="text-gray-600">{{ $item->ubicacion }}</p>
                        <p class="text-gray-600 mb-4">Materiales: {{ $item->materiales }}</p>
                        <a href="{{ $item->url }}" class="bg-green-600 text-white font-semibold py-2 px-4 rounded hover:bg-green-700 transition duration-300 mb-4" target="_blank">Visitar sitio</a>
                        <div class="flex justify-center mt-1">
                            <div class="bg-gray-100 p-2 rounded-lg shadow-inner flex flex-col items-center space-y-2 mx-auto mb-4">
                                <p class="text-sm font-semibold text-gray-600">Acciones:</p>
                                <div class="flex space-x-2">
                                    <button data-modal-target="editar{{$item->id}}" data-modal-toggle="editar{{$item->id}}" class="bg-gradient-to-r from-yellow-400 to-orange-400 text-white font-bold py-2 px-0 sm:px-8 rounded-full hover:from-orange-400 hover:to-yellow-400 hover:shadow-lg transition duration-300 transform hover:scale-110">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <button data-modal-target="eliminar{{$item->id}}" data-modal-toggle="eliminar{{$item->id}}" class="bg-gradient-to-r from-red-600 to-pink-600 text-white font-bold py-2 px-0 sm:px-8 rounded-full hover:from-pink-600 hover:to-red-600 hover:shadow-lg transition duration-300 transform hover:scale-110">
                                        <i class="material-icons">delete</i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Incluir el modal desde el archivo parcial -->
@include('partials.crudCentrosModals')

<!-- Include Flowbite script -->
<script src="{{ mix('node_modules/flowbite/dist/flowbite.min.js') }}"></script>

<!-- Para Switalert -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

@endsection
