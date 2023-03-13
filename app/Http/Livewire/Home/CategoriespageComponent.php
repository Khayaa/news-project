<?php

namespace App\Http\Livewire\Home;

use App\Models\ArticleCategory;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriespageComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $categories =  ArticleCategory::paginate(5);
        return view('livewire.home.categoriespage-component' , ['categories' => $categories])->extends('layouts.base')->section('content');
    }
}
