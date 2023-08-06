<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SessionController;


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

Route::get('/', [HomeController::class, 'index']);
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::post('/reserve', [HomeController::class, 'reservation_confirm'])->name('reserve');

Route::get('/only-verified', function () {
    return view('only-verified');
 })->middleware(['auth', 'verified']);

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('/admin/dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// Manage Admins
Route::get('/admin/show', [AdminController::class, 'admin_show'])->name('/admin/show');
Route::get('/admin-add', [AdminController::class, 'add_admin'])->name('/admin-add');
Route::post('/admin-add-process', [AdminController::class, 'add_admin_process'])->name('/admin-add-process');
Route::get('/admin/delete/{id}', [AdminController::class, 'delete_admin'])->name('/admin/delete');
Route::get('/admin/edit/{id}', [AdminController::class, 'edit_admin'])->name('/admin/edit');
Route::post('/admin-edit-process/{id}', [AdminController::class, 'edit_admin_process'])->name('/admin-edit-process');

// Manage Categories
Route::get('/admin/categories', [CategorieController::class, 'categories'])->name('/admin/categories');
Route::get('/add/categorie', [CategorieController::class, 'add_categorie'])->name('/add/categorie');
Route::post('/categorie/add/process', [CategorieController::class, 'categorie_add_process'])->name('/categorie/add/process');
Route::get('/categorie/edit/{id}', [CategorieController::class, 'categorie_edit'])->name('/categorie/edit');
Route::post('/edit/categorie/process/{id}', [CategorieController::class, 'categorie_edit_process'])->name('/edit/categorie/process');
Route::get('/categorie/delete/{id}', [CategorieController::class, 'categorie_delete_process'])->name('/categorie/delete');
// Manage Chefs
Route::get('/admin/chefs', [ChefController::class, 'chefs'])->name('/admin/chefs');
Route::get('/add/chef', [ChefController::class, 'add_chef'])->name('/add/chef');
Route::post('/chef/add/process', [ChefController::class, 'chef_add_process'])->name('/chef/add/process');
Route::get('/chef/edit/{id}', [ChefController::class, 'chef_edit'])->name('/chef/edit');
Route::post('/edit/chef/process/{id}', [ChefController::class, 'chef_edit_process'])->name('/edit/chef/process');
Route::get('/chef/delete/{id}', [ChefController::class, 'chef_delete_process'])->name('/chef/delete');
// Manage Reservations
Route::get('/admin/reservation', [ReservationController::class, 'reservation'])->name('/admin/reservation');
// Manage Sessions
Route::get('/admin/sessions', [SessionController::class, 'allsessions'])->name('/admin/sessions');
// Manage Plats
Route::get('/admin/food-menu', [PlatController::class, 'food_menu'])->name('/admin/food-menu');
Route::get('/add/menu', [PlatController::class, 'add_menu'])->name('/add/menu');
Route::get('/menu/search', 'PlatController@search')->name('/menu/search');
Route::post('/menu/add/process', [PlatController::class, 'menu_add_process'])->name('/menu/add/process');
Route::get('/menu/delete/{id}', [PlatController::class, 'menu_delete_process'])->name('/menu/delete');
Route::get('/menu/edit/{id}', [PlatController::class, 'menu_edit'])->name('/menu/edit');
Route::post('/menu/edit/process/{id}', [PlatController::class, 'menu_edit_process'])->name('/menu/edit/process');
Route::get('/plats/toggle-enable-disable', [PlatController::class, 'toggleEnableDisable'])->name('plats.toggle-enable-disable');
Route::get('/search', [PlatController::class, 'menu_search_process'])->name('search');

});

require __DIR__.'/auth.php';
