<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' , 'slug'
    ];

    public function subcategories()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function articles()
    {
        return $this->hasManyThrough(NewsArticles::class, Subcategory::class);
    }
}
