<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class Post extends Controller
{
    //
    public function post(Request $req) {
        $data1 = $req->input('title');
        $data2 = $req->input('content');
        $data3 = session('id');

        $data4 = nl2br($data2);
        Blog::create([
            'title'=>$data1,
            'content'=>$data4,
            'user_id'=>$data3,
        ]);
        return redirect('/');
    }
}
