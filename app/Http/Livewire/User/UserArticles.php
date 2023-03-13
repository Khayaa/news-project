<?php

namespace App\Http\Livewire\User;

use App\Models\NewsArticles;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserArticles extends Component
{
    public function render()
    {
        $my_articles = NewsArticles::where('user_id' ,  Auth::user()->id)->paginate(5);
        return view('livewire.user.user-articles' , ['my_articles' => $my_articles])->layout('layouts.user-layout');
    }
}
