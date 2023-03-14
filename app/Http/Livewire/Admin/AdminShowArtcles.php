<?php

namespace App\Http\Livewire\Admin;

use App\Models\NewsArticles;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class AdminShowArtcles extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $articles  =  NewsArticles::paginate(5);
        return view('livewire.admin.admin-show-artcles' , ['articles' => $articles])->layout('layouts.admin-layout');
    }
    public function Approve($id){
        $article =  NewsArticles::find($id);
        $article->status = "approved";
        $article->save();
        toastr()->success('Article has been Approved', 'Success');
    }

    public function Disapprove($id){
        $article =  NewsArticles::find($id);
        $article->status = "disapproved";
        $article->save();
        toastr()->success('Article has been disapproved', 'Success');
    }


    public function delete($id){
        $article =  NewsArticles::find($id);
        //Storage::disk('public')->delete($article->file);
        $article->delete();

        toastr()->success('Article has been deleted successfully!', 'Success');
    }
}
