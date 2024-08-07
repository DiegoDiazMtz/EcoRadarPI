<!-- Modal Agregar -->
<div id="agregar" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 left-0 right-0 z-50 flex justify-center items-center w-full p-4 overflow-x-hidden overflow-y-auto h-modal md:inset-0 md:h-full">
    <div class="relative w-full max-w-md h-full md:h-auto">

        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">

                <h1 class="text-xl font-semibold text-green-600 dark:text-white" id="staticBackdropLabel">Agregar Centro</h1>

                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="agregar"> <!-- Cerrar modal -->
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>

            </div>

            <form method="POST" action="/agregar" enctype="multipart/form-data">
            @csrf
                <div class="px-6 py-4">
                    <div class="text-primary text-lg font-semibold text-center mb-4">
                        Introduce datos del centro 
                    </div>

                    <div class="mb-4">
                        <label for="txtCentro" class="block text-sm font-medium text-gray-900 dark:text-white">Centro:</label>
                        <input type="text" name="txtCentro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{old('txtCentro')}}">
                        <p class='text-red-500 text-xs italic'>{{ $errors->first('txtCentro') }}</p>
                    </div>

                    <div class="mb-4">
                        <label for="txtUbicacion" class="block text-sm font-medium text-gray-900 dark:text-white">Ubicación:</label>
                        <input type="text" name="txtUbicacion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{old('txtUbicacion')}}">
                        <p class='text-red-500 text-xs italic'>{{ $errors->first('txtUbicacion') }}</p>
                    </div>

                    <div class="mb-4">
                        <label for="boxMaterials" class="block text-sm font-medium text-gray-900 dark:text-white">Materiales:</label>
                       
                        <ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="unicel-checkbox" type="checkbox" name="boxMaterials[]" value="Unicel" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="unicel-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Unicel</label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="colillas-checkbox" type="checkbox" name="boxMaterials[]" value="Colillas de Cigarro" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="colillas-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Colillas de Cigarro</label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="pilas-checkbox" type="checkbox" name="boxMaterials[]" value="Pilas o Baterias" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="pilas-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pilas o Baterias</label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="construccion-checkbox" type="checkbox" name="boxMaterials[]" value="Materiales de Construcción" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="construccion-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Materiales de Construcción</label>
                                </div>
                            </li>
                        </ul>
                        <p class='text-red-500 text-xs italic'>{{ $errors->first('boxMaterials') }}</p>

                    </div>

                    <div class="mb-4">
                        <label for="txtURL" class="block text-sm font-medium text-gray-900 dark:text-white">URL:</label>
                        <input type="text" name="txtURL" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{old('txtURL')}}">
                        <p class='text-red-500 text-xs italic'>{{ $errors->first('txtURL') }}</p>
                    </div>

                    <div class="mb-4">
                        <label for="imagen" class="block text-sm font-semibold text-gray-800 mb-2">Imagen de la Sucursal</label>
                        <div class="flex items-center justify-center">
                            <label for="imagen" class="bg-black text-white font-bold py-2 px-4 rounded-lg cursor-pointer hover:bg-black transition duration-300">
                                Seleccionar archivo
                            </label>
                            <input type="file" id="imagen" name="imagen" class="hidden" />
                        </div>
                        <p class='text-red-500 text-xs italic'>{{ $errors->first('imagen') }}</p>
                    </div>
                    
                </div>

                <div class="flex items-center justify-end p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="bg-gradient-to-r from-green-500 to-teal-500 text-white font-bold py-3 px-6 sm:px-8 rounded-full hover:from-teal-500 hover:to-green-500 hover:shadow-lg transition duration-300 transform hover:scale-110">Agregar Centro</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Editar -->
