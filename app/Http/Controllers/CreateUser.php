<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CreateUser extends Controller
{
    //
    public function create_user(Request $req) {
        $data1 = $req -> input('name');
        $data2 = $req -> input('email');
        $data3 = $req -> input('pass1');
        $data4 = $req -> input('pass2');
        if ($data3 == $data4) {
            User::create([
                'name'=>$data1,
                'email'=>$data2,
                'password'=>$data3,
                'created_at'=>date('Y-m-d H:i:s')
            ]);
            $data = User::where('name',$data1)
                ->where('email',$data2)
                ->where('password',$data3)->first();
            $req->session()->put('id',$data['id']);
            $req->session()->put('name',$data['name']);
            return redirect('/');
        } else {
            return view('error');
        }
    }
}
