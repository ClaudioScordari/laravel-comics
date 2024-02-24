@php
$arrayNav = [
'CHARACTER',
'COMICS',
'MOVIES',
'TV',
'GAMES',
'COLLECTIBLES',
'VIDEOS',
'FANS',
'NEWS',
'SHOP'
]
@endphp

<header>
    <div class="my-container">
        <div>
            <img src="../../images/dc-logo.png" alt="">
        </div>

        <div>
            <nav>
                <ul>
                    @foreach ($arrayNav as $link)
                    <li>
                        <a href="">
                            {{ $link }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</header>