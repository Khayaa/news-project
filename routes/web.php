<?php

use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Admin\AdminEditArtcles;
use App\Http\Livewire\Admin\AdminLoginComponent;
use App\Http\Livewire\Admin\AdminRegisterComponent;
use App\Http\Livewire\Admin\AdminShowArtcles;
use App\Http\Livewire\Article\ShowArticleComponent;
use App\Http\Livewire\Home\AboutpageComponent;
use App\Http\Livewire\Home\ArticlespageComponent;
use App\Http\Livewire\Home\CategoriespageComponent;
use App\Http\Livewire\Home\ContactpageComponent;
use App\Http\Livewire\Home\HomeComponent;
use App\Http\Livewire\User\CreateArticle;
use App\Http\Livewire\User\CreateCategory;
use App\Http\Livewire\User\CreateSubCategory;
use App\Http\Livewire\User\EditArticle;
use App\Http\Livewire\User\EditCategory;
use App\Http\Livewire\User\EditSubCategory;
use App\Http\Livewire\User\UserArticles;
use App\Http\Livewire\User\UserDashboard;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/' , HomeComponent::class)->name('home');
Route::get('/articles' , ArticlespageComponent::class)->name('articles');
Route::get('/article/{slug}' , ShowArticleComponent::class)->name('article.show');
Route::get('/categories' , CategoriespageComponent::class)->name('categories');
Route::get('/about' , AboutpageComponent::class)->name('about');
Route::get('/contact' , ContactpageComponent::class)->name('contact');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', UserDashboard::class )->name('dashboard');
    Route::get('/articles', UserArticles::class )->name('articles');
    Route::get('/articles/create', CreateArticle::class )->name('articles.create');
    Route::get('/article/{id}/edit', EditArticle::class )->name('article.edit');
    Route::get('/category/{id}/edit', EditCategory::class )->name('category.edit');
    Route::get('/sub-category/{id}/edit', EditSubCategory::class )->name('sub-category.edit');
    Route::get('/category/create', CreateCategory::class )->name('category.create');
    Route::get('/sub-category/create', CreateSubCategory::class )->name('sub-category.create');



});

Route::name('admin.')->prefix('admin')->group(function (){
    Route::get('/login' ,  AdminLoginComponent::class)->name('login');
    Route::get('/register' ,  AdminRegisterComponent::class)->name('register');
    Route::middleware(['is_approved' ,'auth:admin'])->group(function(){
        Route::get('/dashboard' , AdminDashboard::class)->name('dashboard');
        Route::get('/articles' , AdminShowArtcles::class)->name('articles');
        Route::get('/article/{id}/edit' , AdminEditArtcles::class)->name('edit.articles');

    });

});

