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

    public function approve(){
        $this->article->update([
            'status' => 'approved'
        ]);
        toastr()->success('Article has been Approved', 'Success');
    }
    public function disapprove(){
        $this->article->update([
            'status' => 'disapproved'
        ]);
        toastr()->success('Article has been Disapproved', 'Success');
    }
    public function mount(NewsArticles $id){
        $this->article =  $id;

    }
}
