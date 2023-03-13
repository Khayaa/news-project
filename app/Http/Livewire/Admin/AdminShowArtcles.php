<?php

namespace App\Http\Livewire\Admin;

use App\Models\NewsArticles;
use Livewire\Component;

class AdminShowArtcles extends Component
{
    public function render()
    {
        $articles  =  NewsArticles::paginate(5);
        return view('livewire.admin.admin-show-artcles' , ['articles' => $articles])->layout('layouts.admin-layout');
    }
}
