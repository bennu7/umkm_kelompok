<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nama" => $this->faker->name(),
            "category_id" => mt_rand(1, 2),
            "slug" => $this->faker->slug(),
            "deskripsi" =>  $this->faker->paragraph(),
            "harga" => mt_rand(150000, 175000),
            "photo" => "gambar3.png",
        ];
    }
}
