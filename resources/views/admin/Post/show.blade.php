@extends('layouts.admin')

@section('content')
<h1>Pagina admin.post.show</h1>
<p>Qui mostro il singolo post</p>
@dump($post)

<div class="post">
    <h2>{{$post['title']}}</h2>
    <p>{{$post['article']}}</p>
    <h5>Autore: {{$post->user->name}}</h5>
    <h5>Categoria: {{$post->category->name}}</h5>

    <div class="col-7 cover-container">
        <img src="{{asset('storage/' . $post->cover_img) }}" alt="">
    </div>
</div>

<h6>Tag</h6>
<div class="d-flex">
    @foreach ($post->tags as $tag)
        
    <div class="badge">
        {{$tag->name}}
    </div>
    @endforeach
</div>

<a href="{{route('admin.posts.edit', $post->id)}} ">Modifica post</a>

<div style="margin-top: 15px">

    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post"
        class="form-delete">
        @csrf
        @method('delete')
        
        <button type="submit"
        class="">Elimina post</button>
    </form>
</div>

    {{-- @dump($post) --}}
    @endsection