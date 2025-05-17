<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PublikasiMandiri;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PublikasiMandiri>
 */
class PublikasiMandiriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = PublikasiMandiri::class;

    public function definition(): array
    {
        $lastName = $this->faker->lastName();
        $initial = strtoupper($this->faker->randomLetter());

        return [
            'judul' => $this->faker->sentence(6),
            'peneliti' => $lastName . ', ' . $initial . '.', // Harvard format
            'tahun' => $this->faker->year(),
            'ruang_lingkup' => $this->faker->randomElement(['Sosial', 'Teknologi', 'Ekonomi', 'Pendidikan']),
            'link' => $this->faker->url(),
            'volume' => $this->faker->numberBetween(1, 10),
            'nomor' => $this->faker->numberBetween(1, 4),
            'halaman' => $this->faker->numberBetween(100, 200) . '-' . $this->faker->numberBetween(201, 300),
        ];
    }
}
