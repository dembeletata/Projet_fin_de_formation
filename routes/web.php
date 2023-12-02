<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MessageController;
use App\Models\Post;
use App\Models\Message;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\AdminController;

Route::get('/admin', [PostController::class, 'admin']);
Route::get('/admin/users/produit', [PostController::class, 'ListProduit']);
Route::get('/admin/users/categorie', [CategorieController::class, 'categorieproduit']);
Route::get('/admin/users/message', [MessageController::class, 'message']);
Route::get('/admin/users/tableau', [AdminController::class, 'tableau']);


Route::get('', [PostController::class, 'home']);
Route::post('/admin/traitement', [PostController::class, 'ajouter_post_traitement']);
Route::get('/panier', [PostController::class, 'panier']);
Route::post('/contact/traitement', [MessageController::class, 'envoyer_message_traitement']);
Route::get('/contact', [MessageController::class, 'contact']);
Route::post('/ajouter.au.panier/{id}', [PostController::class, 'ajouterAuPanier'] )->name('ajouter.au.panier');

Route::get('/apropo', function () {
        return view('apropo');
});
// Route::get('/contact', function () {
//     return view('contact');
// });
Route::post('/logout', [LoginContrller::class, 'logout'])->name('logout');
Route::delete('/remove_from_cart/{key}', [PostController::class,'remove'])->name('remove_from_cart');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');
Route::get('/admin/users/{user}', [UserController::class, 'show'])->name('admin.users.show');
Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');
Route::get('/delete-post/{id}', [PostController::class, 'delete_post']);
Route::post('/ajouter/categorie', [CategorieController::class, 'ajouter_categorie']);
