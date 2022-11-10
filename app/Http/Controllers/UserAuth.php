<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Gate;

class UserAuth extends Controller
{
    //
    public function login(Request $req) {
        $data1 = $req -> input('name');
        $data2 = $req -> input('email');
        $data3 = $req -> input('password');
        $data = User::where('name',$data1)
            ->where('email',$data2)
            ->where('password',$data3)->first();
        if ($data) {
            $req->session()->put('id',$data['id']);
            $req->session()->put('name',$data['name']);
            $req->session()->put('role',$data['role']);
            return redirect('/');
        } else {
            return redirect('error_login');
        }
        // return session('id');
        // return view('log-check2',['$data'=>$data]);
    }
}
