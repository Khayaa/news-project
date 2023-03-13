<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' , 'slug' , 'category_id' ,
    ];

    public function category()
    {
        return $this->belongsTo(ArticleCategory::class );
    }

    public function articles()
    {
        return $this->hasMany(NewsArticles::class ,'subcategory_id');
    }
}
