<?php

namespace App\Http\Livewire\Article;

use App\Models\SubCategory;
use Livewire\Component;

class SubCategoryComponent extends Component
{
    public $subcategories;
    public function render()
    {
        return view('livewire.article.sub-category-component')->extends('layouts.base')->section('content');
    }

    public function mount($category_slug , $subcategory_slug){
        $this->subcategories  =  SubCategory::where('slug' , $subcategory_slug )->first();

    }
}
