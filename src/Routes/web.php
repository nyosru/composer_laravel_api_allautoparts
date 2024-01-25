<?php

use Illuminate\Support\Facades\Route;

//use Phpсatсom\LaravelPermissionGui\Http\Controllers\PermissionGuiController;

use App\Http\Controllers\Controller;


Route::group([
        'as' => 'phpcatcom.',
        'prefix' => 'phpcatcom',
    ]
    , function () {
        Route::group([
                'as' => 'permission.',
                'prefix' => 'permission',
            ]
            , function () {

                Route::get('', [Phpcatcom\Permission\Gui\Controllers\PermissionGuiPageController::class, 'showIndex'])
                    ->name('index');

                    Route::get('opisanie', [Phpcatcom\Permission\Gui\Controllers\PermissionGuiPageController::class, 'opisanie'])
                    ->name('opisanie');

//                dd(\Phpcatcom\Permission\Models\Role::count() );

//                Route::group(
//                    ( \Phpcatcom\Permission\Models\Role::count() > 1 ?
//                    [
//                    'middleware' => 'auth.role',
//                ] : [] ), function () {

                    Route::resource('role', Phpcatcom\Permission\Gui\Controllers\RoleController::class)
                    ->only('index', 'store');

                Route::resource('user', Phpcatcom\Permission\Gui\Controllers\UserController::class)
                    ->only(
                        'index',
                        'store'
                    );
//                Route::get('u', [ Phpcatcom\Permission\Gui\Controllers\UserController::class, 'index'])->name('user.index');

                Route::resource('places', Phpcatcom\Permission\Gui\Controllers\PlaceController::class)
                    ->only('index', 'store');

                Route::group([
                        'as' => 'places.',
                        'prefix' => 'places',
                    ]
                    , function () {
                        Route::get('refresh', [Phpcatcom\Permission\Gui\Controllers\PlaceController::class, 'refresh'])
                            ->name('refresh');
                        Route::get('fresh', [Phpcatcom\Permission\Gui\Controllers\PlaceController::class, 'fresh'])
                            ->name('fresh');
                    });


                Route::resource('setter', Phpcatcom\Permission\Gui\Controllers\SetterController::class)
                    ->only('index', 'store');
                // изменение полного доступа для роли
                Route::post('setAccessFull/{role}', [Phpcatcom\Permission\Gui\Controllers\SetterController::class, 'setAccessFull'])
                    ->name('setAccessFull');

//            });
            });
    });
