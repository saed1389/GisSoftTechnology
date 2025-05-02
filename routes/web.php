<?php

use App\Livewire\BlogDetailPage;
use App\Livewire\BlogPage;
use App\Livewire\CategoryPage;
use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/change-locale/{locale}', function ($locale) {
    if (in_array($locale, ['tr', 'en'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});

Route::get('/', HomePage::class);
Route::get('/blog', BlogPage::class)->name('blog');
Route::get('/blog/{slug}', BlogDetailPage::class)->name('blog.detail');
Route::get('category/{slug}', CategoryPage::class)->name('category');
