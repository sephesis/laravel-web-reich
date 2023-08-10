<?php

use App\Http\Controllers\Article\ListController;
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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

//'role:admin'
//Route::group(['middleware' => ['']], function () {
    Route::get('/admin', \App\Http\Controllers\Admin\AdminController::class)->name('admin.index');
//});

//'middleware' => ['']
Route::group(['prefix' => 'admin/tags'], function(){
    Route::get('/', \App\Http\Controllers\Tag\IndexController::class)->name('tag.index');
    Route::get('/create', \App\Http\Controllers\Tag\CreateController::class)->name('tag.create');
    Route::post('/', \App\Http\Controllers\Tag\StoreController::class)->name('tag.store');
    Route::get('/{tag}/edit', \App\Http\Controllers\Tag\EditController::class)->name('tag.edit');
    Route::get('/{tag}', \App\Http\Controllers\Tag\ShowController::class)->name('tag.show');
    Route::post('/{tag}/update', \App\Http\Controllers\Tag\UpdateController::class)->name('tag.update');
    Route::post('/{tag}/delete', \App\Http\Controllers\Tag\DeleteController::class)->name('tag.delete');
});

Route::group(['prefix' => 'admin/projects'], function(){
    Route::get('/', \App\Http\Controllers\Project\IndexController::class)->name('project.index');
    Route::get('/create', \App\Http\Controllers\Project\CreateController::class)->name('project.create');
    Route::post('/', \App\Http\Controllers\Project\StoreController::class)->name('project.store');
    Route::get('/{project}/edit', \App\Http\Controllers\Project\EditController::class)->name('project.edit');
    Route::get('/{project}', \App\Http\Controllers\Project\ShowController::class)->name('project.show');
    Route::post('/{project}/update', \App\Http\Controllers\Project\UpdateController::class)->name('project.update');
    Route::post('/{project}/delete', \App\Http\Controllers\Project\DeleteController::class)->name('project.delete');
});


Route::group(['prefix' => 'admin/articles'], function() {
    Route::get('/', \App\Http\Controllers\Article\IndexController::class)->name('article.index');
    Route::get('/create', \App\Http\Controllers\Article\CreateController::class)->name('article.create');
    Route::post('/', \App\Http\Controllers\Article\StoreController::class)->name('article.store');
    Route::get('/{article}/edit', \App\Http\Controllers\Article\EditController::class)->name('article.edit');
    Route::get('/{article}', \App\Http\Controllers\Article\ShowController::class)->name('article.show');
    Route::patch('/{article}/update', \App\Http\Controllers\Article\UpdateController::class)->name('article.update');
    Route::post('/{article}/delete', \App\Http\Controllers\Article\DeleteController::class)->name('article.delete');
});

Route::group(['prefix' => 'admin/solutions'], function() {
    Route::get('/', \App\Http\Controllers\Solution\IndexController::class)->name('solution.index');
    Route::get('/create', \App\Http\Controllers\Solution\CreateController::class)->name('solution.create');
    Route::post('/', \App\Http\Controllers\Solution\StoreController::class)->name('solution.store');
    Route::get('/{solution}/edit', \App\Http\Controllers\Solution\EditController::class)->name('solution.edit');
    Route::get('/{solution}', \App\Http\Controllers\Solution\ShowController::class)->name('solution.show');
    Route::post('/{solution}/update', \App\Http\Controllers\Solution\UpdateController::class)->name('solution.update');
    Route::post('/{solution}/delete', \App\Http\Controllers\Solution\DeleteController::class)->name('solution.delete');
});

Route::group(['prefix' => 'admin/services'], function() {
    Route::get('/', \App\Http\Controllers\Service\IndexController::class)->name('service.index');
    Route::get('/create', \App\Http\Controllers\Service\CreateController::class)->name('service.create');
    Route::post('/', \App\Http\Controllers\Service\StoreController::class)->name('service.store');
    Route::get('/{service}/edit', \App\Http\Controllers\Service\EditController::class)->name('service.edit');
    Route::get('/{service}', \App\Http\Controllers\Service\ShowController::class)->name('service.show');
    Route::patch('/{service}/update', \App\Http\Controllers\Service\UpdateController::class)->name('service.update');
    Route::post('/{service}/delete', \App\Http\Controllers\Service\DeleteController::class)->name('service.delete');
});

Route::group(['prefix' => 'admin/options'], function(){
    Route::get('/', \App\Http\Controllers\Option\IndexController::class)->name('option.index');
    Route::get('/{option}/edit', \App\Http\Controllers\Option\EditController::class)->name('option.edit');
    Route::get('/{option}', \App\Http\Controllers\Option\EditController::class)->name('option.update');
});


Route::group(['prefix' => 'admin/technologies'], function(){
    Route::get('/', \App\Http\Controllers\Technology\IndexController::class)->name('technology.index');
    Route::get('/create', \App\Http\Controllers\Technology\CreateController::class)->name('technology.create');
    Route::post('/', \App\Http\Controllers\Technology\StoreController::class)->name('technology.store');
    Route::get('/{technology}/edit', \App\Http\Controllers\Technology\EditController::class)->name('technology.edit');
    Route::get('/{technology}', \App\Http\Controllers\Technology\ShowController::class)->name('technology.show');
    Route::post('/{technology}/update', \App\Http\Controllers\Technology\UpdateController::class)->name('technology.update');
    Route::post('/{technology}/delete', \App\Http\Controllers\Technology\DeleteController::class)->name('technology.delete');
});

Route::group(['prefix' => 'admin/groups'], function(){
    Route::get('/', \App\Http\Controllers\TechnologyGroup\IndexController::class)->name('group.index');
    Route::get('/create', \App\Http\Controllers\TechnologyGroup\CreateController::class)->name('group.create');
    Route::post('/', \App\Http\Controllers\TechnologyGroup\StoreController::class)->name('group.store');
    Route::get('/{technology-group}/edit', \App\Http\Controllers\TechnologyGroup\EditController::class)->name('group.edit');
    Route::get('/{technology-group}', \App\Http\Controllers\TechnologyGroup\ShowController::class)->name('group.show');
    Route::post('/{technology-group}/update', \App\Http\Controllers\TechnologyGroup\UpdateController::class)->name('group.update');
    Route::post('/{technology-group}/delete', \App\Http\Controllers\TechnologyGroup\DeleteController::class)->name('group.delete');
});

Route::group(['prefix' => 'admin/titles'], function(){
    Route::get('/edit', \App\Http\Controllers\Title\EditController::class)->name('title.edit');
    Route::post('/update', \App\Http\Controllers\Title\UpdateController::class)->name('title.update');
});


// Route::group(['prefix' =>  'faq'], function(){
//     //Route::get('/', \App\Http\Controllers\Faq\)
// });

Route::group(['prefix' => 'articles'], function(){
    Route::get('/', \App\Http\Controllers\Article\ListController::class)->name('article.list');
    Route::get('{slug}', \App\Http\Controllers\Article\ViewController::class)->name('article.view');
});

Route::group(['prefix' => 'projects'], function(){
    Route::get('/', \App\Http\Controllers\Project\ListController::class)->name('project.list');
});

Route::group(['prefix' => 'services'], function(){
    Route::get('/', \App\Http\Controllers\Solution\ListController::class)->name('solution.list');
});

Route::group(['prefix' => 'contacts'], function(){
    Route::get('/', \App\Http\Controllers\Contact\ViewController::class)->name('contact.view');
});


Route::post('/contact/submit', \App\Http\Controllers\Form\FormController::class)->name('feedback.send');


//Auth::routes();

//Auth::routes();



