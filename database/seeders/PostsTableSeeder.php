<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
{
    factory(Post::class, 10)->create();
}
}
