<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RplController;
use App\Http\Controllers\AlumniController;
use App\Models\Alumni;
use App\User;




Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});

Route::redirect('/home', '/admin');
Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');
});

Auth::routes();
Route::get('/muridrpl',[RplController::class, 'index'])->name('muridrpl');
Route::get('/filterrpl', [RplController::class, 'filterrpl']);
Route::get('/tambahmurid',[RplController::class, 'tambahmurid'])->name('tambahmurid') ;
Route::post('/insertdata',[RplController::class, 'insertdata'])->name('insertdata') ;
Route::get('/tambahstatus/{id}',[RplController::class, 'tambahstatus'])->name('tambahstatus') ;
Route::post('/updatestatus/{id}',[RplController::class, 'updatestatus'])->name('updatestatus') ;
Route::get('/nilai/{id}',[NilaiController::class, 'nilai']);
Route::get('/hapusrpl/{id}',[RplController::class, 'hapusrpl'])->name('hapusrpl') ;
Route::get('/exportrpl',[RplController::class, 'exportrpl'])->name('exportrpl') ;
Route::get('/Importdatarpl',[RplController::class, 'Importdatarpl'])->name('Importdatarpl') ;
Route::post('/importrpl',[RplController::class, 'importrpl'])->name('importrpl') ;
Auth::routes();

Route::get('/dashboard', function () {
        $alumnis = Alumni::with('user')->get();
        return view('alumni.dashboard', ['alumnis' => $alumnis]);
    })->name('dashboard');

    Route::get('/create', [AlumniController::class, 'create'])->name('create');
    Route::post('/store', [AlumniController::class, 'store'])->name('store'); 
    Route::get('/edit/{id}', [AlumniController::class, 'edit'])->name('edit'); 
    Route::post('/update/{id}',[AlumniController::class, 'update'])->name('update') ;
    Route::get('/hapus/{id}', [AlumniController::class, 'hapus'])->name('hapus'); 
    Route::get('/export/{id}',[AlumniController::class, 'export'])->name('export') ;
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
