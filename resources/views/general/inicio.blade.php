<x-app-layout>

    <div class="chat-notification">
        <div class="chat-notification-logo-wrapper">
            <img class="chat-notification-logo" src="https://portal.unap.edu.pe/sites/default/files/epie.jpg" alt="ChitChat Logo">
        </div>
        <div class="chat-notification-content">
            <h4 class="chat-notification-title"> GENERALES</h4>
            <p class="chat-notification-message">PUBLICACIONES</p>
        </div>
    </div>

     {{-- <div class="container py-4 bg-gray-500"> --}}
        <div class="container px-4 py-4 ">
            {{-- <h1>LISTA DE PUBLICACIONES</h1> --}}
            <div class="mt-4 py-2" >
                {{ $posts->links() }}
            </div>
            

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  gap-6">
                @foreach ($posts as $post)
                    <x-card-post :post="$post"/> 
                @endforeach
            </div>
        </div>
    {{-- </div> --}}

      {{-- MECANICA  https://img.webme.com/pic/l/larios-unap/mecanica.png --}}
      {{-- ELECTRONICA https://portal.unap.edu.pe/sites/default/files/epie.jpg  --}}
      {{--  SISTEMAS LOGO https://pbs.twimg.com/profile_images/2137261758/episunap_400x400.png --}}
 
      

    <div class="container">
        {{-- <h1 class="text-4xl font-bold text-gray-600"> estado {{$post->status}} - {{$post->name}}</h1> --}}
        <div class="text-lg text-gray-500 mb-2">
            {{-- {{$post->extract}} --}}
            when de 
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-3">
            {{-- contenido principal --}}
            <div class="lg:col-span-2">
                <figure>
                    {{-- <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt=""> --}}
                </figure>
                <div class="text-base">
                    {{-- {{$post->body}} --}}
                    told you 
                </div>
            </div>

        </div>
    </div>



    <style>
        .chat-notification {
            display: flex;
            max-width: 24rem;
            margin: 0 auto;
            padding: 1.5rem;
            border-radius: 0.5rem;
            background-color: #fff;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .chat-notification-logo-wrapper {
            flex-shrink: 0;
        }
        .chat-notification-logo {
            height: 3rem;
            width: 3rem;
        }
        .chat-notification-logo:hover {
            height: 3.3rem;
            width: 3.3rem;
            transition: .5s;
        }
        .chat-notification-content {
            margin-left: 1.5rem;
            padding-top: 0.25rem;
        }
        .chat-notification-title {
            color: #1a202c;
            font-size: 1.25rem;
            line-height: 1.25;
        }
        .chat-notification-message {
            color: #718096;
            font-size: 1rem;
            line-height: 1.5;
        }
    </style>
</x-app-layout>
