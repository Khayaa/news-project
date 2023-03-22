<?php

namespace App\Http\Livewire\User;

use App\Models\ArticleCategory;
use Livewire\Component;
use Livewire\WithPagination;

class UserArticleCategory extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {


        $categories =  ArticleCategory::paginate(5);
        return view('livewire.user.user-article-category' , ['categories' => $categories])->layout('layouts.user-layout');
    }
}
