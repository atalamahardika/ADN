<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Berita;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
     protected $model = Berita::class;
    
     public function definition()
    {
        $judul = $this->faker->sentence(8);
        return [
            'judul' => $judul,
            'slug' => Str::slug($judul),
            'isi' => $this->faker->paragraph,
            'gambar' => '1582345286151-IMG-20200222-WA0016_detail.png', // atau bisa kosong/null kalau nullable
            'sumber' => $this->faker->sentence(3),
        ];
    }
}
