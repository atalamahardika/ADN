<?php

namespace Database\Seeders;

use App\Models\PublikasiMandiri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublikasiMandiriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Log::info('Seeding publikasi mandiri...');
        PublikasiMandiri::factory()->count(100)->create();
    }
}
