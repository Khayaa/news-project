<?php

namespace App\Http\Livewire\User;

use App\Models\NewsArticles;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateArticle extends Component
{
    use WithFileUploads;
    public $title , $content , $slug  , $subcategory_id , $article_image;
    protected $rules = [
        'title'=>'required' ,
        'slug' =>'required',
        'content'=>'required',
        'subcategory_id'=>'required' ,
        'article_image'=>'required'
    ];
    public function render()
    {
        $subcategories = SubCategory::all();
        return view('livewire.user.create-article', ['subcategories' => $subcategories])->layout('layouts.user-layout');
    }
    public function create()
    {
        $this->validate();

        $file = $this->article_image->storePubliclyAs('articles', $this->slug . '.' . $this->article_image->getClientOriginalExtension(), 'public');
        NewsArticles::create([
        'user_id' => Auth::user()->id,
        'title'=>$this->title ,
        'slug' => $this->slug,
        'content'=> $this->content,
        'subcategory_id'=> $this->subcategory_id ,
        'article_image'=>$file
        ]);
        toastr()->success('Article has been created successfully!', 'Success');
        return redirect()->to('user/articles');
    }

    public function updatedtitle($value){
        $slug =str_replace(' ','-',$value);
        $this->slug = $slug;
    }
}
