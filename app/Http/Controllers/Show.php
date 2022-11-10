<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;

class Show extends Controller
{
    //
    public function show($id) {
        $data1 = User::find($id);
        $data2 = Blog::where('user_id','=',$id)->get();
        return view('show',compact('data1'),compact('data2'));
    }
}
