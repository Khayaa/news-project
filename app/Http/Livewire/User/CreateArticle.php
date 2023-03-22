<?php

namespace App\Http\Livewire\User;

use App\Models\Admin;
use App\Models\NewsArticles;
use App\Models\SubCategory;
use App\Notifications\NewArticleAlert;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification as FacadesNotification;
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
        $at = NewsArticles::create([
        'user_id' => Auth::user()->id,
        'title'=>$this->title ,
        'slug' => $this->slug,
        'content'=> $this->content,
        'subcategory_id'=> $this->subcategory_id ,
        'article_image'=>$file
        ]);
        $admin =  Admin::where('id', 1)->first();
        $details = [
            'name' => Auth::user()->name ,
            'article_id' => $at->id ,
            'article_title'=> $at->title
        ];
        FacadesNotification::send( $admin ,new NewArticleAlert($details));
        toastr()->success('Article has been created successfully!', 'Success');
        return redirect()->to('user/articles');
    }

    public function updatedtitle($value){
        $slug =str_replace(' ','-',$value);
        $this->slug = $slug;
    }
}
