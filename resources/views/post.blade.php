@extends('layouts.main')

@section('container')
<article>
    <article class="mb-5">
        <h2>
            {{ $post->title }}
        </h2>

        <p>By . William Felix in <a href="/categories /{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>
</article>

<a href="/posts">Back to Post</a>

@endsection