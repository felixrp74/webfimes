<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;

use App\Http\Requests\PostRequest;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $categories = Category::pluck( 'name', 'id' );
        $tags = Tag::all();        
        $user = auth()->user(); 

        return view('admin.posts.create', compact('categories', 'tags', 'user'));
        // return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        // return $request;

        $post = Post::create($request->all());
        $user = auth()->user(); 


        if($request->file('golosa')){

            $url = Storage::put('posts', $request->file('golosa'));
            $post->image()->create([
                'url' => $url
            ]);
             
        } 
        
        if($request->file('documento')){

            $url = Storage::put('files', $request->file('documento'));
            // $post->file()->create
            $post->file()->create([
                'url' => $url
            ]);
             
        } 
        
        if($request->tags){
            $post->tags()->attach($request->tags);
        }
        
        // return redirect()->route('admin.posts.edit', $post);
        return $this->index();
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('author', $post);

        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();
        $user = auth()->user();

        return view('admin.posts.edit', compact('post', 'categories', 'tags', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {

        // return $request;
        $post->update($request->all());

        if($request->file('golosa')){
            $url = Storage::put('posts', $request->file('golosa'));

            if($post->image){
                Storage::delete($post->image->url);

                $post->image->update([
                    'url' => $url
                ]);
 
            }else{
                $post->image()->create([
                    'url' => $url
                ]);
            }
        }

        if($request->file('documento')){
            $url = Storage::put('files', $request->file('documento'));

            if($post->file){
                Storage::delete($post->file->url);

                $post->file->update([
                    'url' => $url
                ]);

            }else{
                $post->file()->create([
                    'url' => $url
                ]);
            }
        }

        if($request->tags){
            $post->tags()->sync($request->tags);
        }

        // return redirect()->route('admin.posts.edit', $post)->with('info', 'Actualizado con exito');
        return $this->index();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        // se elimina las fotos de la carpeta desde los OBSERVADORES
        return redirect()->route('admin.posts.index')->with('info','Eliminado exito');
    }
}
