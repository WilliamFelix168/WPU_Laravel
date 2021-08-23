@extends('layouts.main')


@section('container')

@foreach ($posts as $item)
    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $item->slug }}">{{ $item->title }}</a>
        </h2>
        <p>{{ $item->excerpt }}</p>
    </article>
@endforeach

@endsection

