@extends('layouts.plantilla')

@section('titulo', 'Centros de Reciclaje')
    
@section('contenido')

    <div class="container mx-auto p-8 bg-gray-100">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="flex flex-col md:flex-row items-center">
                <div class="w-full md:w-1/2">
                    <img src="{{ asset('images/img6.jpg') }}" alt="Buscar Centros de Reciclaje" class="rounded-lg shadow-lg mb-4 md:mb-0">
                </div>
                <div class="w-full md:w-1/2 md:pl-8">
                    <h1 class="text-4xl font-bold text-green-600 mb-6">Buscador de Centros de Reciclaje</h1>
                    <p class="text-gray-700 mb-4">
                        Encuentra los centros de reciclaje más cercanos a tu ubicación y obtén información detallada sobre los materiales que aceptan y los procedimientos de reciclaje.
                    </p>

                    <!-- Formulario de búsqueda -->
                    <form method="POST" action="/buscarCentro/buscar" class="mb-4">
                    @csrf
                        <div class="mb-4">
                            <label for="material" class="block text-gray-700 mb-2">Material a reciclar:</label>
                            <input type="text" id="material" name="material" class="w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-green-500" placeholder="Introduce el material a reciclar" value="{{old('material')}}">
                        </div>
                        <button type="submit" class="w-full bg-green-600 text-white p-2 rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
                            Buscar Centros
                        </button>
                    </form>

                    <p class="text-gray-700">
                        EcoRadar proporciona información detallada sobre los tipos de materiales no reciclables y la importancia de reciclarlos. Utiliza nuestro motor de búsqueda para encontrar centros de reciclaje cercanos, detalles sobre los procedimientos de reciclaje y recursos educativos para fomentar la sostenibilidad.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto p-8 bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-4xl font-bold text-green-600 mb-6">Centros de reciclaje</h1>

        <!-- Grid for center cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach ($allcenters as $item)
            <div class="flex flex-col md:flex-row items-center bg-white rounded-lg overflow-hidden transition-shadow duration-300 hover:shadow-xl">
                <!-- Add padding around the image -->
                <div class="w-full md:w-1/2 p-4"> <!-- Added padding here -->
                    <img src="{{ asset($item->imagen) }}" alt="Imagen del Centro" class="w-full h-48 object-cover rounded-lg">
                </div>
                <div class="p-6 w-full md:w-1/2">
                    <h5 class="text-lg font-semibold">{{ $item->centro }}</h5>
                    <p class="text-gray-700">{{ $item->ubicacion }}</p>
                    <p class="text-gray-700 mb-4">Materiales: {{ $item->materiales }}</p>
                    <a href="{{ $item->url }}" class="bg-green-600 text-white font-semibold py-2 px-4 rounded hover:bg-green-700 transition duration-300" target="_blank">Visitar sitio</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


</div>




@endsection




<!--     <form method="POST" action="/buscarCentro/buscar">
    @csrf
        <div class="mb-4">
            <label for="material" class="block text-gray-700 mb-2">Material a reciclar:</label>
            <input type="text" id="material" name="material" class="w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-green-500" placeholder="Introduce el material a reciclar" value="{{old('material')}}">
        </div>
        <button type="submit" class="w-full bg-green-600 text-black p-2 rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
            Buscar Centros
        </button>
    </form>


    <div class="container mx-auto">
        @foreach ($allcenters as $item)
        <div class="bg-white shadow-md rounded-lg overflow-hidden w-3/4 mb-3 mx-auto">
            <img src="{{ asset($item->imagen) }}" alt="Imagen del Centro" class="w-full h-48 object-cover">
            <div class="px-6 py-4">
                <h5 class="text-lg font-semibold">{{ $item->centro }}</h5>
                <p class="text-gray-700">{{ $item->ubicacion }}</p>
                <p class="text-gray-700">Materiales: {{ $item->materiales }}</p>
                <p class="text-blue-500 underline"><a href="{{ $item->url }}" target="_blank">Visitar sitio</a></p>
            </div>
        </div>
        @endforeach

    </div> -->