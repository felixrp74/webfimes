<x-app-layout>
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="uppercase text-center text-3xl font-bold" >Etiqueta {{$tag->name}}</h1>
        {{-- <div class="flex bg-white shadow-2xl rounded-lg"> --}}
            @foreach ($posts as $post)
                <x-card-post :post = '$post'/>
            @endforeach

            <div class="mt-4">
                {{$posts->link()}}
            </div>
        {{-- </div> --}}
    </div>
</x-app-layout>