@foreach ($allcenters as $item)
<div id="editar{{$item->id}}" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 left-0 right-0 z-50 flex justify-center items-center w-full p-4 overflow-x-hidden overflow-y-auto h-modal md:inset-0 md:h-full">
    <div class="relative w-full max-w-md h-full md:h-auto">

        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">

                <h1 class="text-xl font-semibold text-yellow-400 dark:text-white">Editar Centro</h1>

                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editar{{$item->id}}"> <!-- Cerrar modal -->
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>

            </div>

            <form method="POST" action="/editar/{{$item->id}}" enctype="multipart/form-data">
                @csrf

                <div class="px-6 py-4">
                    <div class="text-primary text-lg font-semibold text-center mb-4">
                        Editar datos del centro 
                    </div>

                    <div class="mb-4">
                        <label for="txtCentro{{$item->id}}" class="block text-sm font-medium text-gray-900 dark:text-white">Centro:</label>
                        <input type="text" id="txtCentro{{$item->id}}" name="txtCentro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{ old('txtCentro', $item->centro) }}">
                        <p class='text-red-500 text-xs italic'>{{ $errors->first('txtCentro') }}</p>
                    </div>

                    <div class="mb-4">
                        <label for="txtUbicacion{{$item->id}}" class="block text-sm font-medium text-gray-900 dark:text-white">Ubicación:</label>
                        <input type="text" id="txtUbicacion{{$item->id}}" name="txtUbicacion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{ old('txtUbicacion', $item->ubicacion) }}">
                        <p class='text-red-500 text-xs italic'>{{ $errors->first('txtUbicacion') }}</p>
                    </div>

                    <div class="mb-4">
                        <label for="boxMaterials{{$item->id}}" class="block text-sm font-medium text-gray-900 dark:text-white">Materiales:</label>
                       
                        <ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="unicel-checkbox{{$item->id}}" type="checkbox" name="boxMaterials[]" value="Unicel" class="w-4 h-4 text-yellow-400 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" {{ in_array('Unicel', explode(', ', $item->materiales)) ? 'checked' : '' }}>
                                    <label for="unicel-checkbox{{$item->id}}" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Unicel</label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="colillas-checkbox{{$item->id}}" type="checkbox" name="boxMaterials[]" value="Colillas de Cigarro" class="w-4 h-4 text-yellow-400 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" {{ in_array('Colillas de Cigarro', explode(', ', $item->materiales)) ? 'checked' : '' }}>
                                    <label for="colillas-checkbox{{$item->id}}" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Colillas de Cigarro</label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="pilas-checkbox{{$item->id}}" type="checkbox" name="boxMaterials[]" value="Pilas o Baterias" class="w-4 h-4 text-yellow-400 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" {{ in_array('Pilas o Baterias', explode(', ', $item->materiales)) ? 'checked' : '' }}>
                                    <label for="pilas-checkbox{{$item->id}}" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pilas o Baterias</label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="construccion-checkbox{{$item->id}}" type="checkbox" name="boxMaterials[]" value="Materiales de Construcción" class="w-4 h-4 text-yellow-400 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" {{ in_array('Materiales de Construcción', explode(', ', $item->materiales)) ? 'checked' : '' }}>
                                    <label for="construccion-checkbox{{$item->id}}" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Materiales de Construcción</label>
                                </div>
                            </li>
                        </ul>
                        <p class='text-red-500 text-xs italic'>{{ $errors->first('boxMaterials') }}</p>

                    </div>

                    <div class="mb-4">
                        <label for="txtURL{{$item->id}}" class="block text-sm font-medium text-gray-900 dark:text-white">URL:</label>
                        <input type="text" id="txtURL{{$item->id}}" name="txtURL" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{ old('txtURL', $item->url) }}">
                        <p class='text-red-500 text-xs italic'>{{ $errors->first('txtURL') }}</p>
                    </div>

                    <div class="mb-4">
                        <label for="imagen{{$item->id}}" class="block text-sm font-semibold text-gray-800 mb-2">Imagen de la Sucursal</label>
                        <div class="flex items-center justify-center">
                            <label for="imagen{{$item->id}}" class="bg-black text-white font-bold py-2 px-4 rounded-lg cursor-pointer hover:bg-black transition duration-300">
                                Seleccionar archivo
                            </label>
                            <input type="file" id="imagen{{$item->id}}" name="imagen" class="hidden" />
                        </div>
                        <p class='text-red-500 text-xs italic'>{{ $errors->first('imagen') }}</p>
                    </div>
                    
                </div>

                <div class="flex items-center justify-end p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="bg-gradient-to-r from-yellow-400 to-orange-400 text-white font-bold py-3 px-6 sm:px-8 rounded-full hover:from-orange-400 hover:to-yellow-400 hover:shadow-lg transition duration-300 transform hover:scale-110">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

<!-- Modal Eliminar -->
@foreach ($allcenters as $item)
<div id="eliminar{{$item->id}}" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 left-0 right-0 z-50 flex justify-center items-center w-full p-4 overflow-x-hidden overflow-y-auto h-modal md:inset-0 md:h-full">
    <div class="relative w-full max-w-md h-full md:h-auto">

        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">

                <h1 class="text-xl font-semibold text-red-600 dark:text-white">Eliminar Centro</h1>

                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="eliminar{{$item->id}}"> <!-- Cerrar modal -->
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>

            </div>

            <form method="POST" action="/eliminar/{{$item->id}}">
                @csrf

                <div class="px-6 py-4">
                    <div class="text-primary text-lg font-semibold text-center mb-4 text-red-600">
                        ¿Estás seguro de eliminar el centro?
                    </div>

                    <div class="mb-4">
                        <label for="txtCentro{{$item->id}}" class="block text-sm font-medium text-gray-900 dark:text-white">Centro:</label>
                        <input readonly type="text" id="txtCentro{{$item->id}}" name="txtCentro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{ old('txtCentro', $item->centro) }}">
                    </div>

                    <div class="mb-4">
                        <label for="txtUbicacion{{$item->id}}" class="block text-sm font-medium text-gray-900 dark:text-white">Ubicación:</label>
                        <input readonly type="text" id="txtUbicacion{{$item->id}}" name="txtUbicacion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{ old('txtUbicacion', $item->ubicacion) }}">
                    </div>

                    <div class="mb-4">
                        <label for="boxMaterials{{$item->id}}" class="block text-sm font-medium text-gray-900 dark:text-white">Materiales::</label>
                        <input readonly type="text" id="unicel-checkbox{{$item->id}}" name="boxMaterials[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{ old('boxMaterials[]', $item->materiales) }}">
                    </div>

                    <div class="mb-4">
                        <label for="txtURL{{$item->id}}" class="block text-sm font-medium text-gray-900 dark:text-white">URL:</label>
                        <input readonly type="text" id="txtURL{{$item->id}}" name="txtURL" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{ old('txtURL', $item->url) }}">
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-900 dark:text-white">Imagen de la Sucursal:</label>
                        <img src="{{ asset($item->imagen) }}" alt="Imagen del Centro" class="w-full h-48 object-cover rounded-lg mt-2">

                    </div>
                    
                </div>

                <div class="flex items-center justify-end p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="bg-gradient-to-r from-red-600 to-pink-600 text-white font-bold py-2 px-0 sm:px-8 rounded-full hover:from-pink-600 hover:to-red-600 hover:shadow-lg transition duration-300 transform hover:scale-110">Eliminar Centro</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach