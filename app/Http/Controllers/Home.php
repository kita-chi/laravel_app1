<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Like;


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

       
    
       return view('home',compact('datas'));
        
    }
}
