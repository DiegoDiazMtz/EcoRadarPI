<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles and Fonts -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <title>@yield('titulo')</title>
    
    <!-- Vite for assets -->
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom CSS for sticky footer -->
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }
        .content {
            flex: 1;
        }
        footer {
            background: black;
            color: white;
            padding
            text-align: center;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Navbar inclusion -->
    @include('partials.navbar')

    <!-- Main content area -->
    <div class="content w-full mx-auto px-4 sm:px-6 lg:px-8 mt-8 p-8 pt-24" style="background-color: #459569;"> <!-- #02B126 -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
            @yield('contenido')
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 bg-gray-800 bg-opacity-60 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg w-11/12 max-w-2xl p-8 relative">
            <button id="close-modal" class="absolute top-4 right-4 text-gray-600 hover:text-gray-900 text-2xl font-bold">&times;</button>
            <div id="modal-content">
                <!-- Dynamic modal content -->
            </div>
        </div>
    </div>

    
</body>
<!-- Footer -->
<footer>
    <div class="container text-center">
        <p class="mb-0">EcoRadar &copy; {{date('d/m/Y')}}</p>
    </div>
</footer>
</html>
