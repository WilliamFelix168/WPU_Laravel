@extends('layouts.main')


@section('container')

@foreach ($posts as $item)
    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $item["slug"] }}">{{ $item["Title"] }}</a>
        </h2>
        <h5>By: {{ $item["Author"] }}</h5>
        <p>{{ $item["Body"] }}</p>
    </article>
@endforeach

@endsection

