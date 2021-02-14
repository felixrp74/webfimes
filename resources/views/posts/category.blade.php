<x-app-layout>

    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <div class="flex bg-white shadow-2xl rounded-lg">
        @if ( $category->slug == 'ingenieria-mecanica' )
            <div class="lg:flex-1 md:flex-shrink-0">
                
                {{-- logo --}}
                <a class="flex justify-center" href="#">
                    <img class="h-60 w-full object-scale-down md:w-48 mx-4 p-4" src="https://img.webme.com/pic/l/larios-unap/mecanica.png" alt="Man looking at item at a store">
                </a>
                
            </div>
            <div class="lg:flex-1 p-8">
                <a href="#" class="uppercase tracking-wide text-3xl text-indigo-500 font-semibold">ESCUELA PROFESIONAL DE INGENIERIA MECANICA ELECTRICA</a>
                <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black ">Respondable Ing. Giovani Branco</a>
                <p class="mt-2 text-gray-500">La ingeniería eléctrica es el campo de la ingeniería que se ocupa del estudio y la aplicación de la electricidad, electromagnetismo, y la electrónica.</p>
            </div>

        @elseif( $category->slug == 'ingenieria-electronica' )
            <div class="lg:flex-1 md:flex-shrink-0">
                
                {{-- logo --}}
                <a class="flex justify-center" href="#">
                    <img class="h-60 w-full object-scale-down md:w-48 mx-4 p-4" src="https://portal.unap.edu.pe/sites/default/files/epie.jpg" alt="Man looking at item at a store">
                </a>
            </div>
            <div class="lg:flex-1 p-8">
                <a href="#" class="uppercase tracking-wide text-3xl text-indigo-500 font-semibold">ESCUELA PROFESIONAL DE INGENIERIA MECANICA ELECTRONICA</a>
                <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black ">Respondable Ing. Carlos Grande</a>
                <p class="mt-2 text-gray-500">La ingeniería electrónica es una rama de la ingeniería que se encarga de resolver problemas de la ingeniería tales como el control de procesos industriales y de sistemas electrónicos de potencia.</p>
            </div>

            @elseif( $category->slug == 'ingenieria-sistemas' )
                <div class="lg:flex-1 md:flex-shrink-0">
                    
                    {{-- logo --}}
                    <a class="flex justify-center" href="#">
                        <img class="h-60 w-full object-scale-down md:w-48 mx-4 p-4" src="https://pbs.twimg.com/profile_images/2137261758/episunap_400x400.png" alt="Man looking at item at a store">
                    </a>

                </div>
                <div class="lg:flex-1 p-8">
                    <a href="#" class="uppercase tracking-wide text-3xl text-indigo-500 font-semibold">ESCUELA PROFESIONAL DE INGENIERIA SISTEMAS</a>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black ">Respondable Ing. Milder Zanavria</a>
                    <p class="mt-2 text-gray-500">Manual de NASA define la Ingeniería de Sistemas como la combinación de elementos que funcionan junto
                        s para producir la capacidad de satisfacer una necesidad. Los elementos incluyen 
                        los equipos, software, plantas industriales, personal, procesos, y procedimientos requeridos para alcanzar dicho propósito.</p>
                </div>

            @elseif( $category->slug == 'general' )
                <div class="lg:flex-1 md:flex-shrink-0">
                    
                    {{-- logo --}}
                    <a class="flex justify-center" href="#">
                        <img class="h-60 w-full object-scale-down md:w-48 mx-4 p-4" src="https://upload.wikimedia.org/wikipedia/commons/c/cb/Logo_UNAP.png" alt="Man looking at item at a store">
                    </a>
                    
                </div>
                <div class="lg:flex-1 p-8">
                    <a href="#" class="uppercase tracking-wide text-3xl text-indigo-500 font-semibold">general</a>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black ">Respondable Ing. Milder Zanavria</a>
                    <p class="mt-2 text-gray-500">Publicaciones generales una ayuda extra para facilitar el rapido acceso a la informacion.</p>
                </div>

        @endif
        </div>
    </div>









    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">



        {{-- <h1 class="uppercase text-center text-3xl font-bold">
            Programa Estudio: {{$category->name}}
        </h1> --}}

        @foreach ($posts as $post)
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden" >
  
                @if ($post->image != null) 
                    <img class="w-full h-72 object-cover -object-center"
                     src="{{Storage::url($post->image->url)}}" alt="">
                @else
                    <img class="w-full h-72 object-cover object-center" 
                    src="https://cdn.pixabay.com/photo/2015/07/31/11/45/library-869061_960_720.jpg" alt="">
                @endif
            

                <div class="px-6 py-4">
                    {{-- nombre --}}
                    <div class="font-bold text-xl mb-2">
                        <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
                    </div>

                    {{-- resumen --}}
                    <div class="text-gray-700 text-base mt-3">
                         {!!$post->extract!!}
                    </div>

                    {{-- fecha --}}
                    <div class="text-gray-700 text-base mt-3">
                        {{-- $formattedString = $currentTime->format( 'c' ); --}}
                        Publicado Fecha:   {{ $post->created_at}}
                    </div>

                    {{-- documento --}}
                    <div class="text-gray-700 text-base mt-6">
                        
                        @if ($post->file != null) 
                             
                            <a class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 mt-5 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline"
                                 href="{{ Storage::url($post->file->url) }}" target="_blank" rel="noopener noreferrer">Documento</a>
                                                  
                        @endif 

                            <a class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 mt-5 transition duration-500 ease select-none hover:bg-blue-600 focus:outline-none focus:shadow-outline"
                                 href="{{route('posts.show', $post)}}" target="_blank" rel="noopener noreferrer">Ver</a>

                    </div>
                </div>
 
            </article>
        @endforeach
 
        <div class="mt-4">
            {{$posts->links()}}
        </div>

    </div>
</x-app-layout>