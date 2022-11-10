<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;

class Admin extends Controller
{
    //
    public function admin1() {
        $datas = User::all();
        return view('admin1',compact('datas'));
        
    }

    public function admin2($id) {
        $data1 = User::where('id','=',$id)->first();
        $datas = Blog::where('user_id','=',$id)->get();
        return view('admin2',compact('datas'),compact('data1'));
    }
}
