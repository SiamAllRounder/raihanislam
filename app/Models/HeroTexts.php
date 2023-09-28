<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroTexts extends Model
{
    use HasFactory;

    // Specify the actual table name

    protected $table = 'home_page_hero_texts';
    // Add 'name' to the fillable attributes

    protected $fillable = ['home_page_hero_text_description_on_left_column'];
}
