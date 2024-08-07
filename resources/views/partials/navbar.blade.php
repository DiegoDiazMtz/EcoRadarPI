<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <!-- Logo and Home Link -->
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="h-10 w-10 object-cover rounded-full shadow-md">
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">EcoRadar</span>
    </a>

    <!-- Mobile menu button -->
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      @guest
        <!-- Authentication Links with updated styles -->
        <div class="flex space-x-3 md:space-x-0 rtl:space-x-reverse" style="gap: 10px;">
            <a href="{{ route('login') }}" class="bg-gradient-to-r from-green-500 to-teal-500 text-white font-bold py-3 px-6 sm:px-8 rounded-full hover:from-teal-500 hover:to-green-500 hover:shadow-lg transition duration-300 transform hover:scale-110">Login</a>
            <!-- <a href="{{ route('register') }}" class="bg-gradient-to-r from-green-500 to-teal-500 text-white font-bold py-3 px-6 sm:px-8 rounded-full hover:from-teal-500 hover:to-green-500 hover:shadow-lg transition duration-300 transform hover:scale-110">Register</a> -->
        </div>
      @else
        <div class="relative">
            <button id="user-menu-button" class="bg-gradient-to-r from-green-500 to-teal-500 text-white font-bold py-3 px-6 sm:px-8 rounded-full hover:from-teal-500 hover:to-green-500 hover:shadow-lg transition duration-300 transform hover:scale-110">
                {{ Auth::user()->name }}
            </button>
            <div id="user-menu" class="absolute right-0 hidden w-48 bg-white border border-gray-200 rounded-md shadow-lg dark:bg-gray-800 p-1">
                <a href="{{ route('logout') }}" class="bg-gradient-to-r from-red-600 to-pink-600 text-white font-bold py-2 px-4 block w-full text-center rounded-md hover:from-pink-600 hover:to-red-600 hover:shadow-lg transition duration-300 transform hover:scale-105"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </div>
        </div>
      @endguest

      <!-- Hamburger menu button -->
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
      </button>
    </div>

    <!-- Always visible navigation links -->
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
                <a href="/" class="block py-2 px-3 rounded md:p-0 {{ Request::is('/') ? 'text-green-700 md:dark:text-green-500' : 'text-gray-900 dark:text-white' }} hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                    <i class="material-icons" style="font-size: 36px;">recycling</i>
                </a>
            </li>
            <li>
                <a href="/buscarCentro" class="block py-2 px-3 rounded md:p-0 {{ Request::is('buscarCentro') ? 'text-green-700 md:dark:text-green-500' : 'text-gray-900 dark:text-white' }} hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                    <i class="material-icons" style="font-size: 36px;">location_on</i>
                </a>
            </li>
            <li>
                <a href="/contactanos" class="block py-2 px-3 rounded md:p-0 {{ Request::is('contactanos') ? 'text-green-700 md:dark:text-green-500' : 'text-gray-900 dark:text-white' }} hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                    <i class="material-icons" style="font-size: 36px;">mail</i>
                </a>
            </li>
            @auth
            <li>
                <a href="/crudCentros" class="block py-2 px-3 rounded md:p-0 {{ Request::is('crudCentros') ? 'text-green-700 md:dark:text-green-500' : 'text-gray-900 dark:text-white' }} hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                    <i class="material-icons" style="font-size: 36px;">contacts</i>
                </a>
            </li>
            @endauth
        </ul>
    </div>

  </div>
</nav>

<!-- Scripts for Dropdown -->
<script>
    // Toggle the menu when clicking on the hamburger button
    document.querySelectorAll('[data-collapse-toggle]').forEach(button => {
        button.addEventListener('click', () => {
            const target = document.getElementById(button.getAttribute('data-collapse-toggle'));
            target.classList.toggle('hidden');
        });
    });

    // Toggle the user menu
    document.getElementById('user-menu-button').addEventListener('click', function() {
        var userMenu = document.getElementById('user-menu');
        if (userMenu.classList.contains('hidden')) {
            userMenu.classList.remove('hidden');
        } else {
            userMenu.classList.add('hidden');
        }
    });
</script>
