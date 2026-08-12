<?php

use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\NoticiaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "home"])->name('home');
Route::get("/conosco", [HomeController::class, "contato"])->name("contato");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

//Rotas Noticias

    Route::get('/dashboard/noticias',[NoticiaController::class,'index'])->name('admin.noticias.index');

    Route::get('/dashboard/noticias/cadastrar', [NoticiaController::class, 'create'])->name('admin.noticias.cadastrar');

    Route::post('/dashboard/noticias/cadastrar', [NoticiaController::class, 'store'])->name('admin.noticias.armazenar');

    Route::get('/dashboard/noticias/editar/{id}', [NoticiaController::class, 'edit'])->name('admin.noticias.editar');

    Route::put('/dashboard/noticias/editar/{id}', [NoticiaController::class, 'update'])->name('admin.noticias.atualizar');

    Route::delete('/dashboard/noticias/excluir/{id}', [NoticiaController::class, 'destroy'])->name('admin.noticias.excluir');

//Rotas categorias

    Route::get('/dashboard/categorias', [CategoriaController::class, 'index'])->name('admin.categorias.index');

    Route::get('/dashboard/categorias/cadastrar', [CategoriaController::class, 'create'])->name('admin.categorias.cadastrar');

    Route::post('/dashboard/categorias/cadastrar', [CategoriaController::class, 'store'])->name('admin.categorias.armazenar');

    Route::get('/dashboard/categorias/editar/{id}', [CategoriaController::class, 'edit'])->name('admin.categorias.editar');

    Route::put('/dashboard/categorias/editar/{id}', [CategoriaController::class, 'update'])->name('admin.categorias.atualizar');

    Route::delete('/dashboard/categorias/excluir/{id}', [CategoriaController::class, 'destroy'])->name('admin.categorias.excluir');

    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
