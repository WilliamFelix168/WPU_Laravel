@extends('layouts.main')

@section('container')
    <article>
        <article class="mb-5">
            <h2>
                {{ $post->title }}
            </h2>
            {!! $post->body !!}
        </article>
    </article>

    <a href="/posts">Back to Post</a>
    
@endsection
