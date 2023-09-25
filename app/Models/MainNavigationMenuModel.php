<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainNavigationMenuModel extends Model
{
    use HasFactory;
    // Specify the actual table name

    protected $table = 'navmenumain';
    // Add 'name' to the fillable attributes

    protected $fillable = ['name'];
}
