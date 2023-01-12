<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // non mi piace questo lavoro HELP ME
    protected $fillable = ['title', 'description', 'price'];
}
