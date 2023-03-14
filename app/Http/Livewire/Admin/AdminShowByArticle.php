<?php

namespace App\Http\Livewire\Admin;

use App\Models\NewsArticles;
use Livewire\Component;

class AdminShowByArticle extends Component
{
    public NewsArticles $article;
    public function render()
    {
        return view('livewire.admin.admin-show-by-article')->layout('layouts.admin-layout');
    }
    public function mount(NewsArticles $id){
        $this->article =  $id;

    }
}
