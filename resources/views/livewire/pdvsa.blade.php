<nav id="navigation-menu" class="bg-gray-600 w-full absolute">
    <div class="container h-full">
        <div class="grid grid-cols-3 gap-4">
            {{--Opciones de cargar y consultar asignacion SECCION DE ADMINISTRADORES--}}
         <div>
         @can('asignacion.registro_asignacion')
             <h2 class="text-red-500 text-lg font-bold">Gestión de Asignación</h2>
             <ul class="bg-white">
                 <li class="navigation-link text-gray-500 hover:bg-TrueGray-200 hover:text-red-500"> <a href="{{route('Asignacion.index')}}">Cargar Asignación</a> </li>
                 <li class="navigation-link text-gray-500 hover:bg-TrueGray-200 hover:text-red-500"> <a href="#">Consultar Asignación</a> </li>
             </ul>
         @endcan
         {{--Opciones de cargar y consultar avances SECCION DE ANALISTAS--}}
         @can('avances.registro')
         <h2 class="text-red-500 text-lg font-bold">Gestión de Avance</h2>
         <ul class="bg-white">
             <li class="navigation-link text-gray-500 hover:bg-TrueGray-200 hover:text-red-500"> <a href="#">Cargar Avance</a> </li>
             <li class="navigation-link text-gray-500 hover:bg-TrueGray-200 hover:text-red-500"> <a href="#">Consultar Avances</a> </li>
         </ul>
         @endcan
     
         </div>
     
         <div class="col-span-3">
             holaghghggggggggggggggggggggggggggggggggg
         </div>
         </div>

    </div>

</nav>