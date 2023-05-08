<?php

use Illuminate\Support\Facades\Route;
//siempre colocamos el namespace de controlador que vamos a usar
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\PostsController;

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
//posts endpoint
Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');


//ruta a welcome que devuelve la vista welcome
// Route::get('/', function () {
//     return view('welcome');
// });

//ruta a users que devuelve el string users
// Route::get('/users', function () {
//     return 'users';
// });

//ruta a users que devuelve una array(json)
// Route::get('/users', function () {
//     return ['PHP', 'Laravel', 'JavaScript'];
// });

// //ruta a users que devuelve un objeto json
// Route::get('/users', function () {
//     return response()->json([
//         'name' => 'Luis',
//         'course' => 'Laravel'
//     ]);
// });

// //ruta a users que devuelve una function
// Route::get('/users', function () {
//     return redirect('/');
// });

// //ruta para mostrar todos los alumnos
// //index es el nombre del metodo que se encuentra en el controlador
// Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');



//ruta para mostrar la vista de home
Route::get('/', function () {
    return view('home');
});

//ruta para decir que haga los 2 de abajo en 1
Route::get('products/{name}/{id}', [ProductosController::class, 'show'])->where([
    'name'=>'[a-zA-Z]+',
    'id'=>'[0-9]+'
    ]);

//ruta para devolver el producto por su nombre
//Route::get('/productos/{name}', [ProductosController::class, 'show'])->name('productos.show');

//solo dejar que usen integer los usuarios al buscar por id
//Route::get('/productos/{id}', [ProductosController::class, 'show'])->where('id', '[0-9]+')->name('productos.show');

//solo dejar que los users usen letras mayusculas o minusculas al buscar por nombre
//Route::get('/productos/{name}', [ProductosController::class, 'show'])->where('id', '[a-zA-Z]+')->name('productos.show');


// Ruta para mostrar SOLO UN producto por id con show
//Route::get('/productos/{id}', [ProductosController::class, 'show'])->name('productos.show');

// Ruta para mostrar la vista de TODOS los productos con el controllador
// Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');

// Ruta para mostrar la vista de la funcion about con el controllador
// Route::get('/productos/about', [ProductosController::class, 'about'])->name('productos.about');

// Otra manera
// Route::get('/productos', 'App\Http\Controllers\ProductosController@index')->name('productos.index');