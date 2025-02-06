<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardProgramController;
use App\Models\Program;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page', 'programs' => Program::filter(request(['search', 'kategori']))->latest()->paginate(5)->withQueryString()]);
});

Route::get('/homepage', function () {
    return view('homepage', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'JJaarr'], ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(10)->withQueryString()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['title' => count($user->posts)  . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title' => ' Articles in: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/live', function () {
    return view('live', ['title' => 'Live Streaming']);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware(IsAdmin::class);

Route::get('/dashboard/programs/checkSlug', [DashboardProgramController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/programs', DashboardProgramController::class)->middleware('auth');

Route::resource('/dashboard/kategoris', AdminCategoryController::class)->except('show')->middleware(IsAdmin::class);



Route::get('/programs', function () {
    return view('programs', ['title' => 'Program', 'programs' => Program::filter(request(['search', 'kategori']))->latest()->paginate(5)->withQueryString()]);
});

Route::get('/video/{program:slug}', function (Program $program) {
    return view('video', ['title' => 'Video detail', 'program' => $program]);
});
