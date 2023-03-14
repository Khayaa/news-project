<?php

namespace App\Http\Livewire\User;

use App\Models\NewsArticles;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;


class EditArticle extends Component
{
    use WithFileUploads;
    public  NewsArticles $article;
    public $article_image;
    protected $rules = [
        'article.title'=>'required' ,
        'article.slug' =>'required',
        'article.content'=>'required',
        'article.subcategory_id'=>'required' ,
        'article_image'=> ['image','required']
    ];
    public function render()
    {
        $subcategories = SubCategory::all();
        return view('livewire.user.edit-article', ['subcategories' => $subcategories])->layout('layouts.user-layout');
    }
    public function mount(NewsArticles $id){
        $this->article = $id ;

    }
    public function update()
    {
        $this->validate();
        $slug =str_replace(' ','-',$this->article['title']);
        $this->article['slug'] = $slug;
        $file = $this->article_image->storePubliclyAs('articles', $this->article['slug'] . '.' . $this->article_image->getClientOriginalExtension(), 'public');
        $this->article->update([
        'user_id' => Auth::user()->id,
        'title'=>$this->article['title'] ,
        'slug' => $this->article['slug'],
        'content'=> $this->article['content'],
        'subcategory_id'=> $this->article['subcategory_id'] ,
        'article_image'=>$file
        ]);
        toastr()->success('Article has been updated successfully!', 'Success');
        return redirect()->to('user/articles');
    }

    // public function updatedarticle_title($value){
    //     $slug =str_replace(' ','-',$value);
    //     $this->article['slug'] = $slug;
    // }
}
