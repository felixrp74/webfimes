<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search = '';

    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {
        $users = User::paginate();
        // return view('livewire.admin.users-index');

        // filtrar publicaciones por id
        // $users = Post::where('user_id', auth()->user()->id)
        $users = User::where('name', 'LIKE', '%'. $this->search .'%')
                ->orWhere('email', 'LIKE', '%'. $this->search .'%')
                ->orWhere('escuela', 'LIKE', '%'. $this->search .'%')
                ->latest('created_at') 
                ->paginate();

        return view('livewire.admin.users-index', compact('users'));
    }
}
