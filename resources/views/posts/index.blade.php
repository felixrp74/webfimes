<x-app-layout>
    
    <div class="flex justify-center">
        <h1 class="text-center lg:text-2xl font-bold leading-normal text-gray-800 xs:text-xs">
            UNIVERSIDAD NACIONAL DEL ALTIPLANO PUNO
        </h1>
    </div>

 
    <div class="flex justify-center">
        <h1 class="text-center lg:text-2xl font-bold leading-normal text-gray-800 xs:text-xs">
            FACULTAD DE INGENIERIA MECANICA ELECTRICA, ELECTRONICA Y SISTEMAS
          </h1>
    </div>

 
    <div class="flex justify-center">
        <h1 class="text-center lg:text-2xl font-bold leading-normal text-gray-800 xs:text-xs">
            RESPONSABILIDAD SOCIAL
          </h1>
    </div>



    <div class="container my-4 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
    
            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 ">
    
                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-2xl bg-white">
                    <a class="flex justify-center" href="{{route('posts.category', $categories[0])}}">
                        <img class="h-60 w-full object-scale-down md:w-48 mx-4 p-4" alt="Placeholder" class="block h-auto w-full" src="https://img.webme.com/pic/l/larios-unap/mecanica.png">
                    </a>

                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">ESCUELA PROFESIONAL DE INGENIERIA MECANICA ELECTRICA</div>
                        <p class="text-gray-700 text-base">
                            La ingeniería mecanica y eléctrica es el campo de la ingeniería que se ocupa del estudio y la aplicación de la electricidad, electromagnetismo, y la electrónica.
                        </p>
                    </div>

                    <div class="px-6 pt-4 pb-2">
                        {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#mecanica</span> --}}
                        {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#electrica</span> --}}
                        {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#ingenieria</span> --}}
                    </div>
    
                    
                    </footer>
    
                </article>
                <!-- END Article -->
    
            </div>
            <!-- END Column -->
    













            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 ">
                
                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-2xl bg-white">
                    <a class="flex justify-center" href="{{route('posts.category', $categories[1])}}">
                        <img class="h-60 w-full object-scale-down md:w-48 mx-4 p-4" alt="Placeholder" class="block h-auto w-full" src="https://portal.unap.edu.pe/sites/default/files/epie.jpg">
                    </a>

                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">ESCUELA PROFESIONAL DE INGENIERIA ELECTRONICA</div>
                        <p class="text-gray-700 text-base">
                            La ingeniería electrónica es una rama de la ingeniería que se encarga de resolver problemas de la ingeniería tales como el control de procesos industriales y de sistemas electrónicos de potencia.
                        </p>
                    </div>

                    <div class="px-6 pt-4 pb-2">
                        {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#mecanica</span> --}}
                        {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#electronica</span> --}}
                        {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#ingenieria</span> --}}
                    </div>

                    
                    </footer>

                </article>
                <!-- END Article -->

            </div>
            <!-- END Column -->














            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 ">
                
                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-2xl bg-white">
                    <a class="flex justify-center" href="{{route('posts.category', $categories[2])}}">
                        <img class="h-60 w-full object-scale-down md:w-48 mx-4 p-4" alt="Placeholder" class="block h-auto w-full" src="https://pbs.twimg.com/profile_images/2137261758/episunap_400x400.png">
                    </a>

                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">ESCUELA PROFESIONAL DE INGENIERIA SISTEMAS</div>
                        <p class="text-gray-700 text-base">
                            Manual de NASA define la Ingeniería de Sistemas como la combinación de elementos que funcionan junto s para producir la capacidad de satisfacer una necesidad. Los elementos 
                                    incluyen los equipos, software, plantas industriales, personal, procesos, y procedimientos requeridos para alcanzar dicho propósito.
                        </p>
                    </div>

                    <div class="px-6 pt-4 pb-2">
                        {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#mecanica</span> --}}
                        {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#sistemas</span> --}}
                        {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#ingenieria</span> --}}
                    </div>

                    
                    </footer>

                </article>
                <!-- END Article -->

            </div>
            <!-- END Column -->



















 
    
        </div>
    </div>








 
 
















    {{-- <div class="flex space-x-4 ms:space-y-4 m-8">
        <div class="flex-1 ms:block">
            <p class="text-gray-700 text-base">
                La ingeniería mecanica y eléctrica es el campo de la ingeniería que se ocupa del estudio y la aplicación de la electricidad, electromagnetismo, y la electrónica.
            </p>
        </div>
        <div class="flex-1 ms:block">
            <p class="text-gray-700 text-base">
                La ingeniería mecanica y eléctrica es el campo de la ingeniería que se ocupa del estudio y la aplicación de la electricidad, electromagnetismo, y la electrónica.
            </p>
        </div>
        <div class="flex-1 ms:block">
            <p class="text-gray-700 text-base">
                La ingeniería mecanica y eléctrica es el campo de la ingeniería que se ocupa del estudio y la aplicación de la electricidad, electromagnetismo, y la electrónica.
            </p>
        </div>
    </div> --}}










    {{-- <div class="container mx-auto">
         
        <div class="flex space-x-4 ..."> --}}


            {{-- <div class="p-4">  
                <!--Card 1-->
                <div class="max-w-sm rounded overflow-hidden shadow-2xl bg-white">
                    <a class="flex justify-center" href="{{route('posts.category', $categories[0])}}">
                        <img class="h-60 w-full object-scale-down md:w-48 mx-4 p-4" src="https://img.webme.com/pic/l/larios-unap/mecanica.png" alt="Mountain">
                    </a>

                    <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">ESCUELA PROFESIONAL DE INGENIERIA MECANICA ELECTRICA</div>
                    <p class="text-gray-700 text-base">
                        La ingeniería mecanica y eléctrica es el campo de la ingeniería que se ocupa del estudio y la aplicación de la electricidad, electromagnetismo, y la electrónica.
                    </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#mecanica</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#electrica</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#ingenieria</span>
                    </div>
                </div>
            </div>

























            <div class="p-4">  
                <!--Card 1-->
                <div class="max-w-sm rounded overflow-hidden shadow-2xl bg-white">
                    <a class="flex justify-center" href="{{route('posts.category', $categories[0])}}">
                        <img class="h-60 w-full object-scale-down md:w-48 mx-4 p-4" src="https://portal.unap.edu.pe/sites/default/files/epie.jpg" alt="Mountain">
                    </a>

                    <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">ESCUELA PROFESIONAL DE INGENIERIA ELECTRONICA</div>
                    <p class="text-gray-700 text-base">
                        La ingeniería electrónica es una rama de la ingeniería que se encarga de resolver problemas de la ingeniería tales como el control de procesos industriales y de sistemas electrónicos de potencia.
                    </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                    {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"></span> --}}
                    {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#electrica</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#ingenieria</span>
                    </div>
                </div>
            </div>






























            <div class="p-4">  
                <div class="max-w-sm rounded overflow-hidden shadow-2xl bg-white">
                    <a class="flex justify-center" href="{{route('posts.category', $categories[0])}}">
                        <img class="h-60 w-full object-scale-down md:w-48 mx-4 p-4" src="https://pbs.twimg.com/profile_images/2137261758/episunap_400x400.png" alt="Mountain">
                    </a>

                    <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">ESCUELA PROFESIONAL DE INGENIERIA SISTEMAS</div>
                    <p class="text-gray-700 text-base">
                        Manual de NASA define la Ingeniería de Sistemas como la combinación de elementos que funcionan junto s para producir la capacidad de satisfacer una necesidad. Los elementos 
                        incluyen los equipos, software, plantas industriales, personal, procesos, y procedimientos requeridos para alcanzar dicho propósito.
                    </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#sistemas</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#procesos</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#ingenieria</span>
                    </div>
                </div>
            </div>  --}}

            
     

            
            {{-- mecanica  --}}
            {{-- <div class="flex-1 bg-white">
                <div class="md:flex-shrink-0">
                    <a class="flex justify-center" href="{{route('posts.category', $categories[0])}}">
                        <img class="h-48 w-full object-cover md:w-48" src="https://img.webme.com/pic/l/larios-unap/mecanica.png" alt="Man looking at item at a store">
                    </a>
                </div> 
                <div class="p-8">
                    <a href="{{route('posts.category', $categories[0])}}" class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">mecanica</a>
                    <a href="{{route('posts.category', $categories[0])}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Respondable Ing. Giovani Branco</a>
                    <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
                </div>
            </div> --}}

            {{-- electronica --}}
            {{-- <div class="flex-1  bg-white">
                <div class="md:flex-shrink-0">
                    <a class="flex justify-center" href="{{route('posts.category', $categories[1])}}">
                        <img class="h-48 w-full object-cover md:w-48" src="https://portal.unap.edu.pe/sites/default/files/epie.jpg" alt="Man looking at item at a store">
                    </a>
                </div>
                <div class="p-8">
                    <a href="{{route('posts.category', $categories[1])}}" class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">ELECTRONICA</a>
                    <a href="{{route('posts.category', $categories[1])}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Respondable Ing. Merantes Barrera</a>
                    <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
                </div>
            </div> --}}

            {{-- sistemas --}}
            {{-- <div class="flex-1  bg-white">
                <div class="md:flex-shrink-0">
                    <a class="flex justify-center" href="{{route('posts.category', $categories[2])}}">
                        <img class="h-48 w-full object-cover md:w-48" src="https://pbs.twimg.com/profile_images/2137261758/episunap_400x400.png" alt="Man looking at item at a store">
                    </a>
                </div>
                <div class="p-8">
                    <a href="{{route('posts.category', $categories[2])}}" class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">sistemas</a>
                    <a href="{{route('posts.category', $categories[2])}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Respondable Ing. Milder Zanabria</a>
                    <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
                </div>
            </div> --}}
        {{-- </div>
    </div> --}}
  
</x-app-layout>



      {{-- MECANICA  https://img.webme.com/pic/l/larios-unap/mecanica.png --}}
      {{-- ELECTRONICA https://portal.unap.edu.pe/sites/default/files/epie.jpg  --}}
      {{--  SISTEMAS LOGO https://pbs.twimg.com/profile_images/2137261758/episunap_400x400.png --}}
 
      

{{-- 
    Publicaciones con titutlo imagen y tag.
    
    traer posts de la BD y mostrarlo en la interfaz: resources/views/posts/index.blade.php
    tag es un texto para representar una categoria.
    
    
    --}}

 