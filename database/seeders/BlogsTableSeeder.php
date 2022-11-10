<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('blogs')->insert([
            'title'=>'Hello',
            'content'=>"Hello I'm taro, Nice to meet you!! ",
            'user_id'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')

        ]);

        DB::table('blogs')->insert([
            'title'=>"first posting",
            'content'=>"This is my first posting. I like sushi",
            'user_id'=>'2',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')

        ]);
    }
}
