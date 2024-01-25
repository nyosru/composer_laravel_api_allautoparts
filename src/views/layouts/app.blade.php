<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Управление правами доступа пользователей</title>

    <link type="image/x-icon" href="https://php-cat.com/phpcat/favcat.ico" rel="shortcut icon"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css"/>

    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>

    {{--        @livewireStyles--}}

</head>

<body class="antialiased">

<header>
    @include('phpcatcom/permission/gui::layouts.header')
</header>

{{--full_access_count: {{$full_access_count ?? 'x'}}--}}
@if( $full_access_count == 0)
    <div class="bg-yellow-300 px-10 py-1 m-10 text-center"><b>Внимание!! Управление правами сейчас НЕ работает</b>
        <br/>
        Для работы дополнения > назначте полный доступ 1 или более пользователю
         (можете назначить в <a href="/phpcatcom/permission/user" class="text-blue-500 underline">списке
            пользователей</a>)
    </div>
@else
    @if( $role_count == 0)
        <div class="bg-yellow-300 px-10 py-1 m-10 text-center"><b>Добавте роль</b>
            <br/>
            Для роли сможете назначить права доступа и затем пользователям назначать подготовленные роли
            (работа с ролями в <a href="/phpcatcom/permission/role" class="text-blue-500 underline">разделе "роли"</a>)
        </div>
@endif
@endif

<main style="min-height:80vh;">
    <div class="container mx-auto">
        <div class="grid grid-cols-4 gap-4">
            <div>
                @include('phpcatcom/permission/gui::layouts.menu')
            </div>
            <div class="col-span-3">@yield('content')</div>
        </div>
    </div>
</main>
@include('phpcatcom/permission/gui::layouts.footer')
{{--@livewireScripts--}}
</body>

{{--<script src="/bg/three.min.js"></script>--}}
{{--<script src="/bg/bg-22.js"></script>--}}

{{--<script src="/bg/bg-24.js"></script>--}}
{{--<script src="/bg/bg-42.js"></script>--}}

{{--<style>#bg-42 {--}}
{{--        min-height: 520px;--}}
{{--        margin: 20px 0;--}}
{{--    }</style>--}}

</html>
