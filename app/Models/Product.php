<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'price', 'description'];

    // Diego da qui













    //fino a qui
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
