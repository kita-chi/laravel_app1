<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class DeleteBlog extends Controller
{
    //
    public function delete(Request $req) {
        $data1 = $req->input('id');
        $data=Blog::find($data1);
        $data->delete();
        return redirect('/');
    }

    public function delete2(Request $req) {
        $data1 = $req->input('id');
        $data=Blog::find($data1);
        $data->delete();
        return redirect('/show/'.session('id'));        
    }

    public function delete3(Request $req) {
        $data1 = $req -> input('id');
        $data = Blog::find($data1);
        $data->delete();
        return redirect('/admin2/'.$data['user_id']);
    }

}

