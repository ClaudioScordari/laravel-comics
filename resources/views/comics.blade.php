@extends('layouts.main-layout')

@section('main-content')

@php
$datasNav = [
[
'img' => '../images/buy-comics-digital-comics.png',
'text'=> 'DIGITAL COMICS'
],
[
'img' => '../images/buy-comics-merchandise.png',
'text'=> 'DC MERCHANDISE'
],
[
'img' => '../images/buy-comics-shop-locator.png',
'text'=> 'COMIC SHOP LOCATOR'
],
[
'img' => '../images/buy-comics-subscriptions.png',
'text'=> 'SUBSCIPTIONS'
],
[
'img' => '../images/buy-dc-power-visa.svg',
'text'=> 'DC POWER VISA'
]
];
@endphp

<!-- Cards section -->
<section>
    <div class="jumbotron">
        <!-- img background -->

        <div>
            <a href="">
                CURRENT SERIES
            </a>
        </div>
    </div>

    <div class="container">
        <div class="all-comics">

            <!-- Card -->
            @foreach ($comics as $oneComic)
            <div class="one-comic">
                <div class="img-comic">
                    <img src="{{ $oneComic['thumb'] }}">
                </div>

                <br>

                <div>
                    {{ $oneComic['title'] }}
                </div>
            </div>
            @endforeach

        </div>

        <div class="load_more-button">
            <a href="">
                LOAD MORE
            </a>
        </div>

    </div>
</section>

<!-- Merch -->
<section>
    <div class="my-container">
        <nav>
            <ul>
                @foreach ($datasNav as $link)
                <li>
                    <div>
                        <img src="{{ $link['img'] }}">
                    </div>

                    <div>
                        {{ $link['text'] }}
                    </div>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</section>
@endsection