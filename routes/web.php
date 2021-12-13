<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('login', function () {
    return view('home');
});


//Routes in  web frontend client
Route::get('/', 'WebController@index')->name('index');
Route::get('/Intercambios', 'WebController@change')->name('change');
Route::get('/Ayuda', 'WebController@help')->name('help');
Route::get('/Blog', 'WebController@blog')->name('blog');

Route::get('/Blog-Mas/{id}', 'WebController@showBlog');
Route::get('/News-Mas/{id}', 'WebController@showNews');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/user-perfil', 'WebController@userPerfil');
    Route::post('/user-update/{id}', 'WebController@updateUser');
});
/**

    TODO:
    - Rutas temporales  por diseño
 */
Route::get('/change-page', 'WebController@changeView');
Route::get('/blog-page', 'WebController@blogView');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('preguntas-respuetas', 'QuestionsAndanswersController');
    Route::resource('usuarios', 'UsersController');
    Route::resource('productos-servicios', 'ProductsController');
    Route::resource('categorias', 'CategoriesController');
    Route::resource('post-blogs', 'BlogsController');
    Route::resource('noticias', 'NewController');
});

//rutas de luis
Route::get('/paginastatic-intercambios', 'PaginasestaticasController@intercambios')->name('paginastatic01');
Route::get('/paginastatic-ofertas', 'PaginasestaticasController@ofertas')->name('paginastatic02');

/* Llamadas de páginas estáticas */
Route::get('/filtrarcategorias', 'FiltrarCategoriasController@index')->name('filtarcategorias');
Route::get('/filtrarnew', 'FiltrarCategoriasController@indexnew')->name('filtrarew');
