<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsArticles extends Model
{
    use HasFactory;
    protected $fillable = [
        'title' , 'user_id' , 'content' , 'slug'  , 'subcategory_id' , 'article_image','status'
    ];
}
