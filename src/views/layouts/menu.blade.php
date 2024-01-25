@foreach( $menu as $m )
    <a class="block
            @if( Route::currentRouteName() == $m['route'] ) active bg-orange-200 @endif
            hover:bg-orange-100
            transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
       href="{{ route( $m['route'] ) }}" data-te-nav-link-ref data-te-ripple-init
       data-te-ripple-color="light"
       wire:navigate
    >{{$m['title']}}</a>
@endforeach
