@props(['post'])

{{-- <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2  @endif" 
    style="background-image: url({{Storage::url($post->image->url)}})"> --}}
{{-- <article class="w-full h-80 bg-cover bg-center " 
        style="background-image: url({{Storage::url($post->image->url)}})"> --}}

<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">

    @if ($post->image)
        <img class="w-full h-72 object-cover -object-center" src="{{Storage::url($post->image->url)}}" alt="">
    @else
        <img class="w-full h-72 object-cover -object-center" src="https://cdn.pixabay.com/photo/2015/07/31/11/45/library-869061_960_720.jpg" alt="">
    @endif
 
    <div class="w-full h-full px-8 flex flex-col justify-center">
        <div class="px-6 pt-4 pb-2">
            @foreach ($post->tags as $tag)
            <a href="{{route('posts.tag', $tag)}}" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">
                {{$tag->name}}
            </a>
            @endforeach 
        </div>
        <h1 class="text-4xl text-white loading-8 font-bold">
            <a href="{{route('posts.show', $post)}}">
                {!!$post->name!!} 
            </a>
            
        </h1>
    </div>
    
</article>