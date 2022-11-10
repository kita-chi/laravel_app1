<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class Edit extends Controller
{
    //
    public function edit(Request $req) {
        $data = Blog::find($req->input('id'));
        return view('edit2',compact('data'));
    }
}
