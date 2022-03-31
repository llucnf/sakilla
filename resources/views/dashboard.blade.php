<x-app-layout>
    <x-slot name="header">
        <div class="flex items-stretch ">
            
            <div class="m-8">

                <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">Menu <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg></button>
        
                <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(128px, 665px);"
                    data-popper-placement="bottom">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="/grafico"
                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Graficos</a>
                        </li>
                        <li>
                            <a href="/grafico/create"
                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Generar grafico</a>
                        </li>
                        <li>
                            <a href="/film/create"
                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Crear Peliculas</a>
                        </li>
                    </ul>
                </div>
        
            </div>
        </div>
        

    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @yield('content')
                    <div>
                        @yield('grafico')
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
