<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
  

class PostController extends Controller
{
    public function index(){

        $categories = Category::all();
 
        $posts = Post::where('status', 2)->latest("id")-> paginate(4);
        return view('posts.index', compact('posts', 'categories'));
    }
 
    public function show(Post $post){
        // return $post;
        $similares = Post::where('category_id', $post->category_id)
                            ->where('status', 2)
                            ->where('id', '!=', $post->id)
                            ->latest('id')
                            ->take(4)
                            ->get();
                            
        return view('posts.show', compact('post','similares'));
    }
 













    public function category(Category $category){

        $posts = Post::where('category_id', $category->id)
                    ->where('status', 2)
                    ->latest('id')
                    ->paginate(4);

        // return $posts;
        // return $category;

        return view('posts.category', compact('posts', 'category'));
    }














    public function tag(Tag $tag){
        $posts = $tag->posts->where('status', 2 )->latest('id')->paginate(3)->get();

        return view('posts.tag', compact('posts', 'tag'));
    }
 
    public function inicio(){
        $posts = Post::where('status', 2)->latest("id")-> paginate(4);
        return view('mecanica.inicio', compact('posts'));
    }
    
    public function electronica(){
        $posts = Post::where('status', 2)->latest("id")-> paginate(4);
        return view('electronica.inicio', compact('posts'));
    }

    public function sistemas(){
        $posts = Post::where('status', 2)->latest("id")-> paginate(4);
        return view('sistemas.inicio', compact('posts'));
    }

    public function general(){
        $posts = Post::where('status', 2)->latest("id")-> paginate(4);
        return view('general.inicio', compact('posts'));
    
    }






    public function responsable(){
        return view('responsable.inicio');
    }

}
