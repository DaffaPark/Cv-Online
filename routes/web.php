<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RplController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\MuridController;
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

Auth::routes();
Route::get('/murid',[MuridController::class, 'index'])->name('murid');
Route::get('/searchrpl',[MuridController::class, 'searchrpl'])->name('searchrpl');
Route::get('/searchtkj',[MuridController::class, 'searchtkj'])->name('searchtkj');
Route::get('/searchtv',[MuridController::class, 'searchtv'])->name('searchtv');
Route::get('/searchki',[MuridController::class, 'searchki'])->name('searchki');
Route::get('/searchdi',[MuridController::class, 'searchdi'])->name('searchdi');
Route::get('/searchpeksos',[MuridController::class, 'searchpeksos'])->name('searchpeksos');
Route::get('/searchanimasi',[MuridController::class, 'searchanimasi'])->name('searchanimasi');
Route::get('/searchfilm',[MuridController::class, 'searchfilm'])->name('searchfilm');
Route::get('/searchmm',[MuridController::class, 'searchmm'])->name('searchmm');
Route::get('/exportrpl/{id}', [CvController::class, 'printrpl']);
Route::get('/exporttkj/{id}', 'App\Http\Controllers\CvController@printtkj');
Route::get('/exporttv/{id}', 'App\Http\Controllers\CvController@printtv');
Route::get('/exportki/{id}', 'App\Http\Controllers\CvController@printki');
Route::get('/exportdi/{id}', 'App\Http\Controllers\CvController@printdi');
Route::get('/exportmm/{id}', 'App\Http\Controllers\CvController@printmm');
Route::get('/exportpeksos/{id}', 'App\Http\Controllers\CvController@printpeksos');
Route::get('/exportfilm/{id}', 'App\Http\Controllers\CvController@printfilm');
Route::get('/exportanimasi/{id}', 'App\Http\Controllers\CvController@printanimasi');
Route::get('/search', [MuridController::class, 'search'])->name('search');
Route::get('/findrpl', [MuridController::class, 'findrpl'])->name('findrpl');
Route::get('/findtkj', [MuridController::class, 'findtkj'])->name('findtkj');
Route::get('/findmm', [MuridController::class, 'findmm'])->name('findmm');
Route::get('/findtv', [MuridController::class, 'findtv'])->name('findtv');
Route::get('/findfilm', [MuridController::class, 'findfilm'])->name('findfilm');
Route::get('/findki', [MuridController::class, 'findki'])->name('findki');
Route::get('/findpeksos', [MuridController::class, 'findpeksos'])->name('findpeksos');
Route::get('/findanimasi', [MuridController::class, 'findanimasi'])->name('findanimasi');
Route::get('/finddi', [MuridController::class, 'finddi'])->name('finddi');
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
