<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // Relacion uno a muchos inverasa

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Ralacion muchos a muchos

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //rELACION UNO A UNO POLIMORFICA
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }

}
