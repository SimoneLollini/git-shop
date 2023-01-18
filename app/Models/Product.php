<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'price', 'description'];

    /**
     * Get all of the posts for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }

    // Simo
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
