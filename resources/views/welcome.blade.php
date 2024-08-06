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

    <div class="container mx-auto p-8 bg-gray-100">
    <div class="text-center mt-5">
        <h1 class="text-5xl font-bold text-green-600 mb-6">Centros</h1>

    </div>

    <div class="bg-white p-6 rounded-lg shadow-lg mt-8">
        <h1 class="text-4xl font-bold text-green-600 mb-6">Centros de reciclaje</h1>
        <button data-modal-target="agregar" data-modal-toggle="agregar" class="bg-green-800 text-white font-bold py-2 px-4 rounded ml-4">
            Agregar
        </button>
        
        <!-- Grid layout for center cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach ($allcenters as $item)
            <div class="bg-white shadow-sm rounded-lg overflow-hidden w-full mb-3 transition-shadow duration-300 hover:shadow-lg">
                <div class="flex flex-col md:flex-row items-center">
                    <!-- Padding added to image container -->
                    <div class="w-full md:w-1/2 p-4"> <!-- Padding here -->
                        <img src="{{ asset($item->imagen) }}" alt="Imagen del Centro" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    <div class="p-6 w-full md:w-1/2 flex flex-col">
                        <h5 class="text-lg font-semibold mb-2">{{ $item->centro }}</h5>
                        <p class="text-gray-600">{{ $item->ubicacion }}</p>
                        <p class="text-gray-600 mb-4">Materiales: {{ $item->materiales }}</p>
                        <a href="{{ $item->url }}" class="bg-green-600 text-white font-semibold py-2 px-4 rounded hover:bg-green-700 transition duration-300 mb-4" target="_blank">Visitar sitio</a>
                        <div class="bg-gray-100 p-4 rounded-lg shadow-inner">
                            <h6 class="text-sm text-gray-600 mb-2">Administrar:</h6>
                            <div class="flex space-x-2">
                                <button data-modal-target="editar{{$item->id}}" data-modal-toggle="editar{{$item->id}}" class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded transition duration-300">Editar</button>
                                <button data-modal-target="eliminar{{$item->id}}" data-modal-toggle="eliminar{{$item->id}}" class="bg-red-600 hover:bg-red-600 text-white font-bold py-2 px-4 rounded transition duration-300">Eliminar</button>
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
