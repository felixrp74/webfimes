<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Post;

use Livewire\WithPagination;

class PostsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        // filtrar publicaciones por id
        $posts = Post::where('user_id', auth()->user()->id)
                ->where('name', 'LIKE', '%'. $this->search .'%')
                ->latest('created_at') 
                ->paginate();

        return view('livewire.admin.posts-index', compact('posts'));
    }
}
  