<?php

namespace App\Http\Livewire\User;

use App\Models\ArticleCategory;
use Livewire\Component;

class CreateCategory extends Component
{
    public $name , $slug ;
    protected $rules = [
        'name' => 'required' ,
        'slug' => 'required'
    ];

    public function updatedname($value){
        $slug =str_replace(' ','-',$value);
        $this->slug = $slug;
    }

    public function create(){
       $category =  $this->validate();
       ArticleCategory::create($category);
       toastr()->success('Article Category has been created successfully!', 'Success');
       return redirect()->route('user.categories');

    }
    public function render()
    {
        return view('livewire.user.create-category')->layout('layouts.user-layout');
    }
}
