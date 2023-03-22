<?php

namespace App\Http\Livewire\User;

use App\Models\ArticleCategory;
use App\Models\SubCategory;
use Livewire\Component;

class CreateSubCategory extends Component
{
    public $name , $slug , $category_id ;
    protected $rules = [
        'name' => 'required' ,
        'slug' => 'required' ,
        'category_id' =>  'required' ,
    ];
    public function updatedname($value){
        $slug =str_replace(' ','-',$value);
        $this->slug = $slug;
    }

    public function create(){
       $subcategory =  $this->validate();
       SubCategory::create($subcategory);
       toastr()->success('Article Sub Category has been created successfully!', 'Success');
       return redirect()->route('user.sub-categories');
    }
    public function render()
    {
        $categories =  ArticleCategory::all();
        return view('livewire.user.create-sub-category' , ['categories' => $categories])->layout('layouts.user-layout');
    }
}
