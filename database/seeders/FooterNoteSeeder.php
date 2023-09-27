<?php

namespace Database\Seeders;
use App\Models\FooterNote;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FooterNote::factory(1)->create();

        
    }
}
