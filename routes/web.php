<?php

use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Admin\AdminEditArtcles;
use App\Http\Livewire\Admin\AdminLoginComponent;
use App\Http\Livewire\Admin\AdminRegisterComponent;
use App\Http\Livewire\Admin\AdminShowArtcles;
use App\Http\Livewire\Article\ShowArticleComponent;
use App\Http\Livewire\Article\SubCategoryComponent;
use App\Http\Livewire\Articles\LatestArticlesComponent;
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
use App\Http\Livewire\User\UserArticleCategory;
use App\Http\Livewire\User\UserArticles;
use App\Http\Livewire\User\UserDashboard;
use App\Http\Livewire\User\UserSubCategory;
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
Route::get('/articles/latest' , LatestArticlesComponent::class)->name('latest');
Route::get('/categories' , CategoriespageComponent::class)->name('categories');
Route::get('/categories/{category_slug}/{subcategory_slug}' , SubCategoryComponent::class)->name('subcategories.show');
Route::get('/about' , AboutpageComponent::class)->name('about');
Route::get('/contact' , ContactpageComponent::class)->name('contact');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', UserDashboard::class )->name('dashboard');
    Route::get('/user/articles', UserArticles::class )->name('user.articles');
    Route::get('/user/categories', UserArticleCategory::class )->name('user.categories');
    Route::get('/user/sub-categories', UserSubCategory::class )->name('user.sub-categories');
    Route::get('/user/articles/create', CreateArticle::class )->name('articles.create');
    Route::get('/user/article/{id}/edit', EditArticle::class )->name('article.edit');
    Route::get('/user/category/{id}/edit', EditCategory::class )->name('category.edit');
    Route::get('/user/sub-category/{id}/edit', EditSubCategory::class )->name('sub-category.edit');
    Route::get('/user/category/create', CreateCategory::class )->name('category.create');
    Route::get('/user/sub-category/create', CreateSubCategory::class )->name('sub-category.create');



});
// Route::get('user/dashboard' , AdminDashboard::class)->name('dashboard');
Route::name('admin.')->prefix('admin')->group(function (){
    Route::get('/login' ,  AdminLoginComponent::class)->name('login');
    Route::get('/register' ,  AdminRegisterComponent::class)->name('register');

    Route::middleware(['auth:admin'])->group(function(){
        Route::get('/dashboard' , AdminDashboard::class)->name('dashboard');
        Route::get('/articles' , AdminShowArtcles::class)->name('articles');
        Route::get('/article/{id}/edit' , AdminEditArtcles::class)->name('edit.articles');

    });

});

