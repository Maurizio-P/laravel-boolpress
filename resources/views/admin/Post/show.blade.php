@extends('layouts.admin')

@section('content')
<h1>Pagina admin.post.show</h1>
<p>Qui mostro il singolo post</p>

<div class="post">
    <h2>{{$post['title']}}</h2>
    <p>{{$post['article']}}</p>
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
@endsection