<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function author(User $user, Post $post){
        if($user->id == $post->user->id){
            return true;
        }else{
            return false;
        }
    }

    // el signo '?' es para que el parametro sea opcional, 
    // las policies no permiten eliminar el parametro User, mas si ser opcional 
    public function published(?User $user, Post $post){
        if($user->status == 2){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
