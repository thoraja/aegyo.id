<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Content\Article;
use Illuminate\Database\Seeder;
use App\Models\Content\Category;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Dummy',
            'email' => 'dummy@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        Category::insert([
            ['name' => 'K-Pop'],
            ['name' => 'K-Drama'],
            ['name' => 'K-Beauty'],
            ['name' => 'Entertainment'],
            ['name' => 'Lifestyle'],
            ['name' => 'Galery'],
            ['name' => 'Quiz'],
        ]);
        Article::factory()->count(20)->create();
    }
}
