<?php

namespace App\Http\Livewire\User;

use App\Models\ArticleCategory;
use App\Models\SubCategory;
use Livewire\Component;

class EditSubCategory extends Component
{
    public SubCategory $subcategory;
    protected $rules = [
        'subcategory.name' => 'required' ,
        'subcategory.slug' => 'required',
        'subcategory.category_id' => 'required'
    ];

    public function Changeslug(){
        $slug =str_replace(' ','-',$this->subcategory['name']);
        $this->subcategory['slug'] = $slug;
    }

    public function mount(SubCategory $id){
        $this->subcategory = $id;
    }

    public function update(){
       $subcategory =  $this->validate();
       $this->subcategory->update($subcategory);
       toastr()->success('Article Sub Category has been updated', 'Success');
       return redirect()->route('user.sub-categories');

    }
    public function render()
    {
        $categories =  ArticleCategory::all();
        return view('livewire.user.edit-sub-category' , ['categories' => $categories])->layout('layouts.user-layout');

    }
}
