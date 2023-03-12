<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class ArticlespageComponent extends Component
{
    public function render()
    {
        return view('livewire.home.articlespage-component')->extends('layouts.base')->section('content');
    }
}
