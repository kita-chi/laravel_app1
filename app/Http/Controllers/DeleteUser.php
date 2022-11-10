<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DeleteUser extends Controller
{
    //
    public function delete_user(){
        $data = User::find(session('id'));
        session()->flush();
        $data->delete();
        return redirect('/');
    }

    public function delete_user2(Request $req){
        $data1 = $req->input('id');
        $data = User::find($data1);
        $data->delete();
        return redirect('/admin1');

    }
}
