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
                'as' => 'Allautoparts.',
                'prefix' => 'Allautoparts',
            ]
            , function () {

////                Route::get('', [Phpcatcom\Permission\Gui\Controllers\PermissionGuiController::class, 'showIndex'])
////                    ->name('index');
////
////                Route::resource('role', Phpcatcom\Permission\Gui\Controllers\RoleController::class)
////                    ->only('index', 'store');
////
//                Route::apiResource('user', Phpcatcom\Permission\Gui\Controllers\UserController::class)
//                    ->only('update');
//                Route::post('user/setAccessFull/{id}', [Phpcatcom\Permission\Gui\Controllers\UserController::class, 'setAccessFull'])->name('user.setAccessFull');
////
////                Route::resource('places', Phpcatcom\Permission\Gui\Controllers\PlaceController::class)
////                    ->only('index', 'store');
////
////                Route::group([
////                        'as' => 'places.',
////                        'prefix' => 'places',
////                    ]
////                    , function () {
////                        Route::get('refresh', [Phpcatcom\Permission\Gui\Controllers\PlaceController::class, 'refresh'])
////                            ->name('refresh')
////                        ;
////                    });
////
////
////                Route::resource('setter', Phpcatcom\Permission\Gui\Controllers\SetterController::class)
////                    ->only('index', 'store');

            });
    });
