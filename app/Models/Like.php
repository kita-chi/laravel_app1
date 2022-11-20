<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;

class Like extends Model
{
    use HasFactory;


    public function likedCheck($num) {
        return $data = Like::where('user_id','=',session('id'))
            ->where('blog_id','=',$num)
            ->first() != null;
    }
}
