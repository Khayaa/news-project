<?php

namespace App\Http\Livewire\User;

use App\Models\SubCategory;
use Livewire\WithPagination;

use Livewire\Component;

class UserSubCategory extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $subcategories =  SubCategory::paginate(5);
        return view('livewire.user.user-sub-category' , ['subcategories' => $subcategories])->layout('layouts.user-layout');
    }
}
