<?php

namespace App\Http\Livewire\User;

use App\Models\NewsArticles;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UserArticles extends Component
{
    use WithPagination;
    
    public function render()
    {

        $my_articles = NewsArticles::where('user_id' ,  Auth::user()->id)->paginate(5);
        return view('livewire.user.user-articles' , ['my_articles' => $my_articles])->layout('layouts.user-layout');
    }
}
