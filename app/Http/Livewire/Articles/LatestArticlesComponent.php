<?php

namespace App\Http\Livewire\Articles;

use App\Models\NewsArticles;
use Livewire\Component;
use Livewire\WithPagination;

class LatestArticlesComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public function render()
    {

        $articles  =  NewsArticles::latest()->where('status' , 'approved')->paginate('6');
        return view('livewire.articles.latest-articles-component', ['articles' => $articles])->extends('layouts.base')->section('content');
    }
}
