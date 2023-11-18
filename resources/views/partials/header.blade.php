@php
    $menu_genre = config('menues.menu_genre');
    $menu_account = config('menues.menu_account');
@endphp

<header>

    <div class="fixed">
        <div class="container flex">

            <nav>
                <ul class="flex">
                    @foreach ($menu_genre as $item)

                        <li><a href="{{ $item['href'] }}" target="_self">{{ $item['text'] }}</a></li>
                    @endforeach
                </ul>
            </nav>

            <img class="logo" src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="Logo">

            <nav>
                <ul class="flex">
                    @foreach ($menu_account as $item)

                    <li>
                        <a href="{{ $item['href'] }}" target="_self">
                            <i class="{{ $item['icon'] }}"></i>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </nav>

        </div>
    </div>


</header>
