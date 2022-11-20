<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;

class Liked extends Controller
{
    //
    public function like1(Request $req){
        $blogid = $req -> id;

        $data = Like::where('user_id','=',session('id'))
        ->where('blog_id','=',$blogid)->first();

        if ($data == null) {
            $like = new Like();
            $like->user_id = session('id');
            $like->blog_id = $blogid;
            $like->created_at = date('Y-m-d H:i:s');
            $like->updated_at = date('Y-m-d H:i:s');
            $like->save();
            // $likeCheck = true;
        } else {
            $data->delete();
            // $likeCheck = false;
        }
    }

    // public function likedCheck($num){

    //     return $liked = Like::where('user_id','=',session('id'))
    //     ->where('blog_id','=',$num)->first() != null;

    // }
    

}
