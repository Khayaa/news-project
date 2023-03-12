<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class ContactpageComponent extends Component
{
    public function render()
    {
        return view('livewire.home.contactpage-component')->extends('layouts.base')->section('content');
    }
}
