<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
// cuando no se realiza ninguna peticion adicional entre la
// peticion y la respuesta d ela vista podemos usar:
Route::view('/', 'welcome')->name('home');

/* 
existen muchos metodos para loas rutas:
Route::get();
Route::post();
Route::patch();
Route::put();
Route::delete();
Route::options();
Route::match(['put', 'patch'],'/', function(){}) //Responder varios metodos
Route::any(); //responder a todos los tipos de peticiones
 */

//Creando mas Rutas(Route's) (tipo get())
Route::view('contacto', 'contact')->name('contact');


// //array de posts
// $posts=[
//     ['title' => 'First Post'],
//     ['title' => 'Second Post'],
//     ['title' => 'Third Post'],
//     ['title' => 'Fourth Post'],
// ];
// URL , VIEW, DATA
// Route::view('blog','blog',['posts'=>$posts])->name('blog');

// Route::get('blog',function(){
//     //array de posts
// $posts=[
//     ['title' => 'First Post'],
//     ['title' => 'Second Post'],
//     ['title' => 'Third Post'],
//     ['title' => 'Fourth Post'],
// ];
// return view('blog',['posts'=>$posts]);
// })->name('blog');

// Route::get('blog',PostController::class)->name('blog'); // Solo si es un solo metodo


//Rutas del DRUD 
// Route::get('blog',[PostController::class,'index'])->name('posts.index'); //cuando vamos a relizar mas de 1 accion
// Route::get('/blog/create', [PostController::class,'create'])->name('posts.create');
// Route::post('/blog',[PostController::class,'store'])->name('posts.store'); //cuando vamos a relizar mas de 1 accion
// Route::get('/blog/{post}', [PostController::class,'show'])->name('posts.show');
// Route::get('/blog/{post}/edit', [PostController::class,'edit'])->name('posts.edit');
// Route::patch('/blog/{post}', [PostController::class,'update'])->name('posts.update');
// Route::delete('/blog/{post}',[PostController::class,'destroy'])->name('posts.destroy');

/* Como esto es un patron comun (el crud), laravel tiene un metodo especial,
que nos permite generar todas estas rutas: */

// Route::resource('posts',PostController::class);

/* si queremos dejar el nombre de rource como 'blog' podemos hacer modificaciones,
 agregando un arreglo al final del controlalodr asi: */

 Route::resource('blog', PostController::class, [
    'names' => 'posts',
    'parameters' => [
        'blog' => 'post',
    ]
]);

Route::view('nosotros', 'about')->name('about');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth','password.confirm'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
