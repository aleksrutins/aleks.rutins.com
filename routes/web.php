<?php

use App\Models\Post;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/projects', function() {
    return view('projects');
})->name('projects');

Route::get('/blog', function() {
    return view('blog.index', [ 'posts' => Post::all(['slug', 'title', 'created_at', 'author_email', 'snippet']) ]);
})->name('blog');

Route::get('/blog/{slug}', function(string $slug) {
    $post = Post::where('slug', $slug)
        ->select('title', 'author_email', 'created_at', 'updated_at', 'content')
        ->first();
    return view('blog.post', [ 'post' => $post ]);
})->name('post');