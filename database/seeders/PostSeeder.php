<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Post::create([
            'user_id'=>rand(1,10),
            'name'=>'manmeet',
            'description'=>'codebrew labs'
        ]);
    }
}
