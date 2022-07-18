<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\EmployersController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\TrelloController;
use App\Http\Controllers\Admin\Catalog\ProductController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\Blog\PostCommentController;
use App\Http\Controllers\PostTestController;

use App\Http\Controllers\Admin\Users\UsersController;
use App\Http\Controllers\Admin\Users\UserPermissionController;
use App\Http\Controllers\Admin\Users\UserRoleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return redirect('/blog');
});
Route::resource('blog', PostController::class)->only(['index', 'show']);    

// Request for adding comment to post
Route::post('blog/addComment', [PostCommentController::class, 'add'])->name('blog/addComment');

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index']);
    
    // Route::get('/articles', [App\Http\Controllers\Admin\ArticleController::class, 'index']);
    Route::resource('product', ProductController::class);
    Route::resource('articles', ArticleController::class);
    Route::resource('comments', CommentController::class);

    Route::resource('category', CategoryController::class);
    Route::resource('tasks', TaskController::class);
    // Request for adding hours to task
    Route::post('tasks/addHours', [App\Http\Controllers\Admin\TaskController::class, 'addHours'])->name('tasks/addHours');

    Route::get('/my-tasks', [App\Http\Controllers\Admin\TaskController::class, 'myTasks']);

    Route::resource('employers', EmployersController::class);
    Route::resource('departments', DepartmentController::class);

    Route::get('employers-import', [EmployersController::class, 'import'])->name('employers-import');
    Route::post('employers-import', [EmployersController::class, 'import'])->name('employers-import');

    Route::resource('users', UsersController::class)->except(['show']);   
    Route::resource('permissions', UserPermissionController::class);
    Route::resource('roles', UserRoleController::class);
});
