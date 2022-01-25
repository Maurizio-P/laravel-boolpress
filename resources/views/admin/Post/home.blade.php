@extends('layouts.admin')

@section('content')
<h1>Pagina admin.post.home</h1>
<p>Qui stampiamo i post</p>

<a href="{{ route('admin.posts.create') }}">Nuovo post</a>

<div class="container">
    @dump($posts)
    @foreach ($posts as $post)
    <div class="post-container mt-4 d-flex justify-content-between align-items-center" style="border: 1px solid black; background-color:white">
        <div class="text-post">
            
            <h2>{{$post->title}}</h2>
            <p>{{$post->article}}</p>
        </div>
        <div class="link-post">
            <a class="mx-4" href="{{route('admin.posts.show', $post->id)}}"> Mostra post</a>
            <a class="mx-4" href="{{route('admin.posts.edit', $post->id)}}"> Modifica post</a>
        </div>
    </div>
    @endforeach

    <div class="box-page d-flex my-4">
        {{ $posts->links() }}
    </div>
</div>
@endsection