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
            'name' => 'Salesman Report',
            'image' => 'https://i.ibb.co/J24LwfJ/Biru-Elemen-Mockup-Isometrik-Teknologi-dalam-Pendidikan-Presentasi-Teknologi-1-1.png',
            'url' => 'http://103.247.219.37:9009',
            'category_id' => 1,
            'type' => 'Web',
            'year' => '2022',
            'description' => 'Admin dashboard for Salesman Report',
            'created_by' => 'Dwi Arya Putra'
        ]);

        // Application::create([
        //     'name' => 'Call Visit',
        //     'image' => 'https://www.kangarooselfstorage.co.uk/wp-content/uploads/2018/12/Business-Storage-Archive-Storage-1.jpg',
        //     'url' => 'http://103.247.219.37:9009',
        //     'category_id' => 1,
        //     'type' => 'Web',
        //     'year' => '2022',
        //     'description' => 'Web ini dibuat menggunakan laravel, database MYSQL',
        //     'created_by' => 'Dwi Arya Putra'
        // ]);
        // Application::create([
        //     'name' => 'Kas',
        //     'image' => 'https://www.kangarooselfstorage.co.uk/wp-content/uploads/2018/12/Business-Storage-Archive-Storage-1.jpg',
        //     'url' => 'http://103.247.219.37:9011',
        //     'category_id' => 1,
        //     'type' => 'Web',
        //     'year' => '2022',
        //     'description' => 'Web ini dibuat menggunakan laravel, database MYSQL',
        //     'created_by' => 'Ezhar Mahesa'
        // ]);
    }
}
