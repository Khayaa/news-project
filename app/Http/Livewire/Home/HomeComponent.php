<?php

namespace App\Http\Livewire\Home;

use App\Models\NewsArticles;
use Livewire\Component;
use Livewire\WithPagination;

class HomeComponent extends Component
{
     use WithPagination;
     protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $articles  =  NewsArticles::paginate('6');
        return view('livewire.home.home-component' , ['articles' => $articles])->extends('layouts.base')->section('content');
    }
}
