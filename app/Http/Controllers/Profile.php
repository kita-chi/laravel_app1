<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Profile extends Controller
{
    //
    public function profile($id) {
        $user = User::findorfail($id);
        return view('profile',compact('user'));
    }

    public function update(Request $req) {
        $data1 = $req -> input('name');
        $data2 = $req -> input('email');
        $data3 = $req -> input('pass1');
        $data4 = $req -> input('pass2');
        $id=session('id');

        if ($data3 == $data4) {
            $data = User::find($id);
            $data->name=$data1;
            $data->email=$data2;
            $data->password=$data3;
            $data->save();

            $req->session()->flush();
            $req->session()->put('id',$data['id']);
            $req->session()->put('name',$data['name']);
            return redirect('/show/'.$id);
        } elseif ($data3 != $data4) {
            return redirect('/profile/'.$id);
        }

    }
}
