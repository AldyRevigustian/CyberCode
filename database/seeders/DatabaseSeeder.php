<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'name' => 'Admin',
        ]);

        Category::create(['name' => 'Tools']);
        Category::create(['name' => 'Social']);
        Category::create(['name' => 'Comunication']);
        Category::create(['name' => 'Education']);
        Category::create(['name' => 'Entertainment']);

        Application::create([
            'name' => 'Call Visit',
            'image' => 'https://www.kangarooselfstorage.co.uk/wp-content/uploads/2018/12/Business-Storage-Archive-Storage-1.jpg',
            'url' => 'https://www.kangarooselfstorage.co.uk/wp-content/uploads/2018/12/Business-Storage-Archive-Storage-1.jpg',
            'category_id' => 1,
            'type' => 'Mobile',
            'year' => '2022'
        ]);
    }
}
