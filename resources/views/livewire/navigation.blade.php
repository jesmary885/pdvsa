<header class="bg-white h-full">
    {{--Menu superior--}}
    <div class="container flex items-center h-26">
        {{--Logo PDVSA--}}
        <x-logo/>
        {{--Franja roja con nombre del sistema--}}
        <div class="flex-1 px-2">
            <h1 class="bg-gradient-to-l from-red-600 text-right rounded-lg text-white px-2">
                 Sistema De Planificación de Confiabilidad Operacional SISCONF
            </h1>
        </div>
        {{--dropdown opcion de modificar perfil de usuario, ir a panel administrativo y cerrar sesion--}}
        <div class="px-6 relative">
            @auth
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <span class="inline-flex rounded-md">
                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                {{ Auth::user()->name }}
                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </span>
                    </x-slot>
                    <x-slot name="content">
                        <!-- Account Management -->
                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Perfil') }}
                        </x-jet-dropdown-link>
                        @can('admin.home')
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                Gestión Administrativa
                            </a>
                        @endcan
                        <div class="border-t border-gray-100"></div>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            @endauth
        </div>
    </div>

    <nav id="navigation-menu" class="bg-gray-600 w-full absolute">
        <div class="container h-full">
            <div class="grid grid-cols-4">
                <div class="p-6">
                    @can('asignacion.registro_asignacion')
                        <h2 class="text-red-500 text-lg font-bold">Gestión de Asignación</h2>
                        <ul class="p-2">
                            <li class="navigation-link text-gray-500 hover:bg-TrueGray-200 hover:text-red-500"> <a href="{{route('Asignacion.index')}}">Cargar Asignación</a> </li>
                            <li class="navigation-link text-gray-500 hover:bg-TrueGray-200 hover:text-red-500"> <a href="#">Consultar Asignación</a> </li>
                        </ul>
                    @endcan
                    {{--Opciones de cargar y consultar avances SECCION DE ANALISTAS--}}
                    @can('avances.registro')
                    <h2 class="text-red-600 text-lg font-bold">Gestión de Avance</h2>
                    <ul class="p-2">
                        <li class="navigation-link text-gray-500 hover:bg-TrueGray-200 hover:text-red-500"> <a href="#">Cargar Avance</a> </li>
                        <li class="navigation-link text-gray-500 hover:bg-TrueGray-200 hover:text-red-500"> <a href="#">Consultar Avances</a> </li>
                    </ul>
                    @endcan
                    </div>
                    <div class="col-span-3 py-6 px-0 h-full">
                        @can('asignacion.registro_asignacion')
                        @livewire('gestion-asignacion')
                        @endcan
                    </div>
            </div>
        </div>
    </nav>
</header>
