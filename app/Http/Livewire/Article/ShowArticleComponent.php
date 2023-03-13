<?php

namespace App\Http\Livewire\Article;

use App\Models\NewsArticles;
use Livewire\Component;

class ShowArticleComponent extends Component
{
    public $article ;
    public function render()
    {
        return view('livewire.article.show-article-component')->extends('layouts.base')->section('content');
    }
    public function mount($slug){
        $this->article =  NewsArticles::where('slug' ,  $slug)->get();
    }
}
