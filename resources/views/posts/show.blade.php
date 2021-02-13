<x-app-layout>

    <div class="container mx-auto my-4">
        {{-- <h1 class="text-4xl font-bold text-gray-600">  --}}
        <h1 class="mb-4 p-4 bg-white shadow-lg rounded-lg overflow-hidden text-4xl font-bold text-gray-600"> 
            {{$post->name}}
        </h1>

        {{-- <div class="text-lg text-gray-500 mb-2"> --}}
        <div class="mb-4 p-4 bg-white shadow-lg rounded-lg overflow-hidden">
            {!!$post->extract!!}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-3"> 

            {{-- contenido principal --}}
            <div class="lg:col-span-2">

                <figure> 
                    @isset ($post->image)
                        {{-- <img id="picture" src="{{Storage::url($post->image->url)}}" alt=""> --}}
                        <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
                    @else
                        <img id="picture" class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2015/07/31/11/45/library-869061_960_720.jpg" alt="">
                    @endisset
                    
                </figure>

                

                <div class="text-gray-700 text-base my-4"> 
                    @if ($post->file != null)  
                        <a class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 mt-5 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline"
                                href="{{ Storage::url($post->file->url) }}" target="_blank" rel="noopener noreferrer">Documento</a>
                                                
                    @endif 

                        {{-- <a class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 mt-5 transition duration-500 ease select-none hover:bg-blue-600 focus:outline-none focus:shadow-outline"
                                href="{{route('posts.show', $post)}}" target="_blank" rel="noopener noreferrer">Ver</a> --}}

                </div>

                <div class="mb-4 p-4 bg-white shadow-lg rounded-lg overflow-hidden">
                    {!!$post->body!!}
                </div> 

            </div>

            {{-- contenido relacionado y reciente --}}
            <aside class="ml-6">
                <h1 class="text-2xl font-bold text-gray-600 mb-4"> mas de {{$post->category->name}}</h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4 mt-10">
                            <a class="flex" href="{{route('posts.show', $similar)}}">
                                @isset ($similar->image)
                                    {{-- <img id="picture" src="{{Storage::url($post->image->url)}}" alt=""> --}}
                                    {{-- <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt=""> --}}
                                    <img class="w-36 h-20 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">
                                @else
                                    <img id="picture" class="w-36 h-20 object-cover object-center" src="https://cdn.pixabay.com/photo/2015/07/31/11/45/library-869061_960_720.jpg" alt="">
                                @endisset

                                <span class="ml-2 text-gray-600"> {{$similar->name}} <br> &bull;  Reciente {{$post->updated_at}}</span>
                            </a>
                        </li> 
                    @endforeach
                </ul>
            </aside>
 
        </div>

    </div>

</x-app-layout>