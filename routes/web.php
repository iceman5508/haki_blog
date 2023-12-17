<?php

use App\Http\Controllers\AdminTagsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicViewController;
use App\Http\Controllers\RegisterController;
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
Route::fallback(function () {
    return redirect('/');
});

Route::get('/', [PublicViewController::class, 'index'])->name('home');
Route::get('/posts', [PublicViewController::class, 'allPosts'])->name('posts');
Route::get('/posts/{post}', [PublicViewController::class, 'show'])->name('post');
Route::post('/posts/{post}/comment', [PublicViewController::class, 'store'])->name('post.comment');
Route::get('post/search', [PublicViewController::class,'search'])->name('post.search');
Route::get('/comments/{post}', [PublicViewController::class,'comments'])->name('comments');
Route::post('/subscribe', [PublicViewController::class, 'subscribe'])->name('subscribe');
Route::get('/contact', [PublicViewController::class, 'contact'])->name('contact');
Route::post('/contact', [PublicViewController::class, 'postContact'])->name('contact.post');
Route::get('/about', [PublicViewController::class, 'about'])->name('about');


Route::post("/logout",[LoginController::class,'logout'])->name('logout');

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::middleware(['guest'])->group(function () {
        Route::get('/register', [RegisterController::class, 'index'])->name('register.form');
        Route::post('/register', [RegisterController::class, 'store'])->name('register');

        Route::get('/login', [LoginController::class, 'index'])->name('login.form');
        Route::post('/login', [LoginController::class, 'store'])->name('login');
    });


    Route::middleware(['auth'])->group(function () {

        Route::get('/posts', [PostController::class, 'index'])->name('admin.posts');
        Route::prefix('/posts')->group(function () {
            Route::get('/create', [PostController::class, 'show'])->name('admin.posts.show');
            Route::post('/create', [PostController::class, 'store'])->name('admin.posts.store');
            Route::get('/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit')->whereNumber('post');
            Route::patch('/{post}/edit', [PostController::class, 'update'])->name('admin.posts.update')->whereNumber('post');
            Route::delete('/{post}', [PostController::class, 'destroy'])->name('admin.posts.delete')->whereNumber('post');
        });


        Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories');
        Route::prefix('/categories')->group(function () {
            Route::get('/create', [CategoryController::class, 'show'])->name('admin.categories.show');
            Route::post('/create', [CategoryController::class, 'store'])->name('admin.categories.store');
            Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit')->whereNumber('category');
            Route::patch('/{category}/edit', [CategoryController::class, 'update'])->name('admin.categories.update')->whereNumber('category');
            Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.delete')->whereNumber('category');
        });

        Route::get('/comments', [CommentController::class, 'index'])->name('admin.comments');
        Route::prefix('/comments')->group(function () {
            Route::get('/create', [CommentController::class, 'show'])->name('admin.comments.show');
            Route::post('/create', [CommentController::class, 'store'])->name('admin.comments.store');
            Route::get('/{comment}/edit', [CommentController::class, 'edit'])->name('admin.comments.edit')->whereNumber('comment');
            Route::patch('/{comment}/edit', [CommentController::class, 'update'])->name('admin.comments.update')->whereNumber('comment');
            Route::delete('/{comment}', [CommentController::class, 'destroy'])->name('admin.comments.delete')->whereNumber('comment');
        });


    });


    Route::resource('tags', AdminTagsController::class);
    Route::get('/tags-suggest',[AdminTagsController::class, 'showTagsSuggestions'])->name('tag-suggest');



});


