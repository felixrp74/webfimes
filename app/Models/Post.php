<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use 

class Post extends Model
{
    use HasFactory;

    // <$guarded>: asignacion masiva de campos que queremos evitar 
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    // relacion muchos a muchos
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    // relacinon uno a uno polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
    
    // relacinon uno a uno polimorfica
    public function file(){
        return $this->morphOne(File::class, 'fileable');
    }
}
