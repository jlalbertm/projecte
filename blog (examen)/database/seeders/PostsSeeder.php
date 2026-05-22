<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    User::factory()->count(5)->create()->each(function($user) {
        $post = Post::factory()->count(10)->create([ 'user_id' => $user->id ]);
    });
    }
}
