<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Produk;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(3)->create();
        User::factory(3)->create();
        Produk::factory(10)->create();

        Category::create([
            'nama' => 'Men'
        ]);
        Category::create([
            'nama' => 'Women'
        ]);

        Admin::create([
            'username' => "hanyaadmin",
            'password' => bcrypt("hanyaadmin"),
        ]);
    }
}
