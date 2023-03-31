<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\Category;
use App\Models\Identity;
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

        Identity::create([
            'name' => 'TenizenCode',
            'logo' => 'logo.png',
            'address' => 'Jl. SMEA 6 Jl. Mayjen Sutoyo, Cawang, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13630',
            'email' => 'tenizencode@gmail.com',
            'phone' => '089653132158',
        ]);
    }
}
