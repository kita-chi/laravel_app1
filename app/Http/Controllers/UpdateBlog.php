<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class UpdateBlog extends Controller
{
    //
    public function updateblog(Request $req) {
        $data1 = $req -> input('title');
        $data2 = $req -> input('content');
        $data4 = nl2br($data2);

        $data3 = $req -> input('id');
        $data = Blog::find($data3);
        $data->title=$data1;
        $data->content=$data4;
        $data->save();
        return redirect('/');
    }
}
