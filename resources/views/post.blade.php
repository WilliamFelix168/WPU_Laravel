@extends('layouts.main')

@section('container')
    <article>
        <article class="mb-5">
            <h2>
                {{ $post["Title"] }}
            </h2>
            <h5>By: {{ $post["Author"] }}</h5>
            <p>{{ $post["Body"] }}</p>
        </article>
    </article>

    <a href="/posts">Back to Post</a>
    
@endsection