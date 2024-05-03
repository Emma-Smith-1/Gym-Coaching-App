<?php

use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\CoachController;
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

Route::get('/posts', [PostController::class, 'index'])
    ->name('posts');

Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])
    ->name('posts.store');

Route::get('/profile', [ProfileController::class, 'show'])
    ->name('profile.show');

Route::get('/my_posts', [PostController::class, 'myIndex'])
    ->name('my_posts');

Route::get('/coaches', [CoachController::class, 'index'])
    ->name('coaches');

Route::get('/my_coaches', [CoachController::class, 'myIndex'])
    ->name('my_coaches');

Route::get('/coaches/{id}', [CoachController::class, 'show']);

Route::post('/posts/{post}/like', [PostController::class, 'like'])->name('posts.like');

Route::get('/posts/{post_id}/comments', [CommentController::class, 'commentsIndex'])
    ->name('posts.comments.index');

Route::get('/posts/{post}/comments/replies', [ReplyController::class, 'index'])
    ->name('posts.comments.reples.index');

Route::get('/posts/{post_id}/comments/create', [CommentController::class, 'create'])
    ->name('comments.create');

Route::get('/posts/comments/create', [CommentController::class, 'create'])
    ->name('comments.create');

Route::post('/posts/{post}/comments', [CommentController::class, 'store'])
    ->name('posts.comments.store');

Route::get('/posts/{id}', [PostController::class, 'show']);

Route::get('/my_comments', [CommentController::class, 'myIndex'])
    ->name('my_comments');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $recentPosts = Post::orderBy('created_at', 'desc')->take(3)->get();
    return view('dashboard', compact('recentPosts'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
