{{--<div class="text-center pb-3">--}}
<a href="{{ route('phpcatcom.permission.index') }}" class="p-3 m-0 block text-center"><h1
            class="text-3xl"
    >
        <img src="https://php-cat.com/phpcat/cat.png" style="display:inline-block; max-height: 4rem;"/>
        управление правами доступа
        @if( $full_access_count > 0)
            <sup class="bg-green-300 p-1">работает</sup>
@endif
    </h1></a>

@if(1==2)
    <div class="container text-center">
        @if(1==1)
            {{--    <br/>--}}
            {{--    </div>--}}
            <!-- Navigation bar -->
            {{--        <nav class="relative flex w-full items-center justify-between bg-white py-2 text-neutral-600 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 dark:text-neutral-200 md:flex-wrap md:justify-start"--}}
            {{--            >--}}
            {{--            <a href="/"><h1 style="font-size: 3rem;">php-cat.com</h1></a>--}}

            <a
                    class="inline-block
            @if( Route::currentRouteName() == 'phpcatcom.permission.index' ) active active:bg-orange-200
            @endif
            hover:bg-orange-200

            transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                    href="{{ route('phpcatcom.permission.index') }}" data-te-nav-link-ref data-te-ripple-init
                    data-te-ripple-color="light"
                    wire:navigate
            >Супер предложение!</a>

            @if(1==2)

                {{-- <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref><a
                    class="block
                    @if( Route::currentRouteName() == 'phpcat.news' ) active bg-orange-100 @endif
                    transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                    href="{{ route('phpcat.news') }}" data-te-nav-link-ref data-te-ripple-init
                    data-te-ripple-color="light"
                    wire:navigate
                    >Новости</a></li> --}}

                <a
                        class="inline-block
                                @if( Route::currentRouteName() == 'phpcat.services' ) active bg-orange-100 @endif
                                transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                        href="{{ route('phpcat.services') }}" data-te-nav-link-ref data-te-ripple-init
                        data-te-ripple-color="light"
                        wire:navigate
                >Сервисы(службы)</a>

                {{-- <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref><a
                        class="block
                        @if( Route::currentRouteName() == 'phpcat.torrent' ) active bg-orange-100 @endif
                        transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                        href="{{ route('phpcat.torrent') }}" data-te-nav-link-ref data-te-ripple-init
                        data-te-ripple-color="light"
                        wire:navigate
                        >Торенты</a></li> --}}
                {{-- <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref><a
                        class="block
                        @if( Route::currentRouteName() == 'phpcat.money' ) active bg-orange-100 @endif
                        transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                        href="{{ route('phpcat.money') }}" data-te-nav-link-ref data-te-ripple-init
                        data-te-ripple-color="light"
                        wire:navigate
                        >Деньги по быстрому</a></li> --}}

                {{--
                <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                    <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                        href="#!" data-te-nav-link-ref data-te-ripple-init
                        data-te-ripple-color="light">Home</a>
                </li>

                <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                    <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                        href="#!" data-te-nav-link-ref data-te-ripple-init
                        data-te-ripple-color="light">Features</a>
                </li>
                <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                    <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                        href="#!" data-te-nav-link-ref data-te-ripple-init
                        data-te-ripple-color="light">Pricing</a>
                </li>
                <li class="mb-2 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                    <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                        href="#!" data-te-nav-link-ref data-te-ripple-init
                        data-te-ripple-color="light">About</a>
                </li> --}}
                {{--                    </ul>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--        </nav>--}}
                {{--</div>--}}
            @endif
        @endif
    </div>
@endif
