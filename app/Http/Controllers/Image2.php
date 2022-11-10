<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class Image2 extends Controller
{
    //
    public function image(Request $req) {
        $data1 = $_FILES['image']['name'];
        $data2 = $_FILES['image']['type'];
        $data3 = file_get_contents($_FILES['image']['tmp_name']);
        $data4 = $_FILES['image']['size'];

        Image::create([
            'name'=>$data1,
            'type'=>$data2,
            'content'=>$data3,
            'size'=>$data4,
            'created_at'=>date('Y-m-d H:i:s'),
            // 'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        return view('image3');
        // echo $data1.'<br>'.$data2.'<br>'.$data3.'<br>'.$data4;
        // return view('image',compact('data1'));
    }
}
