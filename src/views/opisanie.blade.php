@extends('phpcatcom/permission/gui::layouts.app')

@section('content')
    <style>
        code{
            padding: 10px;
            display: block;
            background-color: rgba(0,0,0,0.2);
        }
    </style>
    <p>
        эта штука (с веб интерфейсом и небольшой установкой) для управления правами пользователей в вашем проекте
    </p>
    <p>
        # установка и запуск
    </p>
    <p>
        установка пакета композер ( так же установится и phpcatcom/laravel-permission )
    </p>
    <p>
        <code><pre>       composer require phpcatcom/laravel-permission-gui</pre></code>
    </p>
    <p>
        установка баз данных
    </p>
    <code>
        <pre>       php artisan migrate</pre></code>
    <p>
        для контроля доступа к роутам, роутам нужно назначить мидлваре
    </p>
    <p>
        <code>        <pre>       Route::get('/***', [***::class,'***'])
    ->middleware(['auth.role'])
    ->name('***');</pre></code>
    </p>
    <p>
        или роуты что есть положить в группу
    </p>
    <p>
        <code>
        <pre>       Route::group(['middleware' => 'auth.role'],
        function () {

        Route::***
        === тут роуты что будут участовать при управлении доступами
        Route::***

        });</pre></code>
    </p>
    <p>
        заходим в веб интерфейс
    </p>
    <p>
        <code>
            <pre>       ** ваш домен **/phpcatcom/permission/</pre></code>
    </p>
    <p>
        и можно работать с ролями
    </p>
    <p>
        ---
    </p>
    <p>
        первый сценарий для работы с ролями
    </p>
    <p>
        + создаёте роль
        + назначаете эту роль вашему пользователю
        + даёте и отключаете доступ к роуту, проверяете на сайте

    </p>
    <p>
        ---
    </p>
    <p>
        Права доступа работают только тогда когда из роута идёт вызов контроллера, роут внутри которого функция и
        какойто код не получается ограничить по мидлваре что используем
    </p>
    <p>
        такой сработает
    </p>
    <p>
        <code>
        <pre>       Route::get('/dashboard3', [\App\Http\Controllers\JobController::class, 'index'])
        ->name('dashboard3');</pre></code>
    </p>
    <p>
        а такой нет
    </p>
    <p>
        <code>
        <pre>       Route::get('/dashboard2', function () {
        return view('dashboard2');
        })
        ->name('dashboard2');
        </pre></code>
    </p>

@endsection
