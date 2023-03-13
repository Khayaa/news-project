<?php

namespace App\Http\Livewire\User;

use App\Models\SubCategory;
use Livewire\Component;

class CreateArticle extends Component
{
    public function render()
    {
        $subcategories =  SubCategory::all();
        return view('livewire.user.create-article' ,  ['subcategories' => $subcategories])->layout('layouts.user-layout');
    }
}
