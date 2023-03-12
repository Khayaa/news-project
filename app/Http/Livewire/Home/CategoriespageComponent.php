<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class CategoriespageComponent extends Component
{
    public function render()
    {
        return view('livewire.home.categoriespage-component')->extends('layouts.base')->section('content');
    }
}
