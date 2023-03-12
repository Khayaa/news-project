<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class AboutpageComponent extends Component
{
    public function render()
    {
        return view('livewire.home.aboutpage-component')->extends('layouts.base')->section('content');
    }
}
