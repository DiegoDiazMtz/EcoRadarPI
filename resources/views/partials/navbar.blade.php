<head>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
</head>
<div class="menu" >
    <nav>
        <div class="grid grid-cols-3">
            <img src="{{ asset('images/logoEco.jpg') }}" alt="Logo" class="w-20 h-20 rounded-full">
            <div >
                <ul>
                    <li><a href="/"><i class="material-icons" style="font-size: 2rem;">recycling</i></a></li>
                    <li><a href="/perfil"><i class="material-icons" style="font-size: 2rem;">person</i></a></li> 
                    <li><a href="/busquedaCentros"><i class="material-icons" style="font-size: 2rem;">location_on</i></a></li> 
                    <li><a href="/acerca"><i class="material-icons" style="font-size: 2rem;">contact_support</i></a></li> 
                    <!-- <li><a href="/buscadorC"><i class="material-icons" style="font-size: 2rem;">location_searching</i></a></li>  -->
                    <li><a href="/informacion"><i class="material-icons" style="font-size: 2rem;">mail</i></a></li> 
                    
                    <li><a href="/contactanos"><i class="material-icons" style="font-size: 2rem;">contacts</i></a></li>
                </ul>
            </div>
           
        </div>
    </nav>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>