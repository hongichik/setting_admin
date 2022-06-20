<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vendor\admin\authController;
use App\Http\Controllers\vendor\admin\imageController;
use App\Http\Controllers\vendor\admin\settingController;

Route::prefix(env('ADMIN_NAME'))->group(function () {

    Route::get('/login', [authController::class, 'index'])
        ->middleware('guest')
        ->name('admin_login');

    Route::post('/checklogin', [authController::class, 'checkLogin'])
        ->middleware('throttle:6,1')
        ->name('admin_checkLogin');

    Route::get('/logout', [authController::class, 'logOut'])
        ->middleware('throttle:6,1')
        ->name('admin_logout');
    Route::middleware(['auth'])->group(function () {
        Route::get('info',[authController::class, 'info'])->name('admin_info');
        
        Route::post('updateImgae',[authController::class, 'updateImgae'])->name('admin_updateImgae');
        Route::post('updateInfo',[authController::class, 'updateInfo'])->name('admin_updateInfo');
        Route::post('updatePass',[authController::class, 'updatePass'])->name('admin_updatePass');

        Route::get('basicSetting',[settingController::class, 'basicSetting'])->name('admin_basicSetting');

        

        Route::get('home', function ()
        {
           return view('vendor.admin.home'); 
        })->name('admin_home');
        Route::get('', function ()
        {
           return view('vendor.admin.home'); 
        })->name('admin_home');
    });



});

Route::get('/img/showimg/{fileName}', [imageController::class, 'ShowImg']);
Route::post('/img/uploadimg', [imageController::class, 'uploadImg']);

?>