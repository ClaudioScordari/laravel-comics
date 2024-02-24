@extends('layouts.main-layout')

@section('main-content')
<div>
    <ul>
        @foreach ($comics as $oneComic)
        <li>
            <h3>
                {{ $oneComic['title'] }}
            </h3>
        </li>
        @endforeach
    </ul>
</div>
@endsection