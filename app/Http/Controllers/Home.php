<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Like;
use Illuminate\Database\Eloquent\Model;



// use Illuminate\Support\Facades\Gate;

class Home extends Controller
{
    //

    public function home() {
       
       $datas=DB::table('users')
       ->Join('blogs','users.id','=','blogs.user_id')
       ->select('users.id as userid', 'blogs.id as blogid', 'blogs.title', 'blogs.content', 'users.name', 'blogs.updated_at as updated_at')
       ->orderBy('blogs.updated_at','desc')
       ->get();

       $likes=Like::where('user_id',session('id'))
       ->get();

       $liked=array();
       for ($i=0; $i<count($likes); $i++) {
         array_push($liked,$likes[$i]["blog_id"]);
       }
      //  $liked=$this->likedCheck($datas);

      //   if ($data == null) {
      //       $like = new Like();
      //       $like->user_id = session('id');
      //       $like->blog_id = $blogid;
      //       $like->created_at = date('Y-m-d H:i:s');
      //       $like->updated_at = date('Y-m-d H:i:s');
      //       $liked = $like->likedCheck($blogid);

      //       $like->save();
      //       // $likeCheck = true;
      //   } else {
      //       $data->delete();
      //       // $likeCheck = false;
      //   }
    
       return view('home',compact('datas','liked'));
        
    }
}
