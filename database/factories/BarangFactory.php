<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Barang;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang'=>$this->faker->sentence(),
            'stok_barang'=>$this->faker->sentence(),
            'harga_barang'=>$this->faker->sentence(),
            'detail_barang'=>$this->faker->sentence(),
        ];
    }
}
