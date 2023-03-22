<?php

namespace App\Http\Livewire\User;

use App\Models\ArticleCategory;
use Livewire\Component;

class EditCategory extends Component
{
    public ArticleCategory $category;
    protected $rules = [
        'category.name' => 'required' ,
        'category.slug' => 'required'
    ];

    public function Changeslug(){
        $slug =str_replace(' ','-',$this->category['name']);
        $this->category['slug'] = $slug;
    }

    public function mount(ArticleCategory $id){
        $this->category = $id;
    }

    public function update(){
       $category =  $this->validate();
       $this->category->update($category);
       toastr()->success('Article Category has been updated', 'Success');
       return redirect()->route('user.categories');

    }
    public function render()
    {
        return view('livewire.user.edit-category')->layout('layouts.user-layout');

    }
}
