<?php

namespace Database\Seeders;

use App\Models\HeroTexts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeroTexts::factory(1)->create();
    }
}
